<?php

// session_start();
// if(!isset($_SESSION['admin'])){
//   header('location: index.php');
// }

include('databases/connect.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Stores: Admin Panel</title>
    <link rel="stylesheet" href="Assets/Css/dashboard.css">
    <link rel="stylesheet" href="Assets/Css/analytics.css">
    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    
</head>
<body>
    <div class="container">       
              <!-- Start of Top -->
                <div class="top top-main">                      
                            <button id="menu-btn">
                            <!-- <span class="material-icons-sharp">menu</span> -->
                            </button>

                            <div class="top-hero">
                              <div class="logo logo-image">
                              <!-- The logo is here -->
                              </div>
                              <h1>Zenith Stores</h1>
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

                                  <p>Hello, 
                            <?php

                          $sql = "SELECT * FROM admins";
                          $result = mysqli_query($conn, $sql);
                          $admin = mysqli_fetch_assoc($result);
                          $admin_name = $admin["First_Name"];

                          echo '
                          
                          <b>'.$admin_name.'</b>
                          
                          ';
                        ?>                                 
                                </p>
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
                            <!-- <span class="material-icons-sharp">close</span> -->
                        </div>   
                      </div>

                      <div class="sidebar">
            
                          <a href="users.php" class="active">
                            <span class="material-icons-sharp">people_alt</span>
                            <h3>Users</h3>
                          </a>

                          <a href="candidates.php">
                            <span class="material-icons-sharp">how_to_vote</span>
                            <h3>Candidates</h3>
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
                            <h3>Insights</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">video_chat</span>
                            <h3>Projects</h3>
                          </a>

                          <!-- <a href="#">
                            <span class="material-icons-sharp">edit_calendar</span>
                            <h3>Documents</h3>
                          </a> -->


                          <a href="#">
                            <span class="material-icons-sharp">person_search</span>
                            <h3>Search Users</h3>
                          </a>

                          <a href="#">
                            <span class="material-icons-sharp">settings</span>
                            <h3>Settings</h3>
                          </a> 
                          
                          <a href="users_operation/add.php">
                            <span class="material-icons-sharp">add</span>
                            <h3>Add User</h3>
                          </a>
                        
                          <a class="last" href="settings/logout.php" target="_self">
                            <span class="material-icons-sharp">logout</span>
                            <h3>Logout</h3>
                          </a>
                      </div>
              </aside>
              <!-- End of Aside -->

      <main>

      <!-- Display Aside -->
      <div class="show-aside-el">
          <span class="material-icons-sharp" id="close-aside">close</span>
          <span class="material-icons-sharp" id="display-aside">grid_view</span>  
      </div>
      <!-- Display Aside -->

      <div class="head-sec">
        <h1>User analytics</h1>
      </div>

 
      <div class="insights"> 
                 <div class="sales">
                  <span class="material-icons-sharp">analytics</span>
                  <div class="middle">
                     <div class="left">
                            <h3>Total Users</h3>

                    <!-- Total users start  -->
                                <?php
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($conn, $sql);
                                $total_users = mysqli_num_rows($result);

                                echo'
                                        <h1>'.$total_users.'</h1>
                                
                                  ';
                                ?>
                    <!-- Total users end  -->  

                     </div>
                     <div class="progress">
                       <svg>
                           <circle cx='38' cy='36'  r='36'></circle>
                       </svg>
                       <div class="number">

                      <!-- User Percentage Calculation start -->
                                  <?php
                                      $sql = "SELECT * FROM users";
                                      $result = mysqli_query($conn, $sql);
                                      $total_users = mysqli_num_rows($result);
                                  
                                      $school_enrolment = 1000;

                                      $Total_users_percentage = ceil((($total_users/$school_enrolment) * 100)) ;


                                      echo'
                                              <p>'.$Total_users_percentage.'%</p>
                                      
                                        ';
                                ?>
                        <!-- User Percentage Calculation end -->
      
                       </div>
                     </div>
                  </div>
                  <small class="text-muted">last 24hrs</small>
                </div>

                <!-- END OF FEE -->

               <div class="income">
                  <span class="material-icons-sharp">bar_chart</span>
                  <div class="middle">
                     <div class="left">
                      <h3>Total Sales</h3>

                    <!--Total Candidates start-->
                    <?php
                        $sql = "SELECT * FROM candidates";
                        $result = mysqli_query($conn, $sql);
                        $total_candidates = mysqli_num_rows($result);
                    

                        echo'
                                <h1>'.$total_candidates.'</h1>
                        
                          ';
                        ?>
                    <!-- Total Candidates end -->

                     </div>
                     <div class="progress">
                       <svg>
                           <circle cx='38' cy='36' r='36'></circle>
                       </svg>
                       <div class="number">

                        <!--Candidate Percentage Calculation start -->
                              <?php
                                  $sql = "SELECT * FROM products";
                                  $result = mysqli_query($conn, $sql);
                                  $total_candidates = mysqli_num_rows($result);
                              
                                  $required_candidates = 50;

                                  $Total_candidates_percentage = ceil((($total_candidates/$required_candidates) * 100)) ;

                                  echo'
                                          <p>'.$Total_candidates_percentage.'%</p>
                                  
                                    ';
                            ?>
                        <!-- Candidate Percentage Calculation end -->

                       </div>
                     </div>
                  </div>
                  <small class="text-muted">last 24hrs</small>
                </div>

                <!-- END OF ACADEMICS -->

                <div class="expenses">
                  <span class="material-icons-sharp">stacked_line_chart</span>
                  <div class="middle">
                     <div class="left">
                      <h3>Total Voted Users</h3>
                      
            <?php
              $sql = "SELECT * FROM voted_users";
              $result = mysqli_query($conn, $sql);
              $total_voted_users = mysqli_num_rows($result);
           

               echo'
                       <h1>'.$total_voted_users.'</h1>
               
                 ';
               ?>
                     </div>
                     <div class="progress">
                       <svg>
                           <circle cx='38' cy='36' r='36'></circle>
                       </svg>
                       <div class="number">

                    <!--Candidate Percentage Calculation start -->
                         <?php
                                  $sql1 = "SELECT * FROM users";
                                  $sql2 = "SELECT * FROM voted_users";

                                  $result1 = mysqli_query($conn, $sql1);
                                  $result2 = mysqli_query($conn, $sql2);

                                  $total_users = mysqli_num_rows($result1);
                                  $total_voted_users = mysqli_num_rows($result2);

                                  $Total_voted_users_percentage = ceil((($total_voted_users/$total_users) * 100)) ;

                                  echo'
                                          <p>'.$Total_voted_users_percentage.'%</p>
                                  
                                    ';
                            ?>
                    <!-- Candidate Percentage Calculation end -->
                       </div>
                     </div>
                   </div>
                  <small class="text-muted">last 24hrs</small>
                </div>
                <!-- -------- End of Expenses-------- -->
            </div>   
            
       
     
                  
      </main>                                     
  </div>
      <script src="Assets/Js/dashb.js"></script> 
  </body>
</html>

<!-- 1:23:28 -->