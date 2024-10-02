<?php

    include('../databases/users_db.php');

    if(isset($_GET["deleteid"])){

                $id = $_GET["deleteid"];

                $sql ="DELETE FROM `voted_users` where S_N = $id";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header('location: ../votes.php');
                }

      }

  


?>