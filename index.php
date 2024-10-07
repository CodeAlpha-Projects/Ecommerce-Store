<?php
include('database/connect.php');


    
// Add to cart
 if(isset($_GET["addid"])){

        // redict user to login if not yet
        session_start();
        if(!isset($_SESSION['user'])){
        header('location: login.php');
        }



      $item = $_GET['addid'];

           $Product ="SELECT * FROM Products where SN = $item";
           $result = mysqli_query($conn, $Product);
           $common = mysqli_fetch_assoc($result);
                       $Name = $common['P_Name'];
                       $Price = $common['Price'];
                       $Image = $common['P_Image'];
               

                    try{

                       $Update_Cart = "INSERT INTO cart(Product_Name,Price,P_Image) 
                           VALUES('$Name', $Price,'$Image')";         
                           $result = mysqli_query($conn,$Update_Cart); 


                   //Alert and redirect to homepage after successfull addition to cart
                        echo"
                           <script>
                               alert('Product Added Successfully')
                               window.location ='index.php';
                           </script>
                           
                           ";

                    } catch(mysqli_sql_exception){

                   //Alert and redirect to homepage after unsuccessfull addition to cart
                           echo"<script>
                               alert('There Was an Error!')
                               window.location ='index.php';
                           </script>";

                    }
       
            
         }
                   

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Stores</title>
    <link rel="stylesheet" href="assets/css/styles.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body>
    <section class=" top-txt ">
            <div class="head container ">
                <div class="head-txt ">
                    <p>Free shipping, 30-day return or refund guarantee.</p>
                </div>
                <div class="sing_in_up ">

                    <a href="# ">SIGN IN</a>
                    <a href="# ">SIGN UP</a>
                </div>
            </div>
        </section>
        <nav class="navbar">
            <div class="navbar-container">
                <input type="checkbox" name="" id="checkbox">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sellers">Shop</a></li>
                    <li><a href="#news">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li onclick="window.location='cart.php'"><button type="button" class="cart-btn">Cart
                     <?php
                      
                      $value = "SELECT * FROM cart";

                      $result = mysqli_query($conn, $value);

                      $items = mysqli_num_rows($result);

                      echo'
                       <span>('.$items.')</span>
                      ';
                    ?>

                    </button></li>
                    
                </ul>
                <div class="logo">
                    <h2>Zenith Stores</h2>
                    <!-- <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt=""> -->
                </div>
            </div>
 </nav>



