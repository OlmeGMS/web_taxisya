<?php
require_once('../models/conexion.php');
require_once('../models/users.php');
require_once('../models/usersDirs.php');
require_once('../models/services.php');
require_once('../models/llaves.php');
require_once('../models/parameters.php');
require_once('../models/holidays.php');
require_once('../models/route.php');

ini_set('date.timezone', 'America/Bogota');

$consulta = new Services();
$consultaUsers = new Users();
$consultaDir = new UsersDirs();
$consultaLlave = new Llaves();
$consultaParametros = new Parameters();
$consultaRoute = new Route();

$llaveGoogleMaps = $consultaLlave->googleMaps();

$nombre = strtoupper($_POST['nombre']);
$apellido = strtoupper($_POST['apellido']);
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$dir = $_POST['dir'];
$numDir = $_POST['num_dir'];

if (strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($telefono) > 0 && strlen($dir) > 0 && strlen($numDir) > 0) {
  $direccion = "$dir $numDir";
  $pay_type = 1;
  $pay_reference = "EFECTIVO";

  $destino = "Sin destino";
  $banderazo = true;
  $factor = false;
  $fa_calidad = 0;
  $observaciones = "Ninguna";
  $nombreDIr = "";
  $nDos = "";
  $numm = "";
  $usuarioSistema = 44;
  $kind_id = 6;

  $hora = $consultaParametros->horaAcutal();
  $fecha = date('Y-m-d');
  $fechaCreacion = "$fecha $hora";

  $nombreCompleto = "$nombre $apellido";

  // Crear logica para capturar el ultimo id
  $nuevoUser = 46850;
  if ($nuevoUser == false) {
      echo "Error al crear el usuario";
  } else {
      $usuario = $consultaUsers->obtenerUltimoIdUser();
  }

  //Comunicacón con servinformacion
  $tokenServi = "Token PTMHPF0T4JS1KPQJ7NQYWJNCSRJJ8H";
  $servinfomarcion = 'https://sitidata-stdr.appspot.com/api/outobjmassive';
  $headersInfo = array('Content-Type: application/json', 'Authorization:'.$tokenServi);

  $dd = array('row' =>array(array('ciudad' => 'Bogota','direccion'=>$direccion, 'identificador' =>'1' )));

  $ch = curl_init($servinfomarcion);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headersInfo);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dd));
  $result = curl_exec($ch);

  curl_close($ch);

  //Capturar respuesta

  $regreso = json_decode($result);
  $re = json_decode(json_encode($result), true);


  $b = $regreso->{"data"};
    $c = $b[0];


    foreach ($c as $key => $value) {
      $arrayName[] = $value;
    }

    $lati = $arrayName[7];
    $barrio = $arrayName[13];
    $longi = $arrayName[18];




    $latiTo = $lati;
    $lngTo = $longi;

    //Obtener tiempo y distancia de del recorrido
    $url = 'https://maps.googleapis.com/maps/api/directions/json?departure_time=now&origin='.$lati.','.$longi.'&destination='.$latiTo.','.$lngTo.'&key='.$llaveGoogleMaps;
    $api = json_decode(file_get_contents($url), true);
    $polilinea = $api['routes'][0]['overview_polyline']['points'];

  //Obtener tiempo y distancia de del recorrido
  $distancia = 0;
  $tiempo = 0;


  $arrayRecargos = $consultaParametros->recargos($lati, $longi, $latiTo, $lngTo, $tiempo);

  if ($factor == 1) {
      $recargos = $arrayRecargos['con_calidad'];
      $factorCal = true;
  } else {
      $recargos = $arrayRecargos['sin_calidad'];
      $factorCal = false;
  }

  //info Recargos
  $recargoKm = $arrayRecargos['km'];
  $recargoPp = $arrayRecargos['puerta_a_puerta'];
  $recargoBan = $arrayRecargos['banderazo'];
  $recargominima = $arrayRecargos['minima'];
  $recargoNoct = $arrayRecargos['nocturno'];
  $recargoAero = $arrayRecargos['aeropuerto'];
  $recargoKmCal = $arrayRecargos['km_calidad'];
  $recargoPpCal = $arrayRecargos['puerta_a_puerta_calidad'];
  $recargoBanCal = $arrayRecargos['banderazo_calidad'];
  $recargominimaCal = $arrayRecargos['minima_calidad'];
  $recargoNoctCal = $arrayRecargos['nocturno_calidad'];
  $recargoAeroCal = $arrayRecargos['aeropuerto_calidad'];

  //CALCULAR PRECIO
  $precio = 0;

  // Obtener el codigo de confirmación
  $cuenta = strlen($telefono);

  if ($cuenta == '7') {
      $flecha = chunk_split($telefono, 3, " ");
      $flecha1 = substr($telefono, 0, 2);
      $flecha2 = substr($telefono, 3, 2);
      $flecha3 = substr($telefono, 5, 3);
      $code = $flecha3;
  } elseif ($cuenta == '10') {
      $flecha = chunk_split($telefono, 3, " ");
      $flecha1 = substr($telefono, 0, 3);
      $flecha2 = substr($telefono, 3, 2);
      $flecha3 = substr($telefono, 5, 3);
      $flecha4 = substr($telefono, 8, 2);
      $code = $flecha4;
  }

  $user_pref_order = 1;

      $flag = $consulta->crearServicioEfectivoWebSite($usuario, $lati, $longi, $latiTo, $lngTo, $dir, $nombreDIr, $nDos, $numm, $barrio, $observaciones, $kind_id, $destino, $nombreCompleto, $direccion, $usuarioSistema, $pay_type, $pay_reference, $code, $distancia, $tiempo, $precio, $precio,
      $fa_calidad, $email);

      if ($flag == false) {
          echo '<div class="alert alert-danger">
              <strong>Error!</strong> Lo sentimos ocurrio un error. Por favor intenta más tarde .
          </div>';

      } else {
        $idUltimoServicio = $consulta->obtenerUltimoIdServicio();
        //Agregar Polilinea a la tabla Route
        $trazado = $consultaRoute->agregarPuntoRuta($idUltimoServicio, $polilinea);
          echo '
          <div class="alert alert-success">
              <strong>Solicitud enviada!</strong> Cuando un conductor tome tu solicitud se enviar un correo con la información del vehículo.
          </div>
          ';
      }

}else {
  echo '<div class="alert alert-warning">
      <strong>Atención!</strong> Le falto enviar un dato, por favor verifique el formulario.
  </div>';
}






 ?>
