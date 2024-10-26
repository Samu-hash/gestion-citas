<?php

class CitaController
{

    function __construct()
    {
    }

    function landing()
    {
        require('./Views/landing.php');
    }

    function add()
    {
        require('./Views/apply.php');
    }

    function save()
    {
        $cita = new Cita(null, $_POST['solicitante'], $_POST['telefono'], $_POST['email'], $_POST['servicio'], $_POST['profesional'], $_POST['fecha'], null);

        Cita::save($cita);
        $this->show();
    }

    function show()
    {
        $listCitas = Cita::list();

        require('./Views/show.php');
    }

    function updateshow()
    {
        $id = $_GET['idCita'];
        $cita = Cita::searchById($id);
        require_once('./Views/updateshow.php');
    }

    function update()
    {
        $cita = new Cita($_POST['id'], $_POST['solicitante'], $_POST['telefono'], $_POST['email'], $_POST['servicio'], $_POST['profesional'], $_POST['fecha'], null);
        Cita::update($cita);
        $this->show();
    }
    function delete()
    {
        $id = $_GET['id'];
        Cita::delete($id);
        $this->show();
    }

    function search()
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $cita = Cita::searchById($id);
            $listCitas[] = $cita;
            //var_dump($id);
            //die();
            require('./Views/show.php');
        } else {
            $listCitas = Cita::list();

            require('./Views/show.php');
        }
    }

    function error()
    {
        require('./Views/error.php');
    }
}

?>