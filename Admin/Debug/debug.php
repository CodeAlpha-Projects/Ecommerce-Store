<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 <form action="" method="get">
      <select name="limit">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>  
 </form>




</body>
</html>

<?php


  include('../databases/users_db.php');
 $sql ="SELECT * FROM users";

  $result = mysqli_query($conn, $sql);
  $results_per_page = 10;
  $number_of_results = mysqli_num_rows($result);

  $number_of_pages = $number_of_results / $results_per_page;

  echo $number_of_pages;


  echo $number_of_results;

  while(  $row = mysqli_fetch_assoc($result)){
    echo " </br> {$row['First_Name']} </br>" ;
  }

?>