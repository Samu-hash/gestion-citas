<?php

class Cita {

    private $id;
    private $solicitante;
    private $telefono;
    private $email;
    private $servicio;
    private $profesional;
    private $fecha;
    private $solicitud;

    function __construct($id, $solicitante, $telefono, $email, $servicio, $profesional, $fecha, $solicitud)
    {
        $this->setId($id);
        $this->setSolicitante($solicitante);
        $this->setTelefono($telefono);
        $this->setEmail($email);
        $this->setServicio($servicio);
        $this->setProfesional($profesional);
        $this->setFecha($fecha);
        $this->setSolicitud($solicitud);
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getSolicitante(){
        return $this->solicitante;
    }

    public function setSolicitante($solicitante){
        $this->solicitante = $solicitante;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getServicio(){
        return $this->servicio;
    }

    public function setServicio($servicio){
        $this->servicio = $servicio;
    }

    public function getProfesional(){
        return $this->profesional;
    }

    public function setProfesional($profesional){
        $this->profesional = $profesional;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getSolicitud(){
        return $this->solicitud;
    }

    public function setSolicitud($solicitud){
        $this->solicitud = $solicitud;
    }

    public static function list(){
        $db=Database::conectar();
        $listCitas=[];

        $select=$db->query('SELECT * FROM gestion order by id');

        foreach ($select->fetchAll() as $cita){
            $listCitas[]=new Cita($cita['id'], $cita['solicitante'], $cita['telefono'], $cita['email'], $cita['servicio'], $cita['profesional'], $cita['fecha'], $cita['solicitud']);
        }

        return $listCitas;
        
    }

    public static function save($cita) {
        $db=Database::conectar();

        $insert=$db->prepare('INSERT INTO gestion VALUES (NULL, :solicitante, :telefono, :email, :servicio, :profesional, :fecha, CURRENT_TIMESTAMP)');
		$insert->bindValue('solicitante',$cita->getSolicitante());
		$insert->bindValue('telefono',$cita->getTelefono());
		$insert->bindValue('email',$cita->getEmail());
        $insert->bindValue('servicio',$cita->getServicio());
        $insert->bindValue('profesional',$cita->getProfesional());
        $insert->bindValue('fecha',$cita->getFecha());
        $insert->execute();
    }

    public static function update($cita){
        $db=Database::conectar();

        $update=$db->prepare('UPDATE gestion SET solicitante=:solicitante, telefono=:telefono, email=:email, servicio=:servicio, profesional=:profesional, fecha=:fecha WHERE id=:id');
		$update->bindValue('solicitante',$cita->getSolicitante());
		$update->bindValue('telefono',$cita->getTelefono());
		$update->bindValue('email',$cita->getEmail());
        $update->bindValue('servicio',$cita->getServicio());
        $update->bindValue('profesional',$cita->getProfesional());
        $update->bindValue('fecha',$cita->getFecha());
        $update->bindValue('id',$cita->getId());
        $update->execute();
    }

    public static function delete($id){
		$db=Database::conectar();
		$delete=$db->prepare('DELETE  FROM gestion WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
    
    public static function searchById($id){
		$db=Database::conectar();
		$select=$db->prepare('SELECT * FROM gestion WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();

		$citaDb=$select->fetch();

		$cita = new Cita ($citaDb['id'],$citaDb['solicitante'], $citaDb['telefono'], $citaDb['email'], $citaDb['servicio'], $citaDb['profesional'], $citaDb['fecha'], $citaDb['solicitud']);
		return $cita;

	}

}