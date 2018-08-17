<?php
class Parameters
{
    public function listaParameters()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerKm()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 1";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioKm()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 1";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerKmCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 2";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioKmCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 2";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerBanderazo()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 3";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioBanderazo()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 3";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerBanderazoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 4";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioBanderazoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 4";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerAeropuerto()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 5";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioAeropuerto()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 5";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerAeropuertoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 6";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioAeropuertoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 6";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerNocturno()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 7";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioNocturno()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 7";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerNocturnoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 8";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioNocturnoCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 8";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerMinima()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 9";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioMinima()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 9";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerMinimaCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 10";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioMinimaCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 10";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPP()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 11";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioPP()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 11";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPPCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from parameters where id = 12";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerPrecioPPCalidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 12";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function horaAcutal()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select time(now())";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $hora = $statement->fetchColumn();
        return $hora;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function setTimeZone()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = 'SET time_zone = "America/Bogota"';
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $hora = $statement->fetchColumn();
        return $hora;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function fechaAcutal()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select now()";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $fecha = $statement->fetchColumn();
        return $fecha;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtnerSolofechaAcutal()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select curdate()";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $fecha = $statement->fetchColumn();
        return $fecha;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function CalcularHoraSumada($hora_ingreso, $horaActual)
    {
        $jornal = $horaActual;
        $hora_ingreso=split(":", $hora_ingreso);
        $jornal=split(":", $jornal);
        $horas=(int)$hora_ingreso[0]+(int)$jornal[0];
        $minutos=(int)$hora_ingreso[1]+(int)$jornal[1];
        $horas+=(int)($minutos/60);
        $minutos=$minutos%60;
        if ($minutos<10) {
            $minutos="0".$minutos ;
        }
        return $hora_salida = $horas.":".$minutos;
        ;
    }

    public function SumarHorasPhp($horaini, $horafin)
    {
        $horai=substr($horaini, 0, 2);
        $mini=substr($horaini, 3, 2);
        $segi=substr($horaini, 6, 2);

        $horaf=substr($horafin, 0, 2);
        $minf=substr($horafin, 3, 2);
        $segf=substr($horafin, 6, 2);

        $ini=((($horai*60)*60)+($mini*60)+$segi);
        $fin=((($horaf*60)*60)+($minf*60)+$segf);

        $dif=$fin+$ini;

        $difh=floor($dif/3600);
        $difm=floor(($dif-($difh*3600))/60);
        $difs=$dif-($difm*60)-($difh*3600);
        return date("H:i:s", mktime($difh, $difm, $difs));
    }

    public function sumarSegundoHora($hora, $tiempoCalculado)
    {
        $segundos = '+'.$tiempoCalculado.' second';
        $horaSumada = strtotime('+0 hour', strtotime($hora));
        $horaSumada = strtotime('+0 minute', strtotime($hora));
        $horaSumada = strtotime("$segundos", strtotime($hora));
        $horaSumada = date('H:i:s', $horaSumada);
        //$horas = floor($horaSumada / 3600);
        //$minutos = floor(($horaSumada - ($horas * 3600)) / 60);
        //$segundos = $horaSumada - ($horas * 3600) - ($minutos * 60);

        //$horaConvertida = $horas . ':' . $minutos . ":" . $segundos;
        //var_dump($segundos);
        //var_dump($hora);
        //var_dump($tiempoCalculado);
        //var_dump($horaSumada);
        //var_dump($horaConvertida);
        //exit;
        return $horaSumada;
    }

    public function conversorSegundosHoras($tiempo_en_segundos)
    {
        $horas = floor($tiempo_en_segundos / 3600);
        $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
        $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

        $horaConvertida = $horas . ':' . $minutos . ":" . $segundos;
        return $horaConvertida;
    }

    public function RestarHoras($horaini, $horafin)
    {
        $horai=substr($horaini, 0, 2);
        $mini=substr($horaini, 3, 2);
        $segi=substr($horaini, 6, 2);

        $horaf=substr($horafin, 0, 2);
        $minf=substr($horafin, 3, 2);
        $segf=substr($horafin, 6, 2);

        $ini=((($horai*60)*60)+($mini*60)+$segi);
        $fin=((($horaf*60)*60)+($minf*60)+$segf);

        $dif=$fin-$ini;

        $difh=floor($dif/3600);
        $difm=floor(($dif-($difh*3600))/60);
        $difs=$dif-($difm*60)-($difh*3600);
        return date("H:i:s", mktime($difh, $difm, $difs));
    }

