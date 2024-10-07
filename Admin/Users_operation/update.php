<?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}


include('../databases/connect.php');

          $id = $_GET["updateid"];

          $sql ="SELECT * FROM `users` where SN = $id";

          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $sn = $row['SN'];
          $f_name = $row['First_Name'];
          $l_name = $row['Last_Name'];
          $Phone = $row['Phone'];
          $Email = $row['Email'];
          $Address = $row['Street_Address'];
          $Country = $row['Country'];
          $Postal = $row['Postal'];
          $Pass = $row['Pass'];
          $reg_date = $row['Reg_Date']; 

 

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
       

        <h1 class="title">Updating</h1>
        <b class="user"><?php echo $f_name;?></b>
        <b class="user"><?php echo $l_name;?></b>
     <a href="../users.php" class = "home-btn"><button>Back</button></a>  


    <!-- Form start -->
    <form action="" method="post">
  
            <!-- Inputs element start -->
            <div class="inputs">
                <!-- parent-1 -->
                  <div class="parent parent-1">
                          <div class="sn sect">
                              <label for="">SN</label>
                              <input type="text" name="sn" value="<?php echo$sn; ?>">      
                           </div>
                
                          
                            <div class="fn sect">
                                <label for="">First_Name</label>
                                <input type="text" name="f-name" value="<?php echo$f_name; ?>">                
                            </div>

                            <div class="ln sect">
                                <label for="">Last_Name</label>
                                <input type="text" name="l-name" value="<?php echo$l_name; ?>">
                            </div>
                   </div> 
                  
                <!-- parent-2 -->
                <div class="parent parent-2">
                      <div class="rn sect">
                          <label for="">Phone</label>
                          <input type="text" name="Email" value="<?php echo$Email; ?>">                  
                      </div>

                      <div class="ls sect">
                          <label for="">Street_Address</label> 
                          <input type="text" name="Address" value="<?php echo$Address; ?>">
                    </div>

                      <div class="c sect">
                          <label for="">Country</label>
                          <input type="text" name="Country" value="<?php echo$Country; ?>">                  
                      </div>


                </div> 

                <!-- parent-3 -->
                <div class="parent parent-3">

                      <div class="ys sect">
                          <label for="">Postal Address</label>
                          <input type="text" name="Postal" value="<?php echo$Postal; ?>" >
                      </div>


                    <div class="up sect">
                          <label for="">User_pass</label>
                          <input type="text" name="user-pass" value="<?php echo$Pass; ?>">                
                    </div>

                </div>          
                
            </div>
            <!-- Inputs element End -->
          
            <div class="update sect">
            <input type="submit" name="update" value="Update">
            </div>       
    </form>
    <!-- Form End -->
  </div>
</body>
</html>


<?php

if(isset($_POST['update'])){

          $Sn = $_POST['sn'];
          $First_name = $_POST['f-name'];
          $Last_name = $_POST['l-name']; 
          $Email = $_POST['Email'];
          $Level_study = $_POST['Email'];
          $Country = $_POST['Country'];
          $Postal = $_POST['Postal'];
          $Pass = $_POST['user-pass'];

          



          $sql = "UPDATE users  set SN = $sn,
           First_Name = '$First_name', Last_Name = '$Last_name', Email = '$Email',
           Street_Address = '$Address', Country = '$Country', Postal = '$Postal',
              Pass = '$Pass'  where SN = $id";
      

      try{
           mysqli_query($conn, $sql);
           echo"<script> alert('User updated Successfully')</script>";
       }catch(mysqli_sql_exception){
              echo"<script> alert('Duplicate Entry')</script>";

       }
          
   }
      
   

?>