<?php

// session_start();
// if(!isset($_SESSION['admin'])){
//   header('location: index.php');
// }

include('../databases/connect.php');
          $id = $_GET["updateid"];

          $sql ="SELECT * FROM `products` where SN = $id";  

          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $SN = $row['SN'];
          $P_name = $row['P_Name'];
          $Category = $row['Category'];
          $Price = $row['Price'];
          $Stock = $row['Stock'];
          $P_Image = $row['P_Image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidate Update</title>
  <link rel="stylesheet" href="../assets/css/p-update.css">
</head>
<body>
  <div class="container"> 
       

        <h1 class="title">Updating</h1>
        
    <div class="product">
        <img class="product-u-image" src="<?php echo $P_Image?>" alt="">
        <div class="p-details">
             <b class="user">Name: <span class="detail"><?php echo $P_name;?></span></b>
             <b class="user">Category: <span class="detail"><?php echo $Category;?></span></b>
        </div>
    </div>
        
     <a href="../products.php" class = "home-btn"><button>Back</button></a>  


    <!-- Form start -->
    <form action="" method="post">
  
            <!-- Inputs element start -->
            <div class="inputs">
                <!-- parent-1 -->
                  <div class="parent parent-1">
                          <!-- <div class="sn sect">
                              <label for="">SN</label>
                              <input type="text" name="sn" value="<?php echo$sn; ?>">      
                           </div> -->
                
                          
                            <div class="fn sect">
                                <label for="">Change Product Name</label>
                                <input type="text" name="p-name" value="<?php echo$P_name; ?>">                
                            </div>

                            <div class="ln sect">
                                <label for="">Change Category</label>
                                <input type="text" name="category" value="<?php echo$Category; ?>">
                            </div>
                   </div> 
                  
                <!-- parent-2 -->
                <div class="parent parent-2">
                      <div class="rn sect">
                          <label for="">Update Price</label>
                          <input type="text" name="price" value="<?php echo$Price ?>">                  
                      </div>


                      <div class="c sect">
                          <label for="">Change Product Image</label>
                          <input type="text" name="p-image" value="<?php echo$P_Image ?>"  placeholder="Paste new Product Link">                  
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


          $p_name = $_POST['p-name'];
          $category = $_POST['category']; 
          $Price = $_POST['price'];
          $image = $_POST['p-image'];
     

          

          $sql = "UPDATE products  set
           P_Name = '$p_name', category = '$category', Price = '$Price',
           P_Image = '$image' where SN = $id";
      

      try{
         mysqli_query($conn, $sql);  
           echo"<script> alert('Product updated Successfully')</script>";
       }catch(mysqli_sql_exception){
              echo"<script> alert('Could not Update Product')</script>";

       }
          
   }
      
   

?>