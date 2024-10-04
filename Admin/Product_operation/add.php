<?php

// session_start();
// if(!isset($_SESSION['admin'])){
//   header('location: index.php');
// }

include ('../databases/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Update</title>
  <link rel="stylesheet" href="../assets/css/p-update.css">
</head>
<body>
  <div class="container"> 
       

           <h1 class="title">Adding Product</h1>

     <a href="../products.php" class = "home-btn"><button>Back</button></a>  


    <!-- Form start -->
    <form action="" method="post">
  
            <!-- Inputs element start -->
            <div class="inputs">
                <!-- parent-1 -->
                  <div class="parent parent-1">
       
                
                            <div class="fn sect">
                                <label for="">Product_Name</label>
                                <input type="text" placeholder="Enter Product Name" name="p-name" >                
                            </div>

                            <div class="ln sect">
                                <label for="">Category</label>
                                <input type="text" placeholder="Enter Product Category" name="category" >
                            </div>
                   </div> 
                  
                <!-- parent-2 -->
                <div class="parent parent-2">
                      <div class="rn sect">
                          <label for="">Price</label>
                          <input type="number" placeholder="Enter Price" name="price">                  
                      </div>

                      <div class="ls sect">
                          <label for="">Image Link</label> 
                          <input type="url" placeholder="Paste image link" name="image">
        
                    </div>

                </div> 
            </div>
            <!-- Inputs element End -->
          
            <div class="update sect">
            <input type="submit" name="add" value="Add" class="add-btn">
            </div>       
    </form>
    <!-- Form End -->
  </div>
</body>
</html>


<?php

if(isset($_POST['add'])){


          $p_name = $_POST['p-name'];
          $category = $_POST['category']; 
          $price = $_POST['price'];
          $image = $_POST['image'];




          //Insert into Products table
          try{


             $sql = "INSERT INTO products (P_Name,Category, Price,P_Image)
                      VALUES('$p_name', '$category', '$price', '$image')";

                      mysqli_query($conn, $sql);
                      echo"<script> alert('Product Added Successfully')</script>";
          }catch(mysqli_sql_exception){
            echo"<script> alert('Could Not Add the Product kindly check your Entries')</script>";
          }
        
                  
}
      
   
?>