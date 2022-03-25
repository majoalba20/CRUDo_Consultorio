<?php

class conexion{
    $private $host = "localhost";
    $private $user =  "root";
    $private $password =  "";
    $private $db = "crudoconsultorio";
    $private $conect;

    public function __construct(){
     $connectionstring = "mysql:hos=" .$this->host.";dbname=".$this->db.";charset=utf8;
     try{
         $this->conect = new PDO($connectionstring,$this->user,this->password);
         $this->conect->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    $$this->conect  ="Error de conexion";
    echo "Error: ".$e->getMessage();
}
    
public function connect()
    {
       return $this->conect;
    }


}



?>