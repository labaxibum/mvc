<?php 

class DB{

    public $con;
    protected $servername ="";
    protected $username ="";
    protected $password = "";
    protected $dbname ="";

    function __construct(){
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->dbname);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }

}

?>