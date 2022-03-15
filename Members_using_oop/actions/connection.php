<?php
    class dbconn {
        public $conn;
        public function __construct() {
            $this->conn=mysqli_connect("localhost", "root", "", "tcts");
            if(mysqli_connect_error()) {
                die("Connection Failed");
            } else {
                return $this->conn;
            }
        }
    }
    $db = new dbconn();

?>