<?php

include('../databases/connect.php');

if(isset($_GET["deleteid"])){

            $id = $_GET["deleteid"];

            $sql ="DELETE FROM `candidates` where SN = $id";

            $result = mysqli_query($conn, $sql);

            if($result){
                header('location: ../candidates.php');
            }
  }


?>