<?php include("conexion.php");?>
<?php 

class singleton{
    
    private static Singleton $Instance;

    private function __construct(){
        $db_config = [
            'db_user' => 'root',
            'db_pass' => '',
            'db_name' => 'albumdata',
            'db_host' => 'localhost',
            'db_port' => '3306'
        ];

        try{
            $con = new PDO(
                'mysql:host='.$db_config['db_host'].
                ';port='.$db_config['db_port'].
                ';dbname='.$db_config['db_name'],
                $db_config['db_user'],
                $db_config['db_pass']
            );
            $sql ="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion3', 'foto.jpg');";
       $con->exec($sql);
            echo "conexion correcta :)";
        }catch(PDOException $error){
            echo "No me pude conectar".$error->getMessage ();
        }
       
    }

    public static function getInstance(){
        if(self::$Instance==null){
            self::$Instance = new Singleton();
        }
        return  self::$Instance;
    }

}

?>