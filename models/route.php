<?php
class Route
{
    public function agregarPuntoRuta($argid_services, $arg_polyline)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into route (id_services, polyline)values(:id_services, :polyline)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id_services", $argid_services);
        $statement->bindParam(":polyline", $arg_polyline);
        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtnerRuta($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select polyline from route where id_services = :idServicio";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":idServicio", $arg_idServicio);
        $statement->execute();
        $point = $statement->fetchColumn();

        return $point;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtnerIdXIdServicio($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from route where id_services = :idServicio";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":idServicio", $arg_idServicio);
        $statement->execute();
        $idRoute = $statement->fetchColumn();

        return $idRoute;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarRuta($arg_polyline, $arg_idRoute){
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update route set polyline = :polyline where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(":polyline", $arg_polyline);
      $statement->bindParam(":id", $arg_idRoute);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }
}
