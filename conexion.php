<?php
/* 


class conexion{
   private $db_config = [
        'db_user' => 'root',
        'db_pass' => '',
        'db_name' => 'bdpatrones',
        'db_host' => 'localhost',
        'db_port' => '3306'
    ];
    private $conexion;

        public function __construct(){
                        
            try{
                $this->conexion = new PDO(
                    'mysql:host='.$this->db_config['db_host'].
                    ';port='.$this->db_config['db_port'].
                    ';dbname='.$this->db_config['db_name'],
                    $this->db_config['db_user'],
                    $this->db_config['db_pass']
                );
                
                echo "conexion correcta :)"; //para ver q si da
            }catch(PDOException $error){
                echo "No me pude conectar".$error->getMessage ();
            }
        }
      
        public function ejecutar($sql){//para insertar, borrar, modificar

    //SIEMPRE LLAMAR AL OBJ PDO para q haga referencia a la conexion con bd ya hecha(en este caso se
    //llama conexion y esta con el $this->conexion, por ser una clase y ser 1 dato priv q nescesita this)

            $this->conexion->exec($sql);//pasa el sql, esta instruccion,  DIRECTO ejecuta la instruccion sql
            //pero NESCESITAS PASAR LA VAR YA Y DIRECTO se ejecuta
            //................................................................ separacion otra cosa
            return $this->conexion->lastInsertID();//regresa una id de insersion(n es nesc recep x ahora)
        }    
        public function consultar($sql){
            $sentencia=$this->conexion->prepare($sql);// Almacenas la instruccion sql para directo ejecutar
            //cuando quieras(pero pasas el sql para almacenar)
         //................................................................ separacion otra cosa
            $sentencia->execute();//EJECUTAS la SENTENCIA ALMACENADA, la dif con el ponerlo 
            //en una var sql=""; , seria q aqui ya con el comando $variable->execute(); directo ejecutas
         //................................................................ separacion otra cosa
            return $sentencia->fetchAll();//FETCHALL es lo magico/importantisimo, retorna
            //TODOS los resultados de tu consulta sea cual sea(en este caso el sql q mandaremos sera para
            //ver todos los datos(como se imprimiran en la tablita ordenado es otra cosa, pero aqui se 
            //reciben ya los resultados)) y los mandamos como respuesta de la funcion con el return, 
         //y toda la inf obt del fechtall viene en formato arreglo, al igualarlo con 1 var sera array
        }
}   
//$objConexion=new conexion();

    ?> 

    */