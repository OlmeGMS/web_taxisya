<?php
class Users
{
    public function todosUsers()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from users where estado = 1 order by id desc";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todoUserYear(){
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "select * from appsuser_taxisya.users where created_at between '2017-01-01' and now() order by id desc";
      $statement = $conexion->prepare($sql);
      $statement->execute();
      while ($result = $statement->fetch()) {
          $rows[] = $result;
      }
      return $rows;
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosUsersUltimos()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from users where estado = 1 order by id desc LIMIT 500";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function agregarUsers($arg_nombre, $arg_email, $arg_password, $arg_celular, $arg_telefono, $arg_apellido, $arg_uuid, $arg_type, $arg_token)
    {
        $email = $arg_email;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into users(name, email, login, pwd, cellphone, telephone, lastname, uuid, type, token) values (:name, :email, :login, :pwd, :cellphone, :telephone, :lastname, :uuid, :type, :token";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':name', $arg_nombre);
        $statement->bindParam(':email', $arg_email);
        $statement->bindParam(':login', $email);
        $statement->bindParam(':pwd', $arg_password);
        $statement->bindParam(':cellphone', $arg_celular);
        $statement->bindParam(':telephone', $arg_telefono);
        $statement->bindParam(':lastname', $arg_apellido);
        $statement->bindParam(':uuid', $arg_uuid);
        $statement->bindParam(':type', $arg_type);
        $statement->bindParam(':token', $arg_token);

        if (!$statement) {
            return false;
        } else {
            $statement->execute();

            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function nuevoUsers($arg_nombre, $arg_email, $arg_login, $arg_crt_lat, $arg_crt_lng, $arg_password, $arg_celular, $arg_telefono, $arg_apellido, $arg_created_at, $arg_uuid, $arg_updated_at, $arg_type, $arg_token, $arg_diageo, $arg_pwd_token, $arg_token_firebase, $arg_picture)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into users(name, email, login, crt_lat, crt_lng, pwd, cellphone, telephone, lastname, created_at, uuid, updated_at, type, token, diageo, pwd_token, token_firebase, picture) values (:name, :email, :login, :crt_lat, :crt_lng, :pwd, :cellphone, :telephone, :lastname, :created_at, :uuid, :updated_at, :type, :token, :diageo, :pwd_token, :token_firebase, :picture)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':name', $arg_nombre);
        $statement->bindParam(':email', $arg_email);
        $statement->bindParam(':login', $arg_login);
        $statement->bindParam(':crt_lat', $arg_crt_lat);
        $statement->bindParam(':crt_lng', $arg_crt_lng);
        $statement->bindParam(':pwd', $arg_password);
        $statement->bindParam(':cellphone', $arg_celular);
        $statement->bindParam(':telephone', $arg_telefono);
        $statement->bindParam(':lastname', $arg_apellido);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':uuid', $arg_uuid);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':type', $arg_type);
        $statement->bindParam(':token', $arg_token);
        $statement->bindParam(':diageo', $arg_diageo);
        $statement->bindParam(':pwd_token', $arg_pwd_token);
        $statement->bindParam(':token_firebase', $arg_token_firebase);
        $statement->bindParam(':picture', $arg_picture);

