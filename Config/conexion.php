
<?php

class Database {

    public function __construct(){
        try{
            $this->mysql = $this->conectar();
            //echo 'Conexión exitosa';
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

    private function crearTabla() {
        $sql = "
            CREATE TABLE IF NOT EXISTS citas (
                id INT PRIMARY KEY,
                nombre VARCHAR(100) NOT NULL,
                fecha DATE NOT NULL,
                hora TIME NOT NULL,
                descripcion TEXT
            )
        ";

        $this->mysql->exec($sql);
    }
}

?>
