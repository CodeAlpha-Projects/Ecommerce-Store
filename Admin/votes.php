<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}

include('databases/users_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zetech-Online-Voting Admin Panel</title>
    <link rel="stylesheet" href="Assets/Css/user.css">
    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    
</head>
<body>
    <div class="container">       
              <!-- Start of Top -->
                <div class="top top-main">                      
                            <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                            </button>

                            <div class="top-hero">
                              <div class="logo">
                              </div>
                              <h1>Zetech Online</h1>
                          </div>

                       <!-- Top right -->
                       <div class="top-right">
                            <!-- Theme toggler -->
                            <div class="theme-toggler">
                                  <span class="material-icons-sharp active">light_mode</span>
                                  <span class="material-icons-sharp">dark_mode</span>                    
                            </div>

                            <!-- Profile -->
                            <div class="profile">
                                <div class="info">
                                  <p>Hello, <b>Hope</b></p>
                                  <small class="text-muted">Admin</small>
                                </div>
                                <div class="profile-photo">
                                  <img src="Assets/images/cand3.png" alt="">
                               </div>
                           </div> 

                       </div>
              </div>
              <!-- End of Top -->

              <!-- Star of Aside -->
              <aside>
                     <div class="top">
                        <div class="close" id="close-btn">
                            <span class="material-icons-sharp">close</span>
                        </div>   
                      </div>

                      <div class="sidebar">
                          <a href="#">
                            <span class="material-icons-sharp">grid_view</span>
                            <h3>Dashboard</h3>
                          </a>

                          <a href="#" class="active">
                            <span class="material-icons-sharp">person_outline</span>
                            <h3>Participants</h3>
                          </a>

                          <a href="Html/beneficiaries.html">
                            <span class="material-icons-sharp">how_to_vote</span>
                            <h3>Voters</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">mail_outline</span>
                            <h3>Messages</h3>
                            <span class="message-count">26</span>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">tips_and_updates</span>
                            <h3>Innovations</h3>
                          </a>


                          <a href="votes.php">
                            <span class="material-icons-sharp">insights</span>
                            <h3>Academics</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">video_chat</span>
                            <h3>Projects</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">edit_calendar</span>
                            <h3>Documents</h3>
                          </a>


                          <a href="#">
                            <span class="material-icons-sharp">person_search</span>
                            <h3>Search Users</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">settings</span>
                            <h3>Settings</h3>
                          </a> 
                          
                          <!-- <a href="#">
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Participant</h3>
                          </a> -->
                        
                          <a class="last" href="login.html" target="_self">
                            <span class="material-icons-sharp">logout</span>
                            <h3>Logout</h3>
                          </a>
                      </div>
              </aside>
              <!-- End of Aside -->

    <main>

    <div class="title-sec">
      <h1>Vote Count</h1>
      <a href="dashboard.php" class ="home-btn"><button>Home</button></a>  
    </div>
       
    <div class="add-btn">
      <a href="candidates_operation/add.php"><button>Add User</button></a>
    </div>

        <div class="table-cont">
               <table class="users-t">
                          <thead>
                              <th>SN</th>
                              <th>Reg_No</th>
                              <th>Course</th>
                              <th>Level</th>
                              <th>President</th>
                              <th>D_President</th>                             
                              <th>Finance</th>
                              <th>Academics</th>
                              <th>Sports</th>                              
                              <th>Welfare</th>
                              <th>Vote_Date</th>    
                              <th>Operation</th>    
                          </thead>
                          <tbody>


                          <?php

                             $sql = "SELECT * from voted_users";
                               $result =mysqli_query($conn, $sql);
                               //, User_pass,,, , , , , 
                               while($row = mysqli_fetch_assoc($result)){
                                    $SN = $row['S_N'];
                                    $Reg_no = $row["Reg_no"];
                                    $course = $row['Course'];
                                    $L_study = $row["Study_level"];
                                    $president = $row ["President"];
                                    $deputy_president = $row ["Deputy_President"];
                                    $finance = $row ["Finance"];
                                    $academics = $row ["Academics"];
                                    $sports = $row ["Sports"];
                                    $welfare = $row ["Welfare"];
                                    $vote_date = $row ["Vote_Date"];


                                    echo '
                                        <tr>
                                            <td>'.$SN.'</td>
                                            <td>'. $Reg_no.'</td>
                                            <td>'.$course.'</td>
                                            <td>'.$L_study.'</td>
                                            <td>'.$president.'</td>
                                            <td>'.$deputy_president.'</td>
                                            <td>'.$finance.'</td>
                                            <td>'.$academics.'</td>
                                            <td>'.$sports.'</td>
                                            <td>'.$welfare.'</td>
                                            <td>'.$vote_date.'</td>
                                            <td class="operations">
                                              <a href="voter_operation/delete.php? deleteid='.$SN.'"><button class="delete">Delete</button></a>
                                           </td> 
                                        </tr>
                                    
                                    ';
                               }  
                             
                           ?>


                         </tbody>
                      </table>
              </div>     
      </main>                                     
  </div>
      <script src="Assets/Js/dashboard.js"></script> 
  </body>
</html>

<!-- 1:23:28 -->