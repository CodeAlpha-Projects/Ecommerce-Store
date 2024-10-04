<?php

session_start();
if(!isset($_SESSION['admin'])){
  header('location: index.php');
}


include('../databases/users_db.php');

          $id = $_GET["updateid"];

          $sql ="SELECT * FROM `users` where SN = $id";

          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $sn = $row['SN'];
          $f_name = $row['First_Name'];
          $l_name = $row['Last_Name'];
          $reg_no = $row['Registration_No'];
          $l_study = $row['Level_Study'];
          $course = $row['Course'];
          $y_study = $row['Year_Study'];
          $s_email = $row['Student_Email'];
          $u_pass = $row['User_Pass'];
          $reg_date = $row['Reg_Date']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="../assets/css/updates.css">
</head>
<body>
  <div class="container"> 
       

           <h1 class="title">Updating</h1>
        <b class="user"><?php echo $f_name;?></b>
        <b class="user"><?php echo $reg_no;?></b>
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
                          <label for="">Reg_No</label>
                          <input type="text" name="reg-no" value="<?php echo$reg_no; ?>">                  
                      </div>

                      <div class="ls sect">
                          <label for="">Level_Study</label> 
                          <input list="level" name="l-study" value="<?php echo$l_study; ?>">
                                    <datalist id="level">
                                            <option value="Degree">
                                            <option value="Diploma">
                                            <option value="Certificate">
                                            <option value="Artisan">
                                        </datalist>
                    </div>

                      <div class="c sect">
                          <label for="">Course</label>
                          <input type="text" name="course" value="<?php echo$course; ?>">                  
                      </div>


                </div> 

                <!-- parent-3 -->
                <div class="parent parent-3">

                      <div class="ys sect">
                          <label for="">Year_Study</label>
                          <input list="year" name="y-study" value="<?php echo$y_study; ?>" >
                                      <datalist id="year">
                                            <option value="1st Year">
                                            <option value="2nd Year">
                                            <option value="3rd Year">
                                            <option value="4th Year">
                                      </datalist>
                      </div>

                    <div class="sm sect">
                          <label for="">Student_Email</label>
                          <input type="text" name="s-email" value="<?php echo$s_email; ?>">   
                    </div>

                    <div class="up sect">
                          <label for="">User_pass</label>
                          <input type="text" name="user-pass" value="<?php echo$u_pass; ?>">                
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
          $Reg_no = $_POST['reg-no'];
          $Level_study = $_POST['l-study'];
          $Year_study = $_POST['y-study'];
          $Course = $_POST['course'];
          $Student_email = $_POST['s-email'];
          $User_pass = $_POST['user-pass'];
          


          $sql = "UPDATE users  set SN = $sn,
           First_Name = '$First_name', Last_Name = '$Last_name', Registration_No = '$Reg_no',
           Level_Study = '$Level_study', Course = '$Course', Year_Study = '$Year_study',
            Student_Email = '$Student_email', User_Pass = '$User_pass'  where SN = $id";
      

      try{
           mysqli_query($conn, $sql);
           echo"<script> alert('User updated Successfully')</script>";
       }catch(mysqli_sql_exception){
              echo"<script> alert('Duplicate Entry')</script>";

       }
          
   }
      
   

?>