<section id="home">
            <div class="home_page ">
                <div class="home_img ">
                    <img src="https://i.postimg.cc/t403yfn9/home2.jpg" alt="img ">
                </div>
                <div class="home_txt ">
                    <p class="collection ">SUMMER COLLECTION</p>
                    <h2>FALL - WINTER<br>Collection 2024</h2>
                    <div class="home_label ">
                        <p>A specialist label creating luxury essentials. Ethically crafted<br>with an unwavering commitment to exceptional quality.</p>
                    </div>
                    <button><a href="#sellers">SHOP NOW</a><i class='bx bx-right-arrow-alt'></i></button>
                    <div class="home_social_icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="collection">
            <div class="collections container">
                <div class="content">
                    <img src="https://i.postimg.cc/Xqmwr12c/clothing.webp" alt="img" />
                    <div class="img-content">
                        <p>Clothing Collections</p>
                        <button><a href="#sellers">SHOP NOW</a></button>
                    </div>
                </div>
                <div class="content2">
                    <img src="https://i.postimg.cc/8CmBZH5N/shoes.webp" alt="img" />
                    <div class="img-content2">
                        <p>Shoes Spring</p>
                        <button><a href="#sellers">SHOP NOW</a></button>
                    </div>
                </div>
                <div class="content3">
                    <img src="https://i.postimg.cc/MHv7KJYp/access.webp" alt="img" />
                    <div class="img-content3">
                        <p>Accessories</p>
                        <button><a href="#sellers">SHOP NOW</a></button>
                    </div>
                </div>
            </div>
        </section>



  <section id="sellers">
     <div class="seller container">
        <h2>Top Sales</h2>
    <div class="best-seller">

      <?php

            $get_Product ="SELECT * FROM Products LIMIT 4";
            $feed = mysqli_query($conn, $get_Product);
            while($row = mysqli_fetch_assoc($feed)){
            
                $Id = $row['SN'];
                $P_Name = $row['P_Name'];
                $P_Price = $row['Price'];
                $Stock = $row['Stock'];
                $P_Image = $row['P_Image'];


                  echo'
                    <div class="best-p1">
                        <img src="'.$P_Image.'" alt="img">
                        <div class="best-p1-txt">
                            <div class="name-of-p">
                                <p>'.$P_Name.'</p>
                            </div>
                            <div class="rating">
                                <i class="bx bxs-star"> </i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <div class="price">
                                &dollar;'.$P_Price.'
                                <div class="colors">
                                    <i class="bx bxs-circle red"></i>
                                    <i class="bx bxs-circle blue"></i>
                                    <i class="bx bxs-circle white"></i>
                                </div>
                            </div>
                            <div class="buy-now">
                                <button><a  name="add-cart" href="index.php?addid='.$Id.'">Add to Cart</a></button>
                            </div>
                        </div>
                    </div>
                ';

           }
    ?>
     </div>
    </div>


   <div class="seller container">
                <h2>New Arrivals</h2>
                <div class="best-seller">

             <?php
                $get_Product ="SELECT * FROM Products ORDER BY Category LIMIT 4";
                    $feed = mysqli_query($conn, $get_Product);
                        while($row = mysqli_fetch_assoc($feed)){

                            $Id = $row['SN'];
                            $P_Name = $row['P_Name'];
                            $P_Price = $row['Price'];
                            $Stock = $row['Stock'];
                            $P_Image = $row['P_Image'];


                            echo'
                                <div class="best-p1">
                                    <img src="'.$P_Image.'" alt="img">
                                    <div class="best-p1-txt">
                                        <div class="name-of-p">
                                            <p>'.$P_Name.'</p>
                                        </div>
                                        <div class="rating">
                                            <i class="bx bxs-star"> </i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bx-star"></i>
                                            <i class="bx bx-star"></i>
                                        </div>
                                        <div class="price">
                                            &dollar;'.$P_Price.'
                                            <div class="colors">
                                                <i class="bx bxs-circle red"></i>
                                                <i class="bx bxs-circle blue"></i>
                                                <i class="bx bxs-circle white"></i>
                                            </div>
                                        </div>
                                        <div class="buy-now">
                                            <button><a  name="add-cart" href="index.php?addid='.$Id.'">Add to Cart</a></button>
                                        </div>
                                    </div>
                                </div>
                            ';
                   }
                   ?>
          </div>
            </div>
            <div class="seller container">
                <h2>Hot Sales</h2>
                <div class="best-seller">
                <?php

                        $get_Product ="SELECT * FROM Products LIMIT 4";
                        $feed = mysqli_query($conn, $get_Product);
                        while($row = mysqli_fetch_assoc($feed)){

                                $Id = $row['SN'];
                                $P_Name = $row['P_Name'];
                                $P_Price = $row['Price'];
                                $Stock = $row['Stock'];
                                $P_Image = $row['P_Image'];


                                echo'
                                    <div class="best-p1">
                                        <img src="'.$P_Image.'" alt="img">
                                        <div class="best-p1-txt">
                                            <div class="name-of-p">
                                                <p>'.$P_Name.'</p>
                                            </div>
                                            <div class="rating">
                                                <i class="bx bxs-star"> </i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bx-star"></i>
                                                <i class="bx bx-star"></i>
                                            </div>
                                            <div class="price">
                                                &dollar;'.$P_Price.'
                                                <div class="colors">
                                                    <i class="bx bxs-circle red"></i>
                                                    <i class="bx bxs-circle blue"></i>
                                                    <i class="bx bxs-circle white"></i>
                                                </div>
                                            </div>
                                            <div class="buy-now">
                                                <button><a  name="add-cart" href="index.php?addid='.$Id.'">Add to Cart</a></button>
                                            </div>
                                        </div>
                                    </div>
                                ';

                      }
                   ?>

                </div>
            </div>
        </section>




        <section id="news">
            <div class="news-heading">
                <p>LATEST NEWS</p>
                <h2>Fashion New Trends</h2>
            </div>
            <div class="l-news container">
                <div class="l-news1">
                    <div class="news1-img">
                        <img src="https://i.postimg.cc/2y6wbZCm/news1.jpg" alt="img">
                    </div>
                    <div class="news1-conte">
                        <div class="date-news1">
                            <p><i class='bx bxs-calendar'></i> 12 February 2022</p>
                            <h4>What Curling Irons Are The Best Ones</h4>
                            <a href="https://www.vogue.com/article/best-curling-irons" target="_blank">read more</a>
                        </div>
                    </div>
                </div>
                <div class="l-news2">
                    <div class="news2-img">
                        <img src="https://i.postimg.cc/9MXPK7RT/news2.jpg" alt="img">
                    </div>
                    <div class="news2-conte">
                        <div class="date-news2">
                            <p><i class='bx bxs-calendar'></i> 17 February 2022</p>
                            <h4>The Health Benefits Of Sunglasses</h4>
                            <a href="https://www.rivieraopticare.com/blog/314864-the-health-benefits-of-wearing-sunglasses_2/" target="_blank">read more</a>
                        </div>
                    </div>
                </div>
                <div class="l-news3">
                    <div class="news3-img">
                        <img src="https://i.postimg.cc/x1KKdRLM/news3.jpg" alt="img">
                    </div>
                    <div class="news3-conte">
                        <div class="date-news3">
                            <p><i class='bx bxs-calendar'></i> 26 February 202</p>
                            <h4>Eternity Bands Do Last Forever</h4>
                            <a href="https://www.briangavindiamonds.com/news/eternity-bands-symbolize-love-that-lasts-forever/" target="_blank">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="contact">
            <div class="contact container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.121169986175!2d73.90618951442687!3d18.568575172551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c131ed5b54a7%3A0xad718b8b2c93d36d!2sSky%20Vista!5e0!3m2!1sen!2sin!4v1654257749399!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <form action="https://formspree.io/f/xzbowpjq" method="POST">
                <div class="form">
                    <div class="form-txt">
                        <h4>INFORMATION</h4>
                        <h1>Contact Us</h1>
                        <span>As you might expect of a company that began as a high-end interiors contractor, we pay strict
                            attention.</span>
                        <h3>USA</h3>
                        <p>195 E Parker Square Dr, Parker, CO 801<br>+43 982-314-0958</p>
                        <h3>India</h3>
                        <p>HW95+C9C, Lorem ipsum dolor sit.<br>411014</p>
                    </div>
                    <div class="form-details">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <textarea name="message" id="message" cols="52" rows="7" placeholder="Message" required></textarea>
                        <button>SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
        </section>
        <footer>
            <div class="footer-container container">
                <div class="content_1">
                    <img src="https://i.postimg.cc/htGyQ4JB/footer-logo.png" alt="logo">
                    <p>The customer is at the heart of our<br>unique business model, which includes<br>design.</p>
                    <img src="https://i.postimg.cc/Nj9dgJ98/cards.png" alt="cards">
                </div>
                <div class="content_2">
                    <h4>SHOPPING</h4>
                    <a href="#sellers">Clothing Store</a>
                    <a href="#sellers">Trending Shoes</a>
                    <a href="#sellers">Accessories</a>
                    <a href="#sellers">Sale</a>
                </div>
                <div class="content_3">
                    <h4>SHOPPING</h4>
                    <a href="./contact.html">Contact Us</a>
                    <a href="https://payment-method-sb.netlify.app/" target="_blank">Payment Method</a>
                    <a href="https://delivery-status-sb.netlify.app/" target="_blank">Delivery</a>
                    <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Return and Exchange</a>
                </div>
                <div class="content_4">
                    <h4>NEWLETTER</h4>
                    <p>Be the first to know about new<br>arrivals, look books, sales & promos!</p>
                    <div class="f-mail">
                        <input type="email" placeholder="Your Email">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="f-design">
                <div class="f-design-txt container">
                    <p>Design and Code by code.sanket</p>
                </div>
            </div>
        </footer>


        <script src="assets/js/script.js"></script>
    </body>

</html>

<?php

     ?>