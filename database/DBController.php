<?php

class DBController
{
 //Database Connection
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = "Bornchamp30";
    protected $database = "mobileShopping";

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Failed " . $this->con->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    // closing mysqli
    protected function closeConnection(){
        if ($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}