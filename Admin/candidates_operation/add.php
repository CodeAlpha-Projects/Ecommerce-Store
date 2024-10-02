<?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}

include ('../databases/users_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidate Update</title>
  <link rel="stylesheet" href="../assets/css/update.css">
</head>
<body>
  <div class="container"> 
       

           <h1 class="title">Adding User</h1>

     <a href="../candidates.php" class = "home-btn"><button>Back</button></a>  


    <!-- Form start -->
    <form action="" method="post">
  
            <!-- Inputs element start -->
            <div class="inputs">
                <!-- parent-1 -->
                  <div class="parent parent-1">
                          <div class="sn sect">
                              <label for="">SN</label>
                              <input type="text" name="sn">      
                           </div>
                
                          
                            <div class="fn sect">
                                <label for="">First_Name</label>
                                <input type="text" name="f-name" >                
                            </div>

                            <div class="ln sect">
                                <label for="">Last_Name</label>
                                <input type="text" name="l-name" >
                            </div>
                   </div> 
                  
                <!-- parent-2 -->
                <div class="parent parent-2">
                      <div class="rn sect">
                          <label for="">Reg_No</label>
                          <input type="text" name="reg-no">                  
                      </div>

                      <div class="ls sect">
                          <label for="">Level_Study</label> 
                          <input list="level" name="l-study">
                                    <datalist id="level">
                                            <option value="Degree">
                                            <option value="Diploma">
                                            <option value="Certificate">
                                            <option value="Artisan">
                                        </datalist>
                    </div>

                      <div class="c sect">
                          <label for="">Course</label>
                          <input type="text" name="course">                  
                      </div>


                </div> 

                <!-- parent-3 -->
                <div class="parent parent-3">

                      <div class="ys sect">
                          <label for="">Year_Study</label>
                          <input list="year" name="y-study">
                                      <datalist id="year">
                                            <option value="1st Year">
                                            <option value="2nd Year">
                                            <option value="3rd Year">
                                            <option value="4th Year">
                                      </datalist>
                      </div>

                    <div class="sm sect">
                          <label for="">Grade</label>
                          <input list="grade" name="grade">
                                  <datalist id="grade">
                                      <option value="A">
                                      <option value="B">
                                      <option value="C">
                                      <option value="D">
                                  </datalist> 
                      </div>

                     <div class="up sect">
                      <label for="">Position</label>                       
                      <input list="position" name="position" placeholder="Position You're vying" required>
                                <datalist id="position">
                                        <option value="President">
                                        <option value="Deputy President">
                                        <option value="Finance">
                                        <option value="Academics">
                                        <option value="Sports">
                                        <option value="Welfare">
                                    </datalist>
                      
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

          $Sn = $_POST['sn'];
          $First_name = $_POST['f-name'];
          $Last_name = $_POST['l-name']; 
          $Reg_no = $_POST['reg-no'];
          $Level_study = $_POST['l-study'];
          $Year_study = $_POST['y-study'];
          $Course = $_POST['course'];          
          $user_position = $_POST['position'];
          $user_grade = $_POST['grade'];

          //Check from the main Database
      $check_user = "SELECT * FROM users where  Registration_No = '$Reg_no'";

      $result = mysqli_query($conn, $check_user);
      $row = mysqli_num_rows($result);

              if($row>0){

                                    //Insert into candidates

                            $sql = "INSERT INTO candidates (SN,First_Name, Last_Name, Registration_No, Level_Study, Course, Year_Study, Position, Grade)
                                VALUES($Sn, '$First_name', '$Last_name', '$Reg_no', '$Level_study', '$Course', '$Year_study' ,'$user_position', '$user_grade')
                              ";
                          
                                  try{
                                      mysqli_query($conn, $sql);
                                      echo"<script> alert('User Added Successfully')</script>";
                                  }catch(mysqli_sql_exception){
                                          echo"<script> alert('User Already Exist')</script>";
                                  }

                    }else{

                      echo"<script> alert('The user is Not Registered!')</script>";

                    }



                
                  
   }
      
   
?>