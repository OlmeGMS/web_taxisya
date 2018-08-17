<?php
class Llaves
{
    public function firebaseConductor()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 1";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function firebaseUsuario()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 2";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function googleMaps()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 3";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function firebaseTableta()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 4";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function ipSecretaria()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 5";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function pingSecretaria()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select llave from llaves where id = 6";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $key = $statement->fetchColumn();
        return $key;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarPingSecretaria($arg_llave)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update llaves set llave = :llave where id = 6";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":llave", $arg_llave);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarLlavesFirebase($arg_llave, $arg_id)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update llaves set llave = :llave where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(":llave", $arg_llave);
      $statement->bindParam(":id", $arg_id);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);

    }
}