        if (!$statement) {
            return false;
        } else {
            $statement->execute();

            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerIdUser($arg_telefono)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where telephone = :telephone";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':telephone', $arg_telefono);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            $id = $statement->fetchColumn();
            return $id;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerUltimoIdUser()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select max(id) from users";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $id = $statement->fetchColumn();
        return $id;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerNombre($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select name from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $nombre = $statement->fetchColumn();
        return $nombre;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerApellido($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select lastname from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $nombre = $statement->fetchColumn();
        return $nombre;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerTelefono($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select telephone from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $telefono = $statement->fetchColumn();
        return $telefono;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCelular($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select cellphone from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $celular = $statement->fetchColumn();
        return $celular;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerIdUsuararioXEmail($arg_telefono)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where telephone = :telefono";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':telefono', $arg_telefono);
        $statement->execute();
        $id = $statement->fetchColumn();
        return $id;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerUsuarioXToken($arg_token)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from users where pwd_token = :pwd_token LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':pwd_token', $arg_token);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function verificarEmail($arg_email)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where email = :email";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':email', $arg_email);
        $statement->execute();
        $id = $statement->fetchColumn();
        return $id;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearUsuarioTel($arg_nombre, $arg_telefono, $arg_apellido)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $correo = "correo@corre.com";
        $pwd = "0";

        $sql = "insert into users(name, email, login, pwd, telephone, lastname)values(:nombre, :email, :login, :pwd, :telefono, :apellido)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre', $arg_nombre);
        $statement->bindParam(':email', $correo);
        $statement->bindParam(':login', $correo);
        $statement->bindParam(':pwd', $pwd);
        $statement->bindParam(':telefono', $arg_telefono);
        $statement->bindParam(':apellido', $arg_apellido);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();

            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerEmailUsuario($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select email from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $email = $statement->fetchColumn();
        return $email;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cargarUsuarioApp($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from users where id = :id LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function busquedaPersonalizdaUsuario($arg_item, $arg_frase)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $busqueda = '%'.$arg_frase.'%';
        $item = "$arg_item";
        $sql = "select * from users where $item like :busqueda";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":busqueda", $busqueda);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtnerEstadoUser($arg_idUsuario)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select estado from users where id = :idUsuario";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":idUsuario", $arg_idUsuario);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function modificarUsuarioApp($arg_nombre, $arg_email, $arg_login, $arg_crt_lat, $arg_crt_lng, $arg_password, $arg_celular, $arg_telefono, $arg_apellido, $arg_created_at, $arg_uuid, $arg_updated_at, $arg_type, $arg_token, $arg_diageo, $arg_pwd_token, $arg_estado, $arg_token_firebase, $arg_picture, $arg_idUsuario)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update users set name = :name, email = :email, login = :login, crt_lat = :crt_lat, crt_lng = :crt_lng, pwd = :pwd, cellphone = :cellphone, telephone = :telephone, lastname = :lastname, created_at = :created_at, uuid = :uuid, updated_at = :updated_at, type = :type, token = :token, diageo = :diageo, pwd_token = :pwd_token, estado = :estado, token_firebase = :token_firebase, picture = :picture where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':name', $arg_nombre);
        $statement->bindParam(':email', $arg_email);
        $statement->bindParam(':login', $arg_login);
        $statement->bindParam(':crt_lat', $arg_crt_lat);
        $statement->bindParam(':crt_lng', $arg_crt_lng);
        $statement->bindParam(':pwd', $arg_password);
        $statement->bindParam(':cellphone', $arg_celular);
        $statement->bindParam(':telephone', $arg_telefono);
        $statement->bindParam(':lastname', $arg_apellido);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':uuid', $arg_uuid);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':type', $arg_type);
        $statement->bindParam(':token', $arg_token);
        $statement->bindParam(':diageo', $arg_diageo);
        $statement->bindParam(':pwd_token', $arg_pwd_token);
        $statement->bindParam(':estado', $arg_estado);
        $statement->bindParam(':token_firebase', $arg_token_firebase);
        $statement->bindParam(':picture', $arg_picture);
        $statement->bindParam(':id', $arg_idUsuario);

        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function eliminarUsuarioApp($arg_idUsuario)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update users set estado = 2 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_idUsuario);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function busquedaXFecha($arg_item, $arg_frase, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $item = $arg_item;
        $frase = '%'.$arg_frase.'%';
        $sql = "select * from users where ($item like :frase) and (estado = 1) and (created_at between :fecha1 and :fecha2)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":fecha1", $arg_fecha1);
        $statement->bindParam("fecha2", $arg_fecha2);
        $statement->bindParam(":frase", $frase);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerIdXNombreANDTelefono($arg_nombre, $arg_telefono)
    {
        $nombre = "%".$arg_nombre."%";
        $telefono = $arg_telefono;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where name like :nombre and telephone = :telefono or cellphone = :celular";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":nombre", $nombre);
        $statement->bindParam(":telefono", $telefono);
        $statement->bindParam(":celular", $telefono);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerUuidUsuario($arg_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $conexion = $modelo->get_conexion();
        $sql = "select uuid from users where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_id);
        $statement->execute();
        $uuid = $statement->fetchColumn();
        return $uuid;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function LoginUser($arg_email, $arg_password)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where email = :email and pwd = :pwd";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':email', $arg_email);
        $statement->bindParam(':pwd', $arg_password);
        $statement->execute();
        $idUsuario = $statement->fetchColumn();
        return $idUsuario;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function LoginFirebase($arg_token_firebase)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from users where token_firebase = :token_firebase LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':token_firebase', $arg_token_firebase);
        $statement->execute();
        $idUsuario = $statement->fetchColumn();
        return $idUsuario;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarUuidUsuario($arg_uuid, $arg_id)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update users set uuid = :uuid where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(":uuid", $arg_uuid);
      $statement->bindParam(":id", $arg_id);

      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function logout($arg_idUsuario)
    {
      $uuid = " ";
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update users set uuid = :uuid where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(":uuid", $uuid);
      $statement->bindParam(":id", $arg_idUsuario);

      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarPwdToken($arg_pwd_token, $arg_idUsuario)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update users set pwd_token = :pwd_token where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(":pwd_token", $arg_pwd_token);
      $statement->bindParam(":id", $arg_idUsuario);

      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarPass($arg_pwd, $arg_idUsuario)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update users set pwd = :pwd where id = :idUsuario";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':pwd', $arg_pwd);
      $statement->bindParam(':idUsuario', $arg_idUsuario);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function tokenFirebaseBd($arg_idUsuario)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update users set token_firebase = :token_firebase where id = :idUsuario and token_firebase = null";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':token_firebase', $arg_idUsuario);
      $statement->bindParam(':idUsuario', $arg_idUsuario);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

}
