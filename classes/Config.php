<?php

class Config {

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "club_activity_matching";

    // create an initial variable/property for $conn
    public $conn;

    public function __construct() {
        // Create the connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // Check the connection
        if($this->conn->connect_error){
            // stop the connection and show error message
            die("Connection error" . $this->conn->connect_error);
        }

        return $this->conn;
    }
    public function redirect_js($url)
    {
        // echo "<script>window.location.replace('$url')</script>";
        echo "<script>window.location.href='$url';</script>";
        exit;
    }

}

?>