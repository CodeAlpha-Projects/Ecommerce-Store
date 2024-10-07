<?php

include('database/connect.php');






?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm">
                    <h1 id="register">Registration Form</h1>
                    
                    <div class="all-steps" id="all-steps"> 
                      <span class="step"><i class="fa fa-user"></i></span> 
                      <span class="step"><i class="fa fa-map-marker"></i></span>
                      <span class="step"><i class="fa fa-shopping-bag"></i></span>
                      <span class="step"><i class="fa fa-mobile-phone"></i></span>
                    </div>
    
                    <div class="tab">
                      <h6>What's your First Name?</h6>
                        <p>
                          <input placeholder="First Name..." oninput="this.className = ''" name="fname">
                        </p>

                        <h6>What's your Last Name?</h6>
                        <p>
                          <input placeholder="Last Name..." oninput="this.className = ''" name="fname">
                        </p>

                        <h6>What's Your Email Address?</h6>
                        <p>
                          <input placeholder="Email..." oninput="this.className = ''" name="email">
                        </p>
                        
                    </div>


                    <div class="tab">
                      <h6>What's your Phone Number?</h6>
                        <p>
                          <input placeholder="+254..." oninput="this.className = ''" name="phone">
                        </p>


                        <h6>What's Your Country?</h6>
                        <p>
                           <input placeholder="Country..." oninput="this.className = ''" name="country">
                        </p>

                  

                     <h6>What's your Street Address?</h6>
                        <p>
                            <input placeholder="Street Address..." oninput="this.className = ''" name="Address">
                        </p>
                    </div>


                    <div class="tab">
                        <h6>What's your Posta/Zip code?</h6>
                        <p>
                            <input placeholder="Posta/Zip..." oninput="this.className = ''" name="Posta">
                        </p> 
                        
                        <h6>What's Your Appartment Name?</h6>
                        <p><input placeholder="Apartment..." oninput="this.className = ''" name="Apartment"></p> 
                    </div>
    
    
                    <div class="tab">
                        <h6>Create Password</h6>
                        <p>
                            <input placeholder="Create Password..." oninput="this.className = ''" name="pass1">
                        </p>
                        <h6>Confirm Password</h6>
                        <p>
                         <input placeholder="Confirm Password..." oninput="this.className = ''" name="pass2">
                        </p>
                    </div>



                    <div class="thanks-message text-center" id="text-message"> <img src="assets/images/tick.png" width="100" class="mb-4">
                        <h3>Thank you for your response</h3> <span>You can now Login and continue shopping</span> <br><br>
                        <a class="btn rounded-pill mt-4" style="background:#ff3c78; color:#fff;" href="login.php">Login Now</a>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                          <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="reg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

