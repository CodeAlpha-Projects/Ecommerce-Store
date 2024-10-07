<?php
include('databases/connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Login</title>
  <link rel="stylesheet" href="Assets/Css/styled.css">
</head>
<body>
  <div class="container">
      <header>
        <h1>Zenith Store</h1>
        <p>Admin Panel</p>
      </header>

      <div class="circle1"></div>
      <div class="circle2"></div>
      <div class="circle3"></div>
      <div class="circle4"></div>

    <div class="form-el">
        <form action="" method="POST">
              <label for="">Username</label>
              <input class="username" type="email" placeholder="email" name="user" required>


              <label for="">Password</label>
              <input class="password" type="password" placeholder="password"  name = "pass" required>

              <div class="show-pass">
                <input type="checkbox" id="show">
                <label for="">Show password</label>
              </div>

              <input class="submit" type="submit" value="Login" name="Login">
              <p>Don't remember password? <a href=""> Reset</a></p>
              <p id="error"></p>
        </form>

    </div>
  </div>
  <script type="text/javascript" src="Assets/Js/script.js"></script>
</body>
</html>

<?php
   
   if(isset($_POST['Login'])){

        $user = $_POST['user'];
        $pass = $_POST["pass"];

        $sql = "SELECT * from admins where Email = '$user' and Pass = '$pass'";

           $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);

             if($row >0){
                    header('location: dashboard.php');
                    session_start();
                    $_SESSION['admin'] = $user;
                  }else{         
                 echo'<script>alert("Invalid Credentials")</script>';
                  }

         }


?>