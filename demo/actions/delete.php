<?php 
    include 'connect.php'; 
    if(!isset($_GET['deleteid'])){
        echo "Please register here!!<br><br>";
        echo '<button id="register"><a id="r" href="register.html" target="_blank">Register</a></button>';
    }
    if(isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

        $sql="DELETE FROM users WHERE id=$id";
        $result=$conn->query($sql);
        if($result){
            header("location:display.php");
        } else {
            echo "Process Failed";
        }
    }
?>
