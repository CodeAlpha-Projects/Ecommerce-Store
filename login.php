<?php
 include('database/connect.php');

 if(isset($_POST['submit'])){

     $email =$_POST['email'];
     $pass = $_POST['pass'];
      $sql = "SELECT Email, Pass, SN FROM users where Email = '$email'";
      $result = mysqli_query($conn,$sql);

      $row = mysqli_num_rows($result);
       
      if($row>0){
       $getuser = mysqli_fetch_assoc($result);
        $user_pass = $getuser['Pass'];
        $id = $getuser['SN'];

          // Check password
          if($pass != $user_pass){
          echo"
          <script>
          alert('Incorrect Password');
          </script>
          ";
          }else{

            // redirect to homepage after authentication
              header('location: index.php?uid='.$id.'');
              session_start();
              $_SESSION['user'] = $email;

           }

        //if no user is found   
       }else{
       echo"
          <script>
          alert('No user Found, Kindly register');
          </script>
          ";

      }





 }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Stores Login Page</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
   
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
 <h1>Login To Continue</h1>
<label for="">Email</label>
<input type="text" class="text-f" placeholder="Email" name="email">

<label for="">Password</label>
<input type="text" class="text-f" placeholder="Password" name="pass">

   <input type="submit" class='submit' name="submit" value="Login">
  <p>Don't Have account Yet?<a href="register.php"> Register</a></p>
  <p>Forgot Password <a href="#">Reset</a></p>
</form>
</body>
</html>

