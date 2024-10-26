
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
        
        $hostname = 'us-cdbr-east-05.cleardb.net';
        $database = 'heroku_734ef63ccdc2de6';
        $username = 'b42d821ea516bb';
        $password = '33aa38ba';
        $charset = 'utf-8';

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo ("mysql:host={$hostname};dbname={$database};charset{$charset}", $username, $password, $options) ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>