 <?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}

include('databases/connect.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Stores Admin Panel</title>
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


                          <a href="#">
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
      <h1>Registered Users</h1>
      <a href="dashboard.php" class ="home-btn"><button>Home</button></a>  
    </div>
       
    <div class="add-btn">
      <a href="users_operation/add.php"><button>Add User</button></a>
    </div>

     <!-- Search el start -->
    <div class="search-el">
          <div class="sort">
            <label for="">Show</label>
               <select name="" id="">
                    <option>10</option>
                    <option>25</option>
                    <option >50</option>
                    <option>100</option>
                  </select>
                  <label for="">Entries</label>
            </div>

              <div class="search-bar">
                <label for="">Search:</label>
                <input type="search">
             </div>
     </div>
     <!-- Search El end -->

        <div class="table-cont">
               <table class="users-t">
                          <thead>
                              <th>SN</th>
                              <th>First_Name</th>
                              <th>Last_Name</th>
                              <th>Phone</th>                             
                              <th>Email</th>
                              <th>Street_Address</th>
                              <th>Country</th>
                              <th>Postal</th>
                              <th>Pass</th>
                              <th>Reg_Date</th>
                              <th>Operation</th>
                              
                          </thead>
                   <tbody>


                          <?php

                             $sql = "SELECT * from users";
                               $result =mysqli_query($conn, $sql);

                               while($row = mysqli_fetch_assoc($result)){

                                    $SN = $row['SN'];
                                    $F_name = $row['First_Name'];
                                    $L_name = $row['Last_Name'];
                                    $Phone = $row['Phone'];
                                    $Email = $row['Email'];
                                    $saddress = $row['Street_Address'];
                                    $country = $row['Country'];
                                    $posta = $row['Postal'];
                                    $U_pass = $row['Pass'];
                                    $Reg_date = $row['Reg_Date'];
      
                      
                                    echo '
                                        <tr>
                                            <td>'.$SN.'</td>
                                            <td>'.$F_name.'</td>
                                            <td>'.$L_name.'</td>
                                            <td>'.$Phone.'</td>
                                            <td>'.$Email.'</td>
                                            <td>'.$saddress.'</td>
                                            <td>'.$country.'</td>
                                            <td>'.$posta.'</td>
                                            <td>'.$U_pass.'</td>
                                            <td class="reg-d">'.$Reg_date.'</td>  
                                            <td class="operations">
                                                <a href="users_operation/update.php? updateid='.$SN.'" class="update-btn"><button class="update">Update</button></a>
                                                <a href="users_operation/delete.php? deleteid='.$SN.'"><button class="delete">Delete</button></a>
                                            </td>                                      
                                        </tr>
                                    
                                    ';
                               }  
                             
                           ?>


                         </tbody>
                      </table>
              </div>   
             
      <!-- Table footer start -->
      <div class="table-footer">
            <div class="tf-left">
              <?php

                $sql = "SELECT * from users";
                $result =mysqli_query($conn, $sql);
                $number_results = mysqli_num_rows($result);

              echo'
                   <p>Showing 0 to '.$number_results.' of '.$number_results.' Entries</p>
                 ';
              ?>
               
            </div>

            <div class="tf-right">
                <label for=""><button class="previous">Previous</button></label>
                <button class="num">1</button>
                <label for=""><button class="next">Next</button></label>
            </div>
      </div>
      <!-- Table footer end -->


      
  
      </main>                                     
  </div>
      <script src="Assets/Js/dashboard.js"></script> 
      <script src="Assets/Js/users.js"></script> 
  </body>
</html>

