<?php
    class dbconn {
        public $conn;
        public function connect() {
            this->conn=mysqli_connect("localhost", "root", "", "tcts");
        }
    }

?>