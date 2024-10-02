<?php

                $db_server = "Localhost";
                $db_user = "root";
                $db_pass ="@Bashanshullam2209";
                $db_name ="Zetech_Voting";
                $conn ='';
 
                try{
                $conn = mysqli_connect($db_server,  $db_user, $db_pass,$db_name);
                }
              catch(mysqli_sql_exception){
                echo"could not connect";
            }

?>