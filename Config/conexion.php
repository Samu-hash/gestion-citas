
<?php

class Database {

    public function __construct(){
        try{
            $this->mysql = $this->conectar();
            //echo 'Conexión exitosa';

            $this->crearTabla();
        } catch(PDOException $exepcion){
            echo 'Error de conexión' . $exepcion->getMessage();
        }
    }
    
    public static function conectar () {

        $dd = 'Database=gestion;Server=pg-server01.postgres.database.azure.com;User Id=kwkeweooph;Password=36gi0OagColj$E$f'
        $hostname = 'pg-server01.postgres.database.azure.com';
        $database = 'gestion';
        $username = 'kwkeweooph';
        $password = '36gi0OagColj$E$f';
        $charset = 'utf-8';

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo ("mysql:host={$hostname};dbname={$database};charset{$charset}", $username, $password, $options) ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

     private $id;
    private $solicitante;
    private $telefono;
    private $email;
    private $servicio;
    private $profesional;
    private $fecha;
    private $solicitud;

    private function crearTabla() {
        $sql = "
            CREATE TABLE IF NOT EXISTS citas (
            id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
            solicitante VARCHAR(100) NOT NULL,
            telefono VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            servicio VARCHAR(100) NOT NULL,
            profesional VARCHAR(100) NOT NULL,
            fecha DATE NOT NULL,
            solicitud VARCHAR(100) NOT NULL
        )
        ";

        $this->mysql->exec($sql);
    }
}

?>
