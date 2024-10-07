<?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}

include('../databases/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="../assets/css/p-update.css">
</head>
<body>
  <div class="container"> 
       

           <h1 class="title">Adding User</h1>
     <a href="../users.php" class = "home-btn"><button>Back</button></a>  


    <!-- Form start -->
    <form action="" method="post">
  
            <!-- Inputs element start -->
            <div class="inputs">
                <!-- parent-1 -->
                  <div class="parent parent-1">        
                            <div class="fn sect">
                                <label for="">First_Name</label>
                                <input type="text" name="f-name" placeholder="First Name" required>                
                            </div>

                            <div class="ln sect">
                                <label for="">Last_Name</label>
                                <input type="text" name="l-name" placeholder="Last Name"  required>
                            </div>
                   </div> 
                  
                <!-- parent-2 -->
                <div class="parent parent-2">
                      <div class="rn sect">
                          <label for="Phone">Phone</label>
                          <input type="text" name="phone" placeholder="Phone.."  required>                  
                      </div>

                      <div class="ls sect">
                          <label for="Email">Email</label> 
                          <input type="email" name="email" placeholder="Email"  required>
                    </div>

                      <div class="c sect">
                          <label for="">Street_Address</label>
                          <input type="text" name="address" placeholder="Street_Address"  required>                  
                      </div>


                </div> 

                <!-- parent-3 -->
                <div class="parent parent-3">

                      <div class="ys sect">
                          <label for="">Country</label>
                          <input type="text" name="country" placeholder="country/state"  required>
                      </div>

                    <div class="sm sect">
                          <label for="">Postal</label>
                          <input type="text" name="posta" placeholder="Postal Address"  required>   
                    </div>

                    <div class="up sect">
                          <label for="">User_pass</label>
                          <input type="password" name="pass" placeholder="User Pass"  required>                
                    </div>

                </div>          
                
            </div>
            <!-- Inputs element End -->
          
            <div class="update sect">
            <input type="submit" name="add" value="Add">
            </div>       
    </form>
    <!-- Form End -->
  </div>
</body>
</html>



<?php

if(isset($_POST['add'])){

          $First_name = $_POST['f-name'];
          $Last_name = $_POST['l-name']; 
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $country = $_POST['country'];
          $posta = $_POST['posta'];
          $User_pass = $_POST['pass'];
          


          $sql = "INSERT INTO users (First_Name,Last_Name,  Phone,  Email, Street_Address, Country, Postal, Pass)
          values ('$First_name','$Last_name','$phone','$email', '$address','$country','$posta', '$User_pass')";
      

      try{
           mysqli_query($conn, $sql);
           echo"<script> alert('User Added Successfully')</script>";
       }catch(mysqli_sql_exception){
              echo"<script> alert('User Already Exist')</script>";

       }
          
   }
      
   

?>