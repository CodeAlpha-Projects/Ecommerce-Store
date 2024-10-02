<?php

    include('../databases/users_db.php');

    if(isset($_GET["deleteid"])){

                $id = $_GET["deleteid"];

                $sql ="DELETE FROM `users` where SN = $id";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header('location: ../users.php');
                }

      }

  


?>