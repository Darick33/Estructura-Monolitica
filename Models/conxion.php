<?php

class ClaseConectar{
    protected $db;
    public $conexion;

    private $host= "localhost";
    private $user="root";
    private $pass= "";
    private $database= "monolito_sql_";

    public function ProcedimientoConectar(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->pass,$this->database);
        mysqli_query($this->conexion,"SET NAMES utf8");
        if ($this->conexion ==0) die("error al conectarse") . mysqli_error($this->conexion);
        $this-> db = mysqli_select_db($this->conexion, $this->database);
        if ($this-> db ==0) die("Error en la conexion") . mysqli_error($this->conexion);
        return $this-> conexion;
        
        
        

    }
}




