    public function hourIsBetween($from, $to, $input)
    {
        $dateFrom = DateTime::createFromFormat('!H:i', $from);
        $dateTo = DateTime::createFromFormat('!H:i', $to);
        $dateInput = DateTime::createFromFormat('!H:i', $input);
        if ($dateFrom > $dateTo) {
            $dateTo->modify('+1 day');
        }
        return ($dateFrom <= $dateInput && $dateInput <= $dateTo) || ($dateFrom <= $dateInput->modify('+1 day') && $dateInput <= $dateTo);
    }

    public function hourIsBetweenSeg($from, $to, $input)
    {
        $dateFrom = DateTime::createFromFormat('!H:i:s', $from);
        $dateTo = DateTime::createFromFormat('!H:i:s', $to);
        $dateInput = DateTime::createFromFormat('!H:i:s', $input);
        if ($dateFrom > $dateTo) {
            $dateTo->modify('+1 day');
        }
        return ($dateFrom <= $dateInput && $dateInput <= $dateTo) || ($dateFrom <= $dateInput->modify('+1 day') && $dateInput <= $dateTo);
    }

    public function obtnerPrecioUnidad()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select price from parameters where id = 13";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $precio = $statement->fetchColumn();
        return $precio;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function limpia_espacios($cadena)
    {
        $cadena = str_replace(' ', '', $cadena);
        return $cadena;
    }

    public function enteroHoras($tiempo_en_segundos)
    {
        $horas = floor($tiempo_en_segundos / 3600);
        $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
        $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

        return $horas.':'.$minutos;
    }

    public function enteroMinutos($tiempo_en_segundos)
    {
        $horas = floor($tiempo_en_segundos / 3600);
        $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
        $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);

