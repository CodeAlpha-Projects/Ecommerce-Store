<?php

include('database/connect.php');

if(isset($_GET["deleteid"])){

            $id = $_GET["deleteid"];

            $sql ="DELETE FROM `cart` where SN = $id";

            $result = mysqli_query($conn, $sql);

            if($result){
                header('location: index.php');
            }

  }

?>