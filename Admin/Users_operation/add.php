<?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}

include('../databases/users_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="../assets/css/update.css">
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
                          <label for="">Reg_No</label>
                          <input type="text" name="reg-no" placeholder="Registration No"  required>                  
                      </div>

                      <div class="ls sect">
                          <label for="">Level_Study</label> 
                          <input list="level" name="l-study" placeholder="Level of Study"  required>
                                    <datalist id="level">
                                            <option value="Degree">
                                            <option value="Diploma">
                                            <option value="Certificate">
                                            <option value="Artisan">
                                        </datalist>
                    </div>

                      <div class="c sect">
                          <label for="">Course</label>
                          <input type="text" name="course" placeholder="Student's Course"  required>                  
                      </div>


                </div> 

                <!-- parent-3 -->
                <div class="parent parent-3">

                      <div class="ys sect">
                          <label for="">Year_Study</label>
                          <input list="year" name="y-study" placeholder="Year of Study"  required>
                                      <datalist id="year">
                                            <option value="1st Year">
                                            <option value="2nd Year">
                                            <option value="3rd Year">
                                            <option value="4th Year">
                                      </datalist>
                      </div>

                    <div class="sm sect">
                          <label for="">Student_Email</label>
                          <input type="email" name="s-email" placeholder="Student Email"  required>   
                    </div>

                    <div class="up sect">
                          <label for="">User_pass</label>
                          <input type="password" name="user-pass" placeholder="User Pass"  required>                
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
          $Reg_no = $_POST['reg-no'];
          $Level_study = $_POST['l-study'];
          $Year_study = $_POST['y-study'];
          $Course = $_POST['course'];
          $Student_email = $_POST['s-email'];
          $User_pass = $_POST['user-pass'];
          


          $sql = "INSERT INTO users (First_Name,Last_Name, Registration_No, Level_Study, Course, Year_Study, Student_Email, User_Pass)
          values ('$First_name','$Last_name','$Reg_no','$Level_study', '$Course','$Year_study','$Student_email', '$User_pass')";
      

      try{
           mysqli_query($conn, $sql);
           echo"<script> alert('User Added Successfully')</script>";
       }catch(mysqli_sql_exception){
              echo"<script> alert('User Already Exist')</script>";

       }
          
   }
      
   

?>