        return $minutos;
    }

    public function convertirMtsKms($mts)
    {
        $ecuacion = $mts / 1000;
        $km = round($ecuacion, 1, PHP_ROUND_HALF_UP);
        return $km;
    }

    public function factorCongestion($velPromedio)
    {
        $vfl = 36;
        $vc = 18;
        $b1 = 0.83;
        $b2 = 2.48;
        $c = -0.825;

        if ($velPromedio >= $vfl) {
            return $factorCongestion = 0;
        } elseif (($vc <= $velPromedio) && ($velPromedio < $vfl)) {
            return $factorCongestion = (($vfl - $velPromedio)/$vfl) * $b1;
        } elseif ($velPromedio < $vc) {
            return $factorCongestion = ((($vfl - $velPromedio)/$vfl) * $b2) + $c;
        } else {
            return $factorCongestion = 0;
        }
    }

    public function calcularPrecio($distancia, $tiempo, $recargos, $arg_banderazo, $arg_factorCalidad)
    {
        $consulta = new Parameters();
        setlocale(LC_MONETARY, 'co_CO');
        $banderazo = $consulta->obtenerPrecioBanderazo();
        $banderazoCalidad = $consulta->obtenerPrecioBanderazoCalidad();
        $valorKm = $consulta->obtenerPrecioKm();
        $valorKmCalidad = $consulta->obtenerPrecioKmCalidad();
        $carrerMinima = $consulta->obtenerPrecioMinima();
        $carrerMinimaCaliada = $consulta->obtenerPrecioMinimaCalidad();

        $distanciaKm = $distancia / 1000;
        $tiempoHora = ($tiempo / 60) / 60;

        if ($arg_factorCalidad == true) {
            $factorCalidad = 0.133;
        } else {
            $factorCalidad = 0;
        }

        $costoServicio = 0;
        $calculo = $distanciaKm / $tiempoHora;
        $factorCongestion = $consulta->factorCongestion($calculo);


        if ($factorCalidad == 0) {
            if ($arg_banderazo == true) {
                //$costoServicio = $banderazo + (($valorKm * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm) + $recargos;
                  $costoServicio = $banderazo + (($valorKm * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm);
                  if($costoServicio < 4400 && $arg_factorCalidad == false){
                    $costoServicio = 4400;
                  }elseif ($costoServicio < $arg_factorCalidad == true) {
                    $costoServicio = 5000;
                  }
                   $costoServicio = $costoServicio + $recargos;
            } else {
                //$costoServicio = (0) + (($valorKm * (1 + 0)) * (1 + $factorCongestion) * $distanciaKm) + $recargos;
                  $costoServicio = (0) + (($valorKm * (1 + 0)) * (1 + $factorCongestion) * $distanciaKm);
                  if($costoServicio < 4400 && $arg_factorCalidad == false){
                    $costoServicio = 4400;
                  }elseif ($costoServicio < $arg_factorCalidad == true) {
                    $costoServicio = 5000;
                  }
                  $costoServicio = $costoServicio + $recargos;
            }
        } else {
            if ($arg_banderazo == true) {
                //$costoServicio = ($banderazoCalidad) + (($valorKmCalidad * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm) + $recargos;
                  $costoServicio = ($banderazoCalidad) + (($valorKmCalidad * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm);
                  if($costoServicio < 4400 && $arg_factorCalidad == false){
                    $costoServicio = 4400;
                  }elseif ($costoServicio < $arg_factorCalidad == true) {
                    $costoServicio = 5000;
                  }
                  $costoServicio = $costoServicio + $recargos;
            } else {
                //$costoServicio = (0) + (($valorKmCalidad * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm) + $recargos;
                  $costoServicio = (0) + (($valorKmCalidad * (1 + $factorCalidad)) * (1 + $factorCongestion) * $distanciaKm);
                  if($costoServicio < 4400 && $arg_factorCalidad == false){
                    $costoServicio = 4400;
                  }elseif ($costoServicio < $arg_factorCalidad == true) {
                    $costoServicio = 5000;
                  }
                  $costoServicio = $costoServicio + $recargos;
            }
        }

        $precioFinal = money_format('%i', $costoServicio);

        $cash = round(($costoServicio)/100)*100;
        $cashi = ceil($costoServicio);


        if ($cash < 4400 && $factorCalidad == 0) {
            $cash = 4400;
        } elseif ($cash < 5000 && $factorCalidad == 1) {
            $cash = 5000;
        }
        return $cash;
    }

    public function recargos($arg_lat_from, $arg_lng_from, $arg_lat, $arg_lng, $arg_tiempo)
    {
        $latFrom = $arg_lat_from;
        $lngFrom = $arg_lng_from;
        $lat = $arg_lat;
        $lng = $arg_lng;
        $tiempo = $arg_tiempo;

        $horaNocturnoIncio = "20:00:00";
        $horaNocturnoFin = "5:00:00";

        $consulta = new Parameters();
        $consultaHoliday = new Holidays();

        //VARIABLES PARAMETROS
        $km = $consulta->obtenerPrecioKm();
        $kmCalidad = $consulta->obtenerPrecioKmCalidad();
        $banderazo = $consulta->obtenerPrecioBanderazo();
        $banderazoCalidad = $consulta->obtenerPrecioBanderazoCalidad();
        $aeropuerto = $consulta->obtenerPrecioAeropuerto();
        $aeropuertoCalidad = $consulta->obtenerPrecioAeropuertoCalidad();
        $nocturno = $consulta->obtenerPrecioNocturno();
        $nocturnoCalidad = $consulta->obtenerPrecioNocturnoCalidad();
        $minima = $consulta->obtenerPrecioMinima();
        $minimaCalidad = $consulta->obtenerPrecioMinimaCalidad();
        //$pp = $consulta->obtenerPrecioPP();
        //$ppCalidad = $consulta->obtenerPrecioPPCalidad();
        $pp = 0;
        $ppCalidad = 0;
        $cero = "0";

        //FECHAS
        $horaActual = $consulta->horaAcutal();
        $dia = date("N");
        $fechaActual = $consulta->fechaAcutal();
        $festivo = false;
        $nombreFestivo = null;


        //$sumaHoras = $consulta->CalcularHoraSumada($horaActual,$tiempo);
        //$sumaHoras = "22:00";
        $sumaHoras = $consulta->sumarSegundoHora($horaActual, $tiempo);


        //AERPUERTO

        //$latAeropuerto = 4.6843698;
        //$lngAeropuerto = -74.1310506;
        $latAeropuerto = 4.6982308;
        $lngAeropuerto = -74.1415777;

        //$latPuenteAereo = 4.693487;
        //$lngPuenteAereo = -74.134939;

        $latPuenteAereo = 4.69305000;
        $lngPuenteAereo = -74.1343411;



        //Origen AERPUERTO
        $distanciasPtsOrigen = $consulta->distancia($latFrom, $lngFrom, $latAeropuerto, $lngAeropuerto, "K");
        //Origen PUENTEAEREO
        $distanciasPtsOrigenPuente = $consulta->distancia($latFrom, $lngFrom, $latPuenteAereo, $lngPuenteAereo, "K");

        if ($distanciasPtsOrigen < 0.8 || $distanciasPtsOrigenPuente < 0.3) {
            $opiOrigen = true;
        } else {
            $opiOrigen = false;
        }
        //var_dump($latFrom, $lngFrom, $latAeropuerto, $lngAeropuerto);
        //var_dump($distanciasPtsOrigen);

        //Destino AERPUERTO
        $distanciasPts = $consulta->distancia($lat, $lng, $latAeropuerto, $lngAeropuerto, "K");
        //Destino PUENTEAEREO
        $distanciasPtsPuenteD = $consulta->distancia($lat, $lng, $latPuenteAereo, $lngPuenteAereo, "K");
        if ($distanciasPts < 0.8 || $distanciasPtsPuenteD < 0.3) {
            $opi = true;
        } else {
            $opi = false;
        }
        //var_dump($lat, $lng, $latAeropuerto, $lngAeropuerto);
        //var_dump($distanciasPts);

/*
        //Origen PUENTEAEREO
        $distanciasPtsOrigenPuente = $consulta->distancia($latFrom, $lngFrom, $latPuenteAereo, $lngPuenteAereo, "K");

        if ($distanciasPtsOrigenPuente < 0.3) {
            $opiOrigen = true;
        } else {
            $opiOrigen = false;
        }
        //var_dump($latFrom, $lngFrom, $latPuenteAereo, $lngPuenteAereo);
        //var_dump($distanciasPtsOrigenPuente);

        //Destino PUENTEAEREO
        $distanciasPtsPuenteD = $consulta->distancia($lat, $lng, $latPuenteAereo, $lngPuenteAereo, "K");
        if ($distanciasPtsPuenteD < 0.3) {
            $opi = true;
        } else {
            $opi = false;
        }
        //var_dump($lat, $lng, $latAeropuerto, $lngAeropuerto);
        //var_dump($distanciasPtsPuenteD);
*/
        //FILTRO FESTIVOS
        $holiday = $consultaHoliday->verificarFestivo();
        if ($holiday == null) {
            $festivo = false;
        } else {
            $festivo = true;
        }

        // LOGICA RECARGOS
        if ($opiOrigen == true) {
            if ($dia == 7) {
                $totalRecargo = $pp + $nocturno + $aeropuerto;
                $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad, 'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
        'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad);
            } elseif ($festivo == true) {
                $filas = $consultaHoliday->listaHoliday();
                foreach ($filas as $fila) {
                    $nombreFestivo = $fila['holiday'];
                }
                $totalRecargo = $pp + $nocturno + $aeropuerto;
                $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
        'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad, 'nombre_festivo'=>$nombreFestivo);
            } else {
                $zonaNocturno = $consulta->hourIsBetweenSeg($horaNocturnoIncio, $horaNocturnoFin, $sumaHoras);
                if ($zonaNocturno == true) {
                    $totalRecargo = $pp + $nocturno + $aeropuerto;
                    $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
          'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad);
                } else {
                    $totalRecargo = $pp + $aeropuerto;
                    $totalRecargoCalidad = $ppCalidad + $aeropuertoCalidad;
                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad, 'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$cero,'aeropuerto'=>$aeropuerto,'km_calidad'=>$kmCalidad,'total_recargo_calidad'=>$totalRecargoCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,
          'minima_calidad'=>$minimaCalidad,'nocturno_calidad'=>$cero,'aeropuerto_calidad'=>$aeropuertoCalidad);
                }
            }
        } else {
            if ($opi == true) {
                if ($dia == 7) {
                    $totalRecargo = $pp + $nocturno + $aeropuerto;
                    $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad, 'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
            'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad);
                } elseif ($festivo == true) {
                    $filas = $consultaHoliday->listaHoliday();
                    foreach ($filas as $fila) {
                        $nombreFestivo = $fila['holiday'];
                    }
                    $totalRecargo = $pp + $nocturno + $aeropuerto;
                    $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
            'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad, 'nombre_festivo'=>$nombreFestivo);
                } else {
                    $zonaNocturno = $consulta->hourIsBetweenSeg($horaNocturnoIncio, $horaNocturnoFin, $sumaHoras);
                    if ($zonaNocturno == true) {
                        $totalRecargo = $pp + $nocturno + $aeropuerto;
                        $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad + $aeropuertoCalidad;
                        return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'aeropuerto'=>$aeropuerto,'nocturno'=>$nocturno,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
              'aeropuerto_calidad'=>$aeropuertoCalidad,'nocturno_calidad'=>$nocturnoCalidad);
                    } else {
                        $totalRecargo = $pp + $aeropuerto;
                        $totalRecargoCalidad = $ppCalidad + $aeropuertoCalidad;
                        return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad, 'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$cero,'aeropuerto'=>$aeropuerto,'km_calidad'=>$kmCalidad,'total_recargo_calidad'=>$totalRecargoCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,
              'minima_calidad'=>$minimaCalidad,'nocturno_calidad'=>$cero,'aeropuerto_calidad'=>$aeropuertoCalidad);
                    }
                }
            } else {
                if ($dia == 7) {
                    $totalRecargo = $pp + $nocturno;
                    $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad;

                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$nocturno,'aeropuerto'=>$cero,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
                  'nocturno_calidad'=>$nocturnoCalidad,'aeropuerto_calidad'=>$cero);
                } elseif ($festivo == true) {
                    $filas = $consultaHoliday->listaHoliday();
                    foreach ($filas as $fila) {
                        $nombreFestivo = $fila['holiday'];
                    }
                    $totalRecargo = $pp + $nocturno;
                    $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad;
                    return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$nocturno,'aeropuerto'=>$cero,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
                  'nocturno_calidad'=>$nocturnoCalidad,'nombre_festivo'=>$nombreFestivo, 'aeropuerto_calidad'=>$cero);
                } else {
                    $zonaNocturno = $consulta->hourIsBetweenSeg($horaNocturnoIncio, $horaNocturnoFin, $sumaHoras);
                    if ($zonaNocturno == true) {
                        $totalRecargo = $pp + $nocturno;
                        $totalRecargoCalidad = $ppCalidad + $nocturnoCalidad;
                        return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$nocturno,'aeropuerto'=>$cero,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
                    'nocturno_calidad'=>$nocturnoCalidad,'aeropuerto_calidad'=>$cero);
                    } else {
                        $totalRecargo = $pp;
                        $totalRecargoCalidad = $ppCalidad;
                        return $precioReacargos = array('sin_calidad' => $totalRecargo, 'con_calidad' => $totalRecargoCalidad,'km'=>$km,'puerta_a_puerta'=>$pp,'banderazo'=>$banderazo,'minima'=>$minima,'nocturno'=>$cero,'aeropuerto'=>$cero,'km_calidad'=>$kmCalidad,'puerta_a_puerta_calidad'=>$ppCalidad,'banderazo_calidad'=>$banderazoCalidad,'minima_calidad'=>$minimaCalidad,
                    'nocturno_calidad'=>$cero,'aeropuerto_calidad'=>$cero);
                    }
                }
            }
        }
    }

    
    public function distancia($lat1, $lon1, $lat2, $lon2, $unit)
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            $res = ($miles * 1.609344);
            return number_format($res, 2, '.', '');
        } elseif ($unit == "N") {
            $res = ($miles * 0.8684);
            return number_format($res, 2, '.', '');
        } else {
            $res = $miles;
            return number_format($res, 2, '.', '');
        }
    }

    public function geoValla($lon1, $lat1, $lon2, $lat2)
    {
        $dlon = deg2rad($lon2 - $lon1);
        $dlat = deg2rad($lat2 - $lat1);


        $a = (sin($dlat / 2) * sin($dlat / 2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * (sin($dlon / 2) * sin($dlon / 2));
        $angle = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $RADIUS = 6371;

        $metros = ($angle * $RADIUS) * 1000;

        return $metros;
    }

    public function geofence($arg_idServicio)
    {
        $consultaParametros = new Parameters();
        $consultaConductores = new Drivers();
        $consultaKeys = new Llaves();
        $consultaServicio = new Services();

        //BANDERA
        $notificacion = false;

        //VARIABLES
        $idServicio = $arg_idServicio;

        $servicio = $consultaServicio->obtenerServicioXId($idServicio);

        foreach ($servicio as $m) {
            $id = $m['id'];
            $user_id = $m['user_id'];
            $driver_id = $m['driver_id'];
            $car_id = $m['car_id'];
            $from_lat = $m['from_lat'];
            $from_lng = $m['from_lng'];
            $status_id = $m['status_id'];
            $to_lat = $m['to_lat'];
            $to_lng = $m['to_lng'];
            $start_datetime = $m['start_datetime'];
            $finish_datetime = $m['finish_datetime'];
            $qualification = $m['qualification'];
            $reason_qualification = $m['reason_qualification'];
            $index_id = $m['index_id'];
            $comp1 = $m['comp1'];
            $comp2 = $m['comp2'];
            $no = $m['no'];
            $barrio = $m['barrio'];
            $obs = $m['obs'];
            $kind_id = $m['kind_id'];
            $schedule_id = $m['schedule_id'];
            $schedule_type = $m['schedule_type'];
            $updated_at = $m['updated_at'];
            $created_at = $m['created_at'];
            $destination = $m['destination'];
            $service_date_time = $m['service_date_time'];
            $user_name = $m['user_name'];
            $address = $m['address'];
            $cms_users_id = $m['cms_users_id'];
            $pay_type = $m['pay_type'];
            $pay_reference = $m['pay_reference'];
            $user_card_reference = $m['user_card_reference'];
            $user_email = $m['user_email'];
            $units = $m['units'];
            $charge1 = $m['charge1'];
            $charge2 = $m['charge2'];
            $charge3 = $m['charge3'];
            $charge4 = $m['charge4'];
            $value = $m['value'];
            $code = $m['code'];
            $company_id = $m['company_id'];
            $state_payment = $m['state_payment'];
            $cedula = $m['cedula'];
            $date_state_payment = $m['date_state_payment'];
            $commit = $m['commit'];
            $facturado = $m['facturado'];
            $km_recorrido = $m['km_recorrido'];
            $tiempo_recorido = $m['tiempo_recorido'];
            $valor_app = $m['valor_app'];
            $n_pasajeros = $m['n_pasajeros'];
            $id_carrera_ant = $m['id_carrera_ant'];
            $valor_total = $m['valor_total'];
        }

        //PUSH
        $message = array('message' => 'Hay un nuevo servicio', 'push_type' => 48, 'id' => $id, 'user_id' => $user_id,'driver_id' => $driver_id,'car_id' => $car_id,'from_lat' => $from_lat,'from_lng' => $from_lng,'status_id' => $status_id,'to_lat' => $to_lat,
      'start_datetime' => $start_datetime,'finish_datetime' => $finish_datetime,'qualification' => $qualification,'reason_qualification' => $reason_qualification,'index_id' => $index_id,'comp1' => $comp1,'comp2' => $comp2,'no' => $no,'barrio' => $barrio,'obs' => $obs,
      'kind_id' => $kind_id,'schedule_id' => $schedule_id,'updated_at' => $updated_at,'created_at' => $created_at,
      'destination' => $destination,'service_date_time' => $service_date_time,'user_name' => $user_name,'address' => $address,'cms_users_id' => $cms_users_id,'pay_type' => $pay_type,'pay_reference' => $pay_reference,'user_card_reference' => $user_card_reference,'user_email' => $user_email,'units' => $units,'$charge1' => $charge1,
      'charge2' => $charge2,'charge3' => $charge3,'charge4' => $charge4,'value' => $value,'code' => $code,'company_id ' => $company_id ,'state_payment' => $state_payment,'cedula' => $cedula,'date_state_payment' => $date_state_payment,'commit' => $commit,'facturado' => $facturado,
      'km_recorrido' => $km_recorrido,'tiempo_recorido' => $tiempo_recorido,'valor_app' => $valor_app,'n_pasajeros' => $n_pasajeros,'id_carrera_ant' => $id_carrera_ant,'valor_total' => $valor_total );

        $lati = $from_lat;
        $longi = $from_lng;

        $horaNocturnoIncio = "20:00:00";
        $horaNocturnoFin = "06:00:00";
        $tiempo = "9:03";
        $tiempos = "1:03";

        //FECHAS
        $horaActual = $consultaParametros->horaAcutal();
        $dia = date("N");
        $fechaActual = $consultaParametros->fechaAcutal();
        $festivo = false;
        $nombreFestivo = null;

        //$sumaHoras = $consultaParametros->CalcularHoraSumada($horaActual,$tiempos);
        //$sumaPhp = $consultaParametros->SumarHorasPhp($horaActual,$tiempos);

        $zonaNocturno = $consultaParametros->hourIsBetweenSeg($horaNocturnoIncio, $horaNocturnoFin, $horaActual);

        $conductores_ubicacion = $consultaConductores->obtenerUbicacionConductores();


        //Ubicacón del carro vs el servicio
        //$distanciasPts = $consultaParametros->distancia($lat, $lng, $latAeropuerto, $lngAeropuerto, "K");
        if ($zonaNocturno == true) {
            foreach ($conductores_ubicacion as $ubicacion) {
                $id_conductor = $ubicacion['id'];
                $con_lat = $ubicacion['crt_lat'];
                $con_lng = $ubicacion['crt_lng'];

                $rango = $consultaParametros->distancia($lati, $longi, $con_lat, $con_lng, "K");

                if ($rango < 1) {
                    $conductoresProx[] = $id_conductor;
                }
            }

            $cant = count($conductoresProx);
            if ($cant == 0) {
                foreach ($conductores_ubicacion as $ubicacion) {
                    $id_conductor = $ubicacion['id'];
                    $con_lat = $ubicacion['crt_lat'];
                    $con_lng = $ubicacion['crt_lng'];

                    $rango = $consultaParametros->distancia($lati, $longi, $con_lat, $con_lng, "K");

                    if ($rango < 2) {
                        $conductoresProx[] = $id_conductor;
                    }
                }

                $cant = count($conductoresProx);
            }
        } else {
            foreach ($conductores_ubicacion as $ubicacion) {
                $id_conductor = $ubicacion['id'];
                $con_lat = $ubicacion['crt_lat'];
                $con_lng = $ubicacion['crt_lng'];

                $rango = $consultaParametros->distancia($lati, $longi, $con_lat, $con_lng, "K");

                if ($rango < 1.5) {
                    $conductoresProx[] = $id_conductor;
                }
            }

            $cant = count($conductoresProx);
            if ($cant == 0) {
                foreach ($conductores_ubicacion as $ubicacion) {
                    $id_conductor = $ubicacion['id'];
                    $con_lat = $ubicacion['crt_lat'];
                    $con_lng = $ubicacion['crt_lng'];

                    $rango = $consultaParametros->distancia($lati, $longi, $con_lat, $con_lng, "K");

                    if ($rango < 2) {
                        $conductoresProx[] = $id_conductor;
                    }
                }

                $cant = count($conductoresProx);
            }
        }

        return $conductoresProx;
    }

    public function milisegundosFecha($arg_fecha){
      setlocale(LC_TIME, 'es_CO');
      date_default_timezone_set('America/Bogota');

      $d= 10 * strtotime($arg_fecha);
      $fechaMil = $d.'00';
      return $fechaMil;
    }
}
