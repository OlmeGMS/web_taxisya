<?php
class Services
{
    public function todosServicios()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosEspera()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 1 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosEsperaTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and  status_id = 1 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosEsperaTaxiYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and  status_id = 1 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosEsperaUsuario($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where status_id = 1 and cms_users_id = :cms_users_id order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":cms_users_id", $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAsignado()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 2 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAsignadoTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and  status_id = 2 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAsignadoTaxiYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and  status_id = 2 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAsignadoUsuario($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where status_id = 2 and cms_users_id = :idUsuario order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":idUsuario", $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosFinalizado()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 13 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosFinalizadoTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and  status_id = 13 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosFinalizadoTaxisYa($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and  status_id = 13 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosFinalizadoUsuario($arg_idUsuario)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join cars on services.car_id = cars.id where (services.status_id = 13) and (cms_users_id = :idUsuario) order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":idUsuario", $arg_idUsuario);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistema()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 7 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistemaLista()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 7 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistemaListaTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 7 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistemaListaUsuario($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.cms_users_id = :cms_users_id and services.status_id = 7 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':cms_users_id', $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistemaListaTaxisYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 7 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoSistemaListaUsuarios($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 7 and services.cms_users_id = :cms_users_id order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam("cms_users_id", $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoConductor()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 8 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoConductorTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and status_id = 8 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoConductorTaxisYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and status_id = 8 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCanceladoConductorUsuario($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where services.status_id = 8 and services.cms_users_id = :cms_users_id order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":cms_users_id", $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosOperadora()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 9 order by id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosOperadoraTaxi($arg_empresa)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and status_id = 9 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosOperadoraTaxisYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and status_id = 9 order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosOperadoraUsuario($arg_cms_users_id)
    {
        $modelo = new Conexion();
        $rows = null;
        $flag = null;
        $conexion = $modelo->get_conexion();
        $sql = "select * from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 9 and services.cms_users_id = :cms_users_id order by services.id desc LIMIT 100";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":cms_users_id", $arg_cms_users_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerUltimoIdServicio()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select max(id) from services";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $id = $statement->fetchColumn();
        return $id;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicio($arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_created_at, $arg_destination, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_userCarReference, $arg_code, $arg_companyId, $arg_commit)
    {
        //variables quemadas
        //$status = 10;
        $status = 1;
        $update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into services(user_id, from_lat, from_lng, status_id, index_id, comp1, comp2, no, barrio, kind_id, destination, user_name, address, cms_user_id, pay_type, pay_reference, user_card_reference, code, company_id, commit)values(:usuario_id, :lat, :lng, :status, :index_id, :comp1, :comp2, :no, :barrio, :kind_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :code, :company_id, :commit)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':updated_at', $update_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_userCarReference);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companyId);
        $statement->bindParam(':commit', $arg_commit);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioEfectivo($arg_idUsuario, $arg_lat, $arg_lng, $arg_to_lat, $arg_to_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_commit, $arg_kind_id, $arg_destination, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_km_recorrido, $arg_tiempo_recorido, $arg_valor_app, $arg_valor_appTotal, $arg_serv_calidad)
    {
        //variables quemadas
        $status = 1;
        $schedule_id = 0;
        $user_card_reference = "0";
        $user_email = "0";
        $units = 0;
        $charge1 = "0";
        $charge2 = "0";
        $charge3 = "0";
        $charge4 = "0";
        $value = 0;
        $cedula = "0";
        $commit = "";




        //var_dump('modelo= ',  $arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_commit);

        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services(user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :obs, :kind_id, :schedule_id,:destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad)";

        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':obs', $arg_commit);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $user_card_reference);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $charge1);
        $statement->bindParam(':charge2', $charge2);
        $statement->bindParam(':charge3', $charge3);
        $statement->bindParam(':charge4', $charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_appTotal);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);



        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioEfectivoWebSite($arg_idUsuario, $arg_lat, $arg_lng, $arg_to_lat, $arg_to_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_commit, $arg_kind_id, $arg_destination, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_km_recorrido, $arg_tiempo_recorido, $arg_valor_app, $arg_valor_appTotal, $arg_serv_calidad,
    $arg_email)
    {
        //variables quemadas
        $status = 1;
        $schedule_id = 0;
        $user_card_reference = "0";
        $units = 0;
        $charge1 = "0";
        $charge2 = "0";
        $charge3 = "0";
        $charge4 = "0";
        $value = 0;
        $cedula = "0";
        $commit = "";




        //var_dump('modelo= ',  $arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_commit);

        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services(user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :obs, :kind_id, :schedule_id,:destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad)";

        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':obs', $arg_commit);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $user_card_reference);
        $statement->bindParam(':user_email', $arg_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $charge1);
        $statement->bindParam(':charge2', $charge2);
        $statement->bindParam(':charge3', $charge3);
        $statement->bindParam(':charge4', $charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_appTotal);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);



        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioVale(
        $arg_idUsuario,
        $arg_lat,
        $arg_lng,
        $arg_to_lat,
        $arg_to_lng,
        $arg_avenida,
        $arg_comp1,
        $arg_comp2,
        $arg_no,
        $arg_barrio,
        $arg_observaciones,
        $arg_kind_id,
        $arg_destination,
        $arg_user_name,
        $arg_address,
        $arg_cms_user_id,
        $arg_pay_type,
        $arg_pay_reference,
        $arg_vale,
        $arg_code,
        $arg_companiaId,
        $arg_commit,
        $arg_km_recorrido,
        $arg_tiempo_recorido,
    $arg_valor_app,
        $arg_valor_total,
        $arg_serv_calidad,
        $arg_route
    ) {
        //variables quemadas
        $status = 1;
        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $charge1 = "0";
        $charge2 = "0";
        $charge3 = "0";
        $charge4 = "0";
        $value = 0;
        $cedula = "0";



        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services(user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad, route) values (:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones, :kind_id, :schedule_id, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad, :route)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_vale);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $charge1);
        $statement->bindParam(':charge2', $charge2);
        $statement->bindParam(':charge3', $charge3);
        $statement->bindParam(':charge4', $charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);
        $statement->bindParam(':route', $arg_route);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();

            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioValeWS(
      $arg_idUsuario,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_vale,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
      $arg_charge4,
      $arg_code,
  $arg_companiaId,
      $arg_commit,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_valor_total,
      $arg_factor,
      $arg_route
  ) {
        //variables quemadas
        $status = 1;
        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $value = 0;
        $cedula = "0";

        //var_dump('modelo= ',  $arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_commit);

        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad, route)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones, :kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad, :route)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_vale);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_factor);
        $statement->bindParam(':route', $arg_route);
        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioEfectivoWS(
      $arg_idUsuario,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
      $arg_charge4,
      $arg_code,
      $arg_companiaId,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_valor_total,
      $arg_serv_calidad
  ) {
        //variables quemadas
        $status = 1;
        $schedule_id = 0;
        $user_card_reference = "0";
        $user_email = "0";
        $units = 0;
        $value = 0;
        $cedula = "0";
        $commit = "";

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones,:kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $user_card_reference);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);

        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioValeAtrasWS(
      $arg_idUsuario,
      $arg_driver_id,
      $arg_car_id,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_vale,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
  $arg_charge4,
      $arg_code,
      $arg_companiaId,
      $arg_commit,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_factor,
      $arg_route
  ) {
        //variables quemadas
        $status = 15;
        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $value = "0";
        $cedula = "0";
        $date_state_payment = "0000-00-00";

        //var_dump('modelo= ',  $arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_commit);

        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, driver_id, car_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, serv_calidad, route)values(:usuario_id, :driver_id, :car_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones, :kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :serv_calidad, :route)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':driver_id', $arg_driver_id);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_vale);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':serv_calidad', $arg_factor);
        $statement->bindParam(':route', $arg_route);
        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioEfectivoAtrasWS(
      $arg_idUsuario,
      $arg_driver_id,
      $arg_car_id,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
      $arg_charge4,
      $arg_code,
  $arg_companiaId,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_valor_appTotal,
      $arg_factor
  ) {
        //variables quemadas
        $status = 15;
        $schedule_id = 0;
        $user_card_reference = "0";
        $user_email = "0";
        $units = 0;
        $value = "0";
        $cedula = "0";
        $commit = "";
        $date_state_payment = "0000-00-00";

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, driver_id, car_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad)values(:usuario_id, :driver_id, :car_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones,:kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':driver_id', $arg_driver_id);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $user_card_reference);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_appTotal);
        $statement->bindParam(':serv_calidad', $arg_factor);
        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function tablaServicios()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services order by id desc LIMIT 50";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function tablaServiciosXUsuario($arg_idUserCms)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where cms_users_id = :idUserCms order by id desc LIMIT 10";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUserCms', $arg_idUserCms);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cancelarServicioOperadora($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 9 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cargarServicio($arg_idServicio)
    {
        $row = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where id = :id LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function modificarServicio($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "";
    }

    public function reporteSercioTodo($arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        //$sql = "select * from services where created_at between :fecha1 and :fecha2";
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteSercioTodoTaxi($arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at,  services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteSercioTodoTaxisya($arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at,  services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioTodoFinalizados($arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services where status_id = 13 and created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioTodoTodo($arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services  left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioTodoTodoTaxi($arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services  left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioTodoTodoTaxisYa($arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id,services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services  left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductor($arg_idConductor, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.driver_id = :idconductor and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductorTaxi($arg_idConductor, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.driver_id = :idconductor and cars.id_empresa = :idEmpresa and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':fecha2', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductorTaxisYa($arg_idConductor, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.driver_id = :idconductor and cars.id_empresa = 1 or cars.id_empresa = 2 and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductorTS($arg_idConductor, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.driver_id = :idconductor and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductorTSTaxi($arg_idConductor, $arg_tipo, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.driver_id = :idconductor and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioConductorTSTaxisYa($arg_idConductor, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.driver_id = :idconductor and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idconductor', $arg_idConductor);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteVehiculo($arg_idVehiculo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.car_id = :idVehiculo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteVehiculoTaxi($arg_idVehiculo, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.car_id = :idVehiculo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteVehiculoTaxisYa($arg_idVehiculo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.car_id = :idVehiculo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioVehiculoTS($arg_idVehiculo, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.car_id = :idVehiculo and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioVehiculoTSTaxi($arg_idVehiculo, $arg_tipo, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa, services.car_id = :idVehiculo and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioVehiculoTSTaxisYa($arg_idVehiculo, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.car_id = :idVehiculo and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteUsuario($arg_idusuario, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.user_id = :idUsusario and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteUsuarioTaxi($arg_idusuario, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.user_id = :idUsusario and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteUsuarioTaxisYa($arg_idusuario, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.user_id = :idUsusario and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioUsuarioTS($arg_idusuario, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.user_id = :idUsusario and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioUsuarioTSTaxi($arg_idusuario, $arg_tipo, $arg_fecha1, $arg_fecha2, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.user_id = :idUsusario and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporteServicioUsuarioTSTaxisYa($arg_idusuario, $arg_tipo, $arg_fecha1, $arg_fecha2)
    {
        $modelo = new Conexion();
        $row = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_name, drivers.name, drivers.lastname, cars.placa, services.address, services.barrio, services.destination, services.pay_reference, services.user_card_reference, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.created_at, services.updated_at, services.qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.user_id = :idUsusario and services.kind_id = :tipo and services.created_at between :fecha1 and :fecha2";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idUsusario', $arg_idusuario);
        $statement->bindParam(':tipo', $arg_tipo);
        $statement->bindParam(':fecha1', $arg_fecha1);
        $statement->bindParam(':fecha2', $arg_fecha2);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtnerIdUsuarioXIdServicio($arg_id)
    {
        $id  = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select user_id from services where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $id = $statement->fetchColumn();
        return $id;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizados()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 13";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizadosTaxi($arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 13";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizadosTaxisYa()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 13";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizadosLimit($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 13 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizadosLimitTaxi($arg_limite, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 13 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelFinalizadosLimitTaxisYa($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 13 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoSistema()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where services.status_id = 7";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoSistemaTaxi($arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "
select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 7";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoSistemaTaxisya()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 7";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosSistemaLimit($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where services.status_id = 7 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosSistemaLimitTaxi($arg_limite, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 7 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosSistemaLimitTaxisYa($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services inner join drivers on services.driver_id = drivers.id inner join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 7 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoConductor()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 8";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoConductorTaxis($arg_idEmpresa)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and  services.status_id = 8";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoConductorTaxisYa()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and  services.status_id = 8";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosConductorLimit($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 8 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosConductorLimitTaxi($arg_limite, $arg_idEmpresa)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa :idEmpresa and services.status_id = 8 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosConductorLimitTaxisYa($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 8 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoOperador()
    {
        $modelo = new Conexion();
        $rows = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 9";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoOperadorTaxi($arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $rows = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 9";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladoOperadorTaxisYa()
    {
        $modelo = new Conexion();
        $rows = null;
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 9";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosOperadorLimit($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where services.status_id = 9 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosOperadorLimitTaxi($arg_limite, $arg_empresaTaxi)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = :idEmpresa and services.status_id = 9 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_empresaTaxi);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function reporterExcelCanceladosOperadorLimitTaxisYa($arg_limite)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $row = null;
        $limit = "LIMIT $arg_limite";
        $sql = "select services.id, services.user_id as idUsuario,services.user_name, drivers.name as nombreConductor, drivers.lastname as apellidoConductor, cars.placa, cars.car_brand, cars.model, services.created_at, services.updated_at, services.address, services.destination, services.pay_type, services.pay_reference, services.user_card_reference, services.commit, services.charge1, services.charge2, services.charge3, services.charge4, services.valor_app, services.qualification, services.reason_qualification from services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where cars.id_empresa = 1 or cars.id_empresa = 2 and services.status_id = 9 order by services.id desc $limit";
        $statement = $conexion->prepare($sql);
        //$statement->bindParam(':limite', $limit);
        $statement->execute();


        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosCompania($arg_idCompania)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_app, services.id,services.commit, services.destination, services.index_id, services.comp1, services.comp2, services.no, services.obs, services.barrio, services.address, services.qualification, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.route from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference inner join cars on services.car_id = cars.id where ticket_tickets.company_id = :idCompania order by services.id desc LIMIT 200";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idCompania', $arg_idCompania);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function prefijo($arg_idCc)
    {
        $row = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select prefix from ticket_cost_centers where id = :idDepartamento LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idDepartamento', $arg_idCc);
        $statement->execute();
        $prefijo = $statement->fetchColumn();
        return $prefijo;
    }

    public function todosServiciosCompaniaXDepartamento($arg_prefijo)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_app, services.commit, services.destination from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference inner join cars on services.car_id = cars.id where services.pay_type = 3 like services.user_card_reference = :prefijo LIMIT 300";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':prefijo', $arg_prefijo);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosMangerMes($arg_prefijo, $arg_mes, $arg_year, $arg_company_id)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $prefijoa = "%".$arg_prefijo."%";
        $sql = "select services.id, services.user_card_reference, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_total, services.commit, services.destination, services.index_id, services.comp1, services.comp2, services.no, services.obs, services.barrio, services.address, services.qualification, services.km_recorrido, services.tiempo_recorido from services left join ticket_tickets on ticket_tickets.ticket = services.user_card_reference left join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (services.status_id = 13) and (services.user_card_reference like :prefijo) and (services.company_id = :company_id) LIMIT 2000";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':prefijo', $prefijoa);
        $statement->bindParam(':mes', $arg_mes);
        $statement->bindParam(':year', $arg_year);
        $statement->bindParam(':company_id', $arg_company_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAdministradorMes($arg_idCompania, $arg_mes)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_app, services.commit, services.destination,services.index_id, services.comp1, services.comp2, services.no, services.obs, services.address, services.qualification from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference inner join cars on services.car_id = cars.id where (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (ticket_tickets.company_id = :idCompania)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idCompania', $arg_idCompania);
        $statement->bindParam(':mes', $arg_mes);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function todosServiciosAdministradorMesXAnio($arg_idCompania, $arg_mes, $arg_year)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_app, services.commit, services.destination,services.index_id, services.comp1, services.comp2, services.no, services.obs, services.address, services.qualification from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference inner join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (ticket_tickets.company_id = :idCompania)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idCompania', $arg_idCompania);
        $statement->bindParam(':mes', $arg_mes);
        $statement->bindParam(':year', $arg_year);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function ReporteTodosServiciosAdministradorMesXAnio($arg_mes, $arg_year, $arg_prefijo, $arg_idCompania)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $prefijoa = "%".$arg_prefijo."%";

        //$sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.address, services.units, services.charge1, services.charge2, services.charge4, services.valor_total, services.commit, services.destination, services.qualification from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference left join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (services.status_id = 13) and (ticket_tickets.company_id = :idCompania)order by services.created_at asc";
        $sql = "select services.id, services.user_card_reference, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_total, services.commit, services.destination, services.index_id, services.comp1, services.comp2, services.no, services.obs, services.barrio, services.address, services.qualification, services.km_recorrido, services.tiempo_recorido from services left join ticket_tickets on ticket_tickets.ticket = services.user_card_reference left join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (services.status_id = 13) and (services.user_card_reference like :prefijo) and (services.company_id = :idCompania) order by services.created_at asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':mes', $arg_mes);
        $statement->bindParam(':year', $arg_year);
        $statement->bindParam(':prefijo', $prefijoa);
        $statement->bindParam(':idCompania', $arg_idCompania);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function ReporteTodosServiciosManagerMesXAnio($arg_idCompania, $arg_mes, $arg_year, $arg_centroCosto)
    {
        $rows = null;
        $modelo = new Conexion();
        $consulta = new Services();
        $conexion = $modelo->get_conexion();
        $prefijoa = "%".$arg_centroCosto."%";
        //$sql = "select ticket_tickets.ticket, services.created_at, services.updated_at, services.user_name, cars.placa, services.address, services.units, services.charge1, services.charge2, services.charge4, services.valor_total, services.commit, services.destination, services.qualification from services inner join ticket_tickets on ticket_tickets.ticket = services.user_card_reference inner join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (ticket_tickets.company_id = :idCompania) and (ticket_tickets.ticket_user_id = :centroCosto)";
        $sql = "select services.id, services.user_card_reference, services.created_at, services.updated_at, services.user_name, cars.placa, services.barrio, services.units, services.charge1, services.charge2, services.charge4, services.valor_total, services.commit, services.destination, services.index_id, services.comp1, services.comp2, services.no, services.obs, services.barrio, services.address, services.qualification, services.km_recorrido, services.tiempo_recorido from services left join ticket_tickets on ticket_tickets.ticket = services.user_card_reference left join cars on services.car_id = cars.id where (YEAR(services.created_at) = :year) and (MONTH(services.created_at) = :mes) and (services.pay_type = 3) and (services.status_id = 13) and (services.user_card_reference like :prefijo) and (services.company_id = :idCompania) order by services.created_at asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idCompania', $arg_idCompania);
        $statement->bindParam(':mes', $arg_mes);
        $statement->bindParam(':year', $arg_year);
        $statement->bindParam(':prefijo', $prefijoa);
        //$statement->bindParam(':centroCosto', $arg_centroCosto);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function estadoServicioFacturado()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 13 and facturado = 1 and pay_type = 3";
        //$sql = "select * from services where status_id = 5 and facturado = 1 and pay_type = 3 and user_card_reference like '%JV%'";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }



    public function estadoServicioFacturadoXCC($arg_prefijo)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $idCc = '%'.$arg_prefijo.'%';
        $sql = "select * from services where status_id = 13 and facturado = 2 and pay_type = 3 and user_card_reference like :centro";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':centro', $idCc);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function estadoServicioSinFacturarXCC($arg_prefijo)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $idCc = '%'.$arg_prefijo.'%';
        $sql = "select * from services where status_id = 13 and facturado = 1 and pay_type = 3 and user_card_reference like :centro";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':centro', $idCc);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosSinFacturarXComapines($arg_company_id)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 13 and facturado = 1 and pay_type = 3 and company_id like :company_id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':company_id', $arg_company_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosFacturadosXComapines($arg_company_id)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where status_id = 13 and facturado = 2 and pay_type = 3 and company_id like :company_id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':company_id', $arg_company_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }


    public function listaServiciosParaPagos($arg_idEmpresa)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ser.id, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, dri.cedula, ser.state_payment, ser.address, ser.units, ser.charge1, ser.charge2, ser.charge3, ser.charge4, ser.value, ser.date_state_payment from services ser left join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id where ser.status_id = 13 and ser.company_id = :idEmpresa order by ser.id desc LIMIT 500";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function listaServiciosParaPagosSinPagar($arg_idEmpresa)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ser.id as n_servicio, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, dri.cedula, ser.state_payment, ser.address, ser.km_recorrido, ser.tiempo_recorido, ser.valor_app, ser.valor_total, ser.date_state_payment, ser.id_carrera_ant from services ser left join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id where (ser.status_id = 13) and (ser.company_id = :idEmpresa) and (ser.state_payment = 0 or ser.state_payment = null) order by ser.id desc LIMIT 500";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }



    public function BusquedaServiciosParaPagos($arg_idEmpresa, $arg_campo, $arg_frase)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $campo = $arg_campo;
        $frase = '%'.$arg_frase.'%';
        $sql = "select ser.id, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, dri.cedula, ser.state_payment, ser.address, ser.km_recorrido, ser.tiempo_recorido,ser.valor_total, ser.date_state_payment from services ser inner join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id where ser.status_id = 13 and ser.company_id = :idEmpresa and $campo like :frase order by ser.id desc LIMIT 50";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);
        $statement->bindParam(':frase', $frase);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cargarServiciosParaPagos($arg_idEmpresa, $arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ser.id, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, ser.state_payment, ser.km_recorrido, ser.tiempo_recorido, ser.valor_app from services ser left join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id where ser.status_id = 13 and ser.company_id = :idEmpresa and ser.id = :idServicio LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);
        $statement->bindParam(':idServicio', $arg_idServicio);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function modificarPago($arg_km_recorrido, $arg_tiempo_recorido, $arg_valor_app, $arg_state_payment, $arg_date_state_payment, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set km_recorrido = :km_recorrido, tiempo_recorido = :tiempo_recorido, valor_app = :valor_app, state_payment = :state_payment, date_state_payment = :date_state_payment where id = :idServicio";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':state_payment', $arg_state_payment);
        $statement->bindParam(':date_state_payment', $arg_date_state_payment);
        $statement->bindParam(':idServicio', $arg_idServicio);

        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function infoPagos($arg_idServicio, $arg_idEmpresa)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ser.id, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, ser.state_payment, ser.km_recorrido, ser.tiempo_recorido, ser.valor_app, ser.state_payment, ser.date_state_payment from services ser left join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id where ser.id = :idServicio and ser.company_id = :idEmpresa LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idServicio', $arg_idServicio);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);

        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function infoPagosfacturados($arg_idServicio, $arg_idEmpresa)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select ser.id, ser.user_card_reference, ser.user_name, ser.created_at, car.placa, dri.name, dri.lastname, ser.state_payment, ser.km_recorrido, ser.tiempo_recorido, ser.valor_app, ser.state_payment, ser.date_state_payment, pay.n_recibo, pay.estado_facturado, pay.fecha_facturado from services ser left join cars car on ser.car_id = car.id left join drivers dri on ser.driver_id = dri.id left join payments pay on ser.id = pay.id_services where ser.id = :idServicio and ser.company_id = :idEmpresa LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idServicio', $arg_idServicio);
        $statement->bindParam(':idEmpresa', $arg_idEmpresa);

        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cancelarServiciosAutomaticamente()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        //$sql = "update services set status_id = 7 where (status_id = 1) and (timediff(created_at,now()) < '-00:05:00')";
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "update services set status_id = 7 where (kind_id = 3) and (status_id = 1) and (timediff(now(),created_at) > '00:01:30')";
        $statement = $conexion->prepare($sql);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cancelarServiciosAutomaticamenteCron()
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        //$sql = "update services set status_id = 7 where (status_id = 1) and (timediff(created_at,now()) < '-00:05:00')";
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select * from services where (kind_id = 1) and (status_id = 1) and (timediff(now(), created_at) > '05:01:30')";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function pruebaCrontab()
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select (now())";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerEstadoServicio($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select status_id from services where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_idServicio);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServicioXId($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);

        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cambiarEstadoServicioPrevio($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 1 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerEstadoPagoServicio($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select state_payment from services where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_idServicio);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerValorServicio($arg_idServicio)
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select valor_total from services where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id", $arg_idServicio);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function modificarEstadoPago($arg_idServicio, $arg_fechaPago)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set state_payment = 1, date_state_payment = :fecha, facturado = 2 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        $statement->bindParam(':fecha', $arg_fechaPago);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerIdConductorServicio()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select driver_id from services where id = :idServicio";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idServicio', $arg_idServicio);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerEstadoServicioXVehiculo($arg_idVehiculo)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select status_id from services where car_id = :idVehiculo order by id desc LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->execute();
        $estado = $statement->fetchColumn();
        return $estado;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerIdCarreraXVehiculo($arg_idVehiculo)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select id from services where car_id = :idVehiculo and status_id = 4  order by id desc LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->execute();
        $idCarrera = $statement->fetchColumn();
        return $idCarrera;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function actualizarServicio($arg_to_lat, $arg_to_lng, $arg_destination, $arg_km_recorrido, $arg_tiempo_recorido, $arg_valor_app, $arg_valor_total, $arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set to_lat = :to_lat, to_lng = :to_lng, destination = :destination, km_recorrido = :km_recorrido, tiempo_recorido = :tiempo_recorido, valor_app = :valor_app, valor_total = :valor_total where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":to_lat", $arg_to_lat);
        $statement->bindParam(":to_lng", $arg_to_lng);
        $statement->bindParam(":destination", $arg_destination);
        $statement->bindParam(":km_recorrido", $arg_km_recorrido);
        $statement->bindParam(":tiempo_recorido", $arg_tiempo_recorido);
        $statement->bindParam(":valor_app", $arg_valor_app);
        $statement->bindParam(":valor_total", $arg_valor_total);
        $statement->bindParam(":id", $arg_id);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function crearServicioInterrumpido(
    $arg_user_id,
    $arg_driver_id,
    $arg_car_id,
    $arg_from_lat,
    $arg_from_lng,
    $arg_status_id,
    $arg_to_lat,
    $arg_to_lng,
    $arg_barrio,
    $arg_obs,
    $arg_kind_id,
    $arg_created_at,
    $arg_destination,
    $arg_user_name,
    $arg_address,
    $arg_cms_users_id,
    $arg_pay_type,
    $arg_pay_reference,
    $arg_user_card_reference,
    $arg_charge1,
    $arg_charge2,
    $arg_charge3,
    $arg_charge4,
    $arg_code,
    $arg_company_id,
    $arg_state_payment,
    $arg_commit,
    $arg_km_recorrido,
    $arg_tiempo_recorido,
    $arg_valor_app,
    $arg_n_pasajeros,
    $arg_id_carrera_ant,
    $arg_valor_total,
    $arg_serv_calidad,
    $arg_route
) {

  //Variables quemadas

        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $value = 0;
        $cedula = "0";

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into services(user_id, driver_id, car_id, from_lat, from_lng, status_id, to_lat, to_lng, barrio, obs, kind_id, schedule_id, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, state_payment, cedula, commit, km_recorrido, tiempo_recorido, valor_app, n_pasajeros, id_carrera_ant, valor_total, serv_calidad, route) values (:user_id, :driver_id, :car_id, :from_lat, :from_lng, :status_id, :to_lat, :to_lng, :barrio, :obs, :kind_id, :schedule_id, :created_at, :destination, :user_name, :address, :cms_users_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :state_payment, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :n_pasajeros, :id_carrera_ant, :valor_total, :serv_calidad, :route)";

        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->bindParam(':driver_id', $arg_driver_id);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':from_lat', $arg_from_lat);
        $statement->bindParam(':from_lng', $arg_from_lng);
        $statement->bindParam(':status_id', $arg_status_id);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':obs', $arg_obs);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_users_id', $arg_cms_users_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_user_card_reference);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_company_id);
        $statement->bindParam(':state_payment', $arg_state_payment);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':n_pasajeros', $arg_n_pasajeros);
        $statement->bindParam(':id_carrera_ant', $arg_id_carrera_ant);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);
        $statement->bindParam(':route', $arg_route);

        if (!$statement) {
            return false;
        //print_r($statement->errorInfo());
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function finalizarServicioInterrumpido($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 19 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }


    public function terminarServicioOtraCiudad($arg_updated_at, $arg_units, $arg_charge1, $arg_charge2, $arg_charge3, $arg_charge4, $arg_value, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 5, updated_at = :updated_at, units = :units, charge1 = :charge1, charge2 = :charge2, charge3 = :charge3, charge4 = :charge4, value = :value where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':units', $arg_units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $arg_value);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function terminarServicioWS($arg_updated_at, $arg_n_pasajeros, $arg_tiempo_recorido, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 5, updated_at = :updated_at, n_pasajeros = :n_pasajeros, tiempo_recorido = :tiempo_recorido where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':n_pasajeros', $arg_n_pasajeros);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function terminarServicioXUSuario($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 14 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXStatus($arg_campo, $arg_idCampo)
    {
        $rows = null;
        $campo = $arg_campo;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id, services.driver_id, services.car_id, services.from_lat, services.from_lng, services.status_id, services.to_lat, services.to_lng, services.start_datetime, services.finish_datetime, services.qualification, services.reason_qualification, services.index_id, services.comp1, services.comp2, services.no, services.barrio, services.obs, services.kind_id,
          services.schedule_id, services.schedule_type, services.updated_at, services.created_at, services.destination, services.service_date_time, services.user_name, services.address, services.cms_users_id, services.pay_type, services.pay_reference, services.user_card_reference, services.user_email, services.units, services.charge1, services.charge2, services.charge3, services.charge4, services.value, services.code,
          services.company_id, services.state_payment, services.cedula, services.date_state_payment, services.commit, services.facturado, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.n_pasajeros, services.id_carrera_ant, services.valor_total,route.polyline from services left join route on services.id = route.id_services where ($campo = :idCampo) and (services.status_id = 2 or services.status_id =  3 or services.status_id = 4 or services.status_id = 5 or services.status_id = 12 or services.status_id = 14 or services.status_id = 15 or services.status_id = 16 or services.status_id = 17 or services.status_id = 18) order by services.id asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idCampo', $arg_idCampo);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXStatusConductorSevicio($arg_idServicio, $arg_idConductor)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        //$sql = "select * from services where (id = :idServicio and driver_id = :idConductor) and (status_id = 1 or status_id = 2 or status_id =  3 or status_id = 4 or status_id = 12) order by id desc";
        $sql = "select services.id, services.user_id, services.driver_id, services.car_id, services.from_lat, services.from_lng, services.status_id, services.to_lat, services.to_lng, services.start_datetime, services.finish_datetime, services.qualification, services.reason_qualification, services.index_id, services.comp1, services.comp2, services.no, services.barrio, services.obs, services.kind_id,
          services.schedule_id, services.schedule_type, services.updated_at, services.created_at, services.destination, services.service_date_time, services.user_name, services.address, services.cms_users_id, services.pay_type, services.pay_reference, services.user_card_reference, services.user_email, services.units, services.charge1, services.charge2, services.charge3, services.charge4, services.value, services.code,
          services.company_id, services.state_payment, services.cedula, services.date_state_payment, services.commit, services.facturado, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.n_pasajeros, services.id_carrera_ant, services.valor_total,route.polyline from services left join route on services.id = route.id_services where (services.id = :idServicio and services.driver_id = :idConductor) and (services.status_id = 1 or services.status_id = 2 or services.status_id =  3 or services.status_id = 4 or services.status_id = 12 or services.status_id = 14 or services.status_id = 15 or services.status_id = 16 or services.status_id = 17 or services.status_id = 18) order by services.id asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idServicio', $arg_idServicio);
        $statement->bindParam(':idConductor', $arg_idConductor);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXStatusUsuarioSevicio($arg_user_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id, services.driver_id, services.car_id, services.from_lat, services.from_lng, services.status_id, services.to_lat, services.to_lng, services.start_datetime, services.finish_datetime, services.qualification, services.reason_qualification, services.index_id, services.comp1, services.comp2, services.no, services.barrio, services.obs, services.kind_id,
          services.schedule_id, services.schedule_type, services.updated_at, services.created_at, services.destination, services.service_date_time, services.user_name, services.address, services.cms_users_id, services.pay_type, services.pay_reference, services.user_card_reference, services.user_email, services.units, services.charge1, services.charge2, services.charge3, services.charge4, services.value, services.code,
          services.company_id, services.state_payment, services.cedula, services.date_state_payment, services.commit, services.facturado, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.n_pasajeros, services.id_carrera_ant, services.valor_total, route.polyline from services left join route on services.id = route.id_services where (services.user_id = :user_id) and (services.status_id = 1 or services.status_id = 2 or services.status_id =  3 or services.status_id = 4 or services.status_id = 12 or services.status_id = 5 or services.status_id = 14 or services.status_id = 15 or services.status_id = 16 or services.status_id = 17 or services.status_id = 18) order by services.id asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXStatusUsuarioSevicioUser($arg_user_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select services.id, services.user_id, services.driver_id, services.car_id, services.from_lat, services.from_lng, services.status_id, services.to_lat, services.to_lng, services.start_datetime, services.finish_datetime, services.qualification, services.reason_qualification, services.index_id, services.comp1, services.comp2, services.no, services.barrio, services.obs, services.kind_id,
          services.schedule_id, services.schedule_type, services.updated_at, services.created_at, services.destination, services.service_date_time, services.user_name, services.address, services.cms_users_id, services.pay_type, services.pay_reference, services.user_card_reference, services.user_email, services.units, services.charge1, services.charge2, services.charge3, services.charge4, services.value, services.code,
          services.company_id, services.state_payment, services.cedula, services.date_state_payment, services.commit, services.facturado, services.km_recorrido, services.tiempo_recorido, services.valor_app, services.n_pasajeros, services.id_carrera_ant, services.valor_total, route.polyline, drivers.name, drivers.lastname, drivers.score_driver, drivers.picture, drivers.cellphone, cars.placa, cars.car_brand from services left join route on services.id = route.id_services left join drivers on services.driver_id = drivers.id left join cars on services.car_id = cars.id where (services.user_id = :user_id) and (services.status_id = 1 or services.status_id = 2 or services.status_id =  3 or services.status_id = 4 or services.status_id = 12 or services.status_id = 5 or services.status_id = 14 or services.status_id = 15 or services.status_id = 16 or services.status_id = 17 or services.status_id = 18) order by services.id asc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXValeCanceladosSistema()
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (status_id = 7) and (pay_type = 3) order by id desc limit 10";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServicioXVale($arg_user_card_reference)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where user_card_reference = :user_card_reference";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_card_reference', $arg_user_card_reference);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXIdVehiculo($arg_idVehiculo)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where car_id = :idVehiculo";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosXIdVehiculoUltimo($arg_idVehiculo)
    {

        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where car_id = :idVehiculo and status_id in (2,3,4,16,17,18)order by id desc LIMIT 1";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':idVehiculo', $arg_idVehiculo);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cambiarEstadoServicio($arg_status_id, $arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = :status_id where id = :id ";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':status_id', $arg_status_id);
        $statement->bindParam(':id', $arg_id);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function calificarServicio($arg_status_id, $arg_qualification, $arg_reason_qualification, $arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = :status_id, qualification = :qualification, reason_qualification = :reason_qualification where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':status_id', $arg_status_id);
        $statement->bindParam(':qualification', $arg_qualification);
        $statement->bindParam(':reason_qualification', $arg_reason_qualification);
        $statement->bindParam(':id', $arg_id);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosXConductor($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services where driver_id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCalificacionServiciosPrestadosXConductor($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select qualification from services where driver_id = :id and status_id = 13";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        //$cant = $statement->fetchColumn();
        //return $cant;


        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;


        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function asignarServicioConductor($arg_driver_id, $arg_car_id, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set driver_id = :driver_id, car_id = :car_id, status_id = 2 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':driver_id', $arg_driver_id);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function servicioCanceladoXUsuario($arg_status_id, $arg_reason_cancellation, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = :status_id, reason_cancellation = :reason_cancellation where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':status_id', $arg_status_id);
        $statement->bindParam(':reason_cancellation', $arg_reason_cancellation);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function servicioNoNotificado($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set report_secr = 1 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }
    public function actualizarStatePayment($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set state_payment = 0 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerServiciosFinalizados()
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $hour = 'set @@session.time_zone = "America/Bogota"';
        $statement = $conexion->prepare($hour);
        $statement->execute();
        $sql = "select * from services where (status_id = 5) and (timediff(now(),updated_at) > '00:01:00')";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function cancelarServicioRazon($arg_status_id, $arg_reason_cancellation, $arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = :status_id, reason_cancellation = :reason_cancellation where id = :id ";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':status_id', $arg_status_id);
        $statement->bindParam(':reason_cancellation', $arg_reason_cancellation);
        $statement->bindParam(':id', $arg_id);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosUltimos30Dias($arg_driver_id, $arg_car_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (driver_id = :driver_id) and (car_id = :car_id) and (status_id = 13) and DATE_SUB(NOW(), INTERVAL 30 DAY) order by id desc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':driver_id', $arg_driver_id);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosUltimos30DiasUsuaripApp($arg_user_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (user_id = :user_id) and (status_id = 13 or status_id = 5 or status_id = 14) and DATE_SUB(NOW(), INTERVAL 30 DAY) order by id desc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosFiltroFecha($arg_car_id, $arg_inicio, $arg_fin)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (car_id = :car_id) and (status_id = 13) and  created_at between :inicio and :fin";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':inicio', $arg_inicio);
        $statement->bindParam(':fin', $arg_fin);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosFiltroFechaUsuarioApp($arg_user_id, $arg_inicio, $arg_fin)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (user_id = :user_id) and (status_id = 13 or status_id = 5 or status_id = 14) and  created_at between :inicio and :fin";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->bindParam(':inicio', $arg_inicio);
        $statement->bindParam(':fin', $arg_fin);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosTipoPagoUltimos30Dias($arg_car_id, $arg_pay_type)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (car_id = :car_id) and (status_id = 13) and pay_type = :pay_type and DATE_SUB(NOW(), INTERVAL 30 DAY) order by id desc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosTipoPagoUltimos30DiasUsuarioApp($arg_user_id, $arg_pay_type)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (user_id = :user_id) and (status_id = 13 or status_id = 5 or status_id = 14) and pay_type = :pay_type and DATE_SUB(NOW(), INTERVAL 30 DAY) order by id desc";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosTipoPagoFecha($arg_car_id, $arg_pay_type, $arg_inicio, $arg_fin)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (car_id = :car_id) and (status_id = 13) and (pay_type = :pay_type) and  (created_at between :inicio and :fin)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':car_id', $arg_car_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':inicio', $arg_inicio);
        $statement->bindParam(':fin', $arg_fin);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function serviciosTipoPagoFechaUsuarioApp($arg_user_id, $arg_pay_type, $arg_inicio, $arg_fin)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from services where (user_id = :user_id) and (status_id = 13) and (pay_type = :pay_type) and  (created_at between :inicio and :fin)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':user_id', $arg_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':inicio', $arg_inicio);
        $statement->bindParam(':fin', $arg_fin);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function regresarServicio($arg_status_id, $arg_idServicio)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update services set status_id = :status_id where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':status_id', $arg_status_id);
      $statement->bindParam(':id', $arg_idServicio);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function interrumpirServicioXUSuario($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 16 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function interrumpirServicioXConductor($arg_n_pasajeros, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 17, n_pasajeros = :n_pasajeros where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':n_pasajeros', $arg_n_pasajeros);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function interrumpirServicioXCalificado($arg_to_lat, $arg_to_lng, $arg_qualification, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 18, to_lat = :to_lat, to_lng = :to_lng, qualification = :qualification where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':qualification', $arg_qualification);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function interrumpirServicioActualizarPrecio($arg_valor_app, $arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 18, valor_app = :valor_app where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function interrumpirServicioFinalizado($arg_idServicio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update services set status_id = 19 where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_idServicio);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function agendarServicioValeWS(
      $arg_idUsuario,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_vale,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
      $arg_charge4,
      $arg_code,
      $arg_companiaId,
      $arg_commit,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_valor_total,
      $arg_factor,
      $arg_route
  ) {
        //variables quemadas
        $status = 11;
        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $value = 0;
        $cedula = "0";

        //var_dump('modelo= ',  $arg_idUsuario, $arg_lat, $arg_lng, $arg_avenida, $arg_comp1, $arg_comp2, $arg_no, $arg_barrio, $arg_kind_id, $arg_user_name, $arg_address, $arg_cms_user_id, $arg_pay_type, $arg_pay_reference, $arg_code, $arg_commit);

        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad, route)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones, :kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad, :route)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_vale);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_factor);
        $statement->bindParam(':route', $arg_route);
        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function agendarServicioEfectivoWS(
      $arg_idUsuario,
      $arg_lat,
      $arg_lng,
      $arg_to_lat,
      $arg_to_lng,
      $arg_avenida,
      $arg_comp1,
      $arg_comp2,
      $arg_no,
      $arg_barrio,
      $arg_observaciones,
      $arg_kind_id,
      $arg_updated_at,
      $arg_created_at,
      $arg_destination,
      $arg_user_name,
      $arg_address,
      $arg_cms_user_id,
      $arg_pay_type,
      $arg_pay_reference,
      $arg_charge1,
      $arg_charge2,
      $arg_charge3,
      $arg_charge4,
      $arg_code,
      $arg_companiaId,
      $arg_km_recorrido,
      $arg_tiempo_recorido,
      $arg_valor_app,
      $arg_valor_total,
      $arg_serv_calidad
  ) {
        //variables quemadas
        $status = 11;
        $schedule_id = 0;
        $user_card_reference = "0";
        $user_email = "0";
        $units = 0;
        $value = 0;
        $cedula = "0";
        $commit = "";

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services (user_id, from_lat, from_lng, status_id, to_lat, to_lng, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad)values(:usuario_id, :lat, :lng, :status, :to_lat, :to_lng, :index_id, :comp1, :comp2, :no, :barrio, :observaciones,:kind_id, :schedule_id, :updated_at, :created_at, :destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $user_card_reference);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $units);
        $statement->bindParam(':charge1', $arg_charge1);
        $statement->bindParam(':charge2', $arg_charge2);
        $statement->bindParam(':charge3', $arg_charge3);
        $statement->bindParam(':charge4', $arg_charge4);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);

        if (!$statement) {
            return false;
        } else {
            //var_dump('verficar: ', $statement);
            $statement->execute();
            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function modificarFechaIncioServicio($arg_fecha, $arg_id)
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "update services set updated_at = :updated_at, created_at = :created_at where id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':created_at', $arg_fecha);
      $statement->bindParam(':updated_at', $arg_fecha);
      $statement->bindParam(':id', $arg_id);
      if (!$statement) {
          return false;
      } else {
          $statement->execute();
          return true;
      }
      $conexion = $modelo->close_conexion($statement, $conexion);

    }

    public function subidoServicioVale(
        $arg_idUsuario,
        $arg_idVehiculo,
        $arg_lat,
        $arg_lng,
        $arg_to_lat,
        $arg_to_lng,
        $arg_avenida,
        $arg_comp1,
        $arg_comp2,
        $arg_no,
        $arg_barrio,
        $arg_observaciones,
        $arg_kind_id,
        $arg_updated_at,
        $arg_created_at,
        $arg_destination,
        $arg_user_name,
        $arg_address,
        $arg_cms_user_id,
        $arg_pay_type,
        $arg_pay_reference,
        $arg_vale,
        $arg_unidades,
        $arg_aeropuerto,
        $arg_nocturno,
        $arg_mensajeria,
        $arg_pp,
        $arg_code,
        $arg_companiaId,
        $arg_commit,
        $arg_km_recorrido,
        $arg_tiempo_recorido,
    $arg_valor_app,
        $arg_valor_total,
        $arg_serv_calidad,
        $arg_route
    ) {
        //variables quemadas
        $status = 13;
        $schedule_id = 0;
        $user_email = "0";
        $units = 0;
        $charge1 = "0";
        $charge2 = "0";
        $charge3 = "0";
        $charge4 = "0";
        $value = 0;
        $cedula = "0";
        $qualification = 5;
        $reason_qualification = "Buen servicio";



        //$update_at = $arg_created_at;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "insert into services(user_id, car_id,from_lat, from_lng, status_id, to_lat, to_lng, qualification, reason_qualification, index_id, comp1, comp2, no, barrio, obs, kind_id, schedule_id, updated_at, created_at, destination, user_name, address, cms_users_id, pay_type, pay_reference, user_card_reference, user_email, units, charge1, charge2, charge3, charge4, value, code, company_id, cedula, commit, km_recorrido, tiempo_recorido, valor_app, valor_total, serv_calidad, route) values (:usuario_id, :car_id, :lat, :lng, :status, :to_lat, :to_lng, :qualification, :reason_qualification, :index_id, :comp1, :comp2, :no, :barrio, :observaciones, :kind_id, :schedule_id, :updated_at, :created_at,:destination, :user_name, :address, :cms_user_id, :pay_type, :pay_reference, :user_card_reference, :user_email, :units, :charge1, :charge2, :charge3, :charge4, :value, :code, :company_id, :cedula, :commit, :km_recorrido, :tiempo_recorido, :valor_app, :valor_total, :serv_calidad, :route)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':usuario_id', $arg_idUsuario);
        $statement->bindParam(':car_id', $arg_idVehiculo);
        $statement->bindParam(':lat', $arg_lat);
        $statement->bindParam(':lng', $arg_lng);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':to_lat', $arg_to_lat);
        $statement->bindParam(':to_lng', $arg_to_lng);
        $statement->bindParam(':qualification', $qualification);
        $statement->bindParam(':reason_qualification', $reason_qualification);
        $statement->bindParam(':index_id', $arg_avenida);
        $statement->bindParam(':comp1', $arg_comp1);
        $statement->bindParam(':comp2', $arg_comp2);
        $statement->bindParam(':no', $arg_no);
        $statement->bindParam(':barrio', $arg_barrio);
        $statement->bindParam(':observaciones', $arg_observaciones);
        $statement->bindParam(':kind_id', $arg_kind_id);
        $statement->bindParam(':schedule_id', $schedule_id);
        $statement->bindParam(':updated_at', $arg_updated_at);
        $statement->bindParam(':created_at', $arg_created_at);
        $statement->bindParam(':destination', $arg_destination);
        $statement->bindParam(':user_name', $arg_user_name);
        $statement->bindParam(':address', $arg_address);
        $statement->bindParam(':cms_user_id', $arg_cms_user_id);
        $statement->bindParam(':pay_type', $arg_pay_type);
        $statement->bindParam(':pay_reference', $arg_pay_reference);
        $statement->bindParam(':user_card_reference', $arg_vale);
        $statement->bindParam(':user_email', $user_email);
        $statement->bindParam(':units', $arg_unidades);
        $statement->bindParam(':charge1', $arg_aeropuerto);
        $statement->bindParam(':charge2', $arg_nocturno);
        $statement->bindParam(':charge3', $arg_mensajeria);
        $statement->bindParam(':charge4', $arg_pp);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':code', $arg_code);
        $statement->bindParam(':company_id', $arg_companiaId);
        $statement->bindParam(':cedula', $cedula);
        $statement->bindParam(':commit', $arg_commit);
        $statement->bindParam(':km_recorrido', $arg_km_recorrido);
        $statement->bindParam(':tiempo_recorido', $arg_tiempo_recorido);
        $statement->bindParam(':valor_app', $arg_valor_app);
        $statement->bindParam(':valor_total', $arg_valor_total);
        $statement->bindParam(':serv_calidad', $arg_serv_calidad);
        $statement->bindParam(':route', $arg_route);
        if (!$statement) {
            return false;
        } else {
            $statement->execute();

            return true;
        }
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestados()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosTaxisya()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services inner join cars on services.car_id = cars.id where (cars.id_empresa = 1) or (cars.id_empresa = 2)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosTaxis($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services inner join cars on services.car_id = cars.id where (cars.id_empresa = :id_empresa)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id_empresa', $arg_id);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosVales()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services inner join cars on services.car_id = cars.id where (services.pay_type = 3) and (services.pay_type = 'VALE')";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosValesTaxisya()
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services inner join cars on services.car_id = cars.id where (services.pay_type = 3) and (cars.id_empresa = 1) or (cars.id_empresa = 2) and (services.pay_type = 'VALE')";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $arg_id);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function obtenerCantidadServiciosPrestadosValesTaxis($arg_id)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select count(*) from services inner join cars on services.car_id = cars.id where (services.pay_type = 3) and (cars.id_empresa = :id_empresa) and (services.pay_type = 'VALE')";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id_empresa', $arg_id);
        $statement->execute();
        $cant = $statement->fetchColumn();
        return $cant;
        $conexion = $modelo->close_conexion($statement, $conexion);
    }

    public function verificarSITieneServicios($arg_driver_id)
    {
      $rows = null;
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "select * from services where (driver_id = :driver_id) and status_id in (2,3,4,14,16,17,18)";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':driver_id', $arg_driver_id);
      $statement->execute();
      while ($result = $statement->fetch()) {
          $rows[] = $result;
      }
      return $rows;
      $conexion = $modelo->close_conexion($statement, $conexion);

    }

    public function obtenerServiciosFinalizadosUsuario()
    {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $hour = 'set @@session.time_zone = "America/Bogota"';
      $statement = $conexion->prepare($hour);
      $statement->execute();
      $sql = "select * from services where (status_id = 14) and (timediff(now(),updated_at) > '05:01:00')";
      $statement = $conexion->prepare($sql);
      $statement->execute();
      while ($result = $statement->fetch()) {
          $rows[] = $result;
      }
      return $rows;
      $conexion = $modelo->close_conexion($statement, $conexion);
    }



}
