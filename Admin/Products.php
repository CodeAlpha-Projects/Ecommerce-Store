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
                              <!-- <div class="logo">
                              </div> -->
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
      <h1>Your Stock</h1>
      <a href="dashboard.php" class ="home-btn"><button>Home</button></a>  
    </div>

    <div class="add-btn">
      <a href="product_operation/add.php"><button>Add Product</button></a>
    </div>



        <div class="table-cont">
               <table class="users-t">
                          <thead>
                              <th>SN</th>
                              <th>Product_Name</th>
                              <th>Category</th>
                              <th>Price</th>
                              <th>Stock-Size</th>                             
                              <th>Product Image</th>
                              <th>Operation</th>    
                          </thead>
                          <tbody>

                          <?php
                             $sql = "SELECT * from products";
                               $result =mysqli_query($conn, $sql);
                               while($row = mysqli_fetch_assoc($result)){
                                    $SN = $row['SN'];
                                    $P_name = $row['P_Name'];
                                    $Category = $row['Category'];
                                    $Price = $row['Price'];
                                    $Stock = $row['Stock'];
                                    $P_Image = $row['P_Image'];
                                  echo '
                                        <tr>
                                            <td>'.$SN.'</td>
                                            <td>'.$P_name.'</td>
                                            <td>'.$Category.'</td>
                                            <td>$ '.$Price.'</td>
                                            <td>'.$Stock.'</td>
                                            <td><img class="display-img" src="'.$P_Image.'"></td>
                                            <td class="operations">
                                                <a href="product_operation/update.php? updateid='.$SN.'"><button class="update">Update</button></a>
                                                <a href="product_operation/delete.php? deleteid='.$SN.'"><button class="delete">Delete</button></a>
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


   <style>
     .display-img{
      width: 100px;
       height:auto;
     }
  </style>
      <script src="Assets/Js/dashboard.js"></script> 
  </body>
</html>

<!-- 1:23:28 -->