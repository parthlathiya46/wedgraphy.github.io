<?php
  session_start();
  if(isset($_SESSION['name']))
  {
    $valname = $_SESSION['name'];
  }
  if(isset($_SESSION['pass']))
  {
    $valpass = $_SESSION['pass'];
  } 
  
  else
  {
    
    if(isset($_POST['smt']))  
    {
      $con = mysqli_connect("localhost","root","","photographyDB");
    $fname=$lname=$oname=$category=$state=$city=$area=$email=$pin=$odate="";

      if(isset($_POST['fname']))
      {
        $fname=$_POST['fname'];  
      }
      if(isset($_POST['lname']))
      {
        $lname=$_POST['lname'];  
      }  
      if(isset($_POST['oname']))
      {
        $oname=$_POST['oname'];  
      //  echo $oname;
      }  
      if(isset($_POST['category']))
      {
        $category=$_POST['category'];  
        //echo $category;
      }
      if(isset($_POST['stname']))
      {
        $state=$_POST['stname'];  
      }
      if(isset($_POST['cityname']))
      {
        $city=$_POST['cityname'];  
      }
      if(isset($_POST['area']))
      {
        $area=$_POST['area'];  
      }
      if(isset($_POST['email']))
      {
        $email=$_POST['email'];  
      }  
      if(isset($_POST['pin']))
      {
        $pin = $_POST['pin'];
      }
      if(isset($_POST['odate']))
      {
        $odate = $_POST['odate'];
      }



      $query = "insert into orderTB(fname,lname,oname,category,state,city,area,email,pincode,orderdate) 
      values('".$fname."','".$lname."','".$oname."','".$category."',
      '".$state."','".$city."','".$area."','".$email."','".$pin."','".$odate."')";
      
      if(mysqli_query($con,$query))
        {
          // echo "Your order is booked";
          header("location:booked.html?Congrats Successfully Booked");
          echo "Your order is booked";
        }
      else
        {
        ?>
        <script type="text/javascript">
          alert("Please Enter Valid Data");
        </script>
        <?php 
        }

  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> &mdash; Book Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  

  <!-- <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center">
    <div class="site-logo">
      <a href="index.php">Creative Eye Photography</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="photos.php">Photos</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li class="active"><a href="book_order.php">Book Order</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div> -->
  </header> 
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">Book Order</h2>

          <div class="row">
            <div class="col-md-12">
              

              <div class="row">
                <div class="col-md-12">

                  

                  <form action="book_order.php" method="post" >
                    
                    

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control" required>
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" required>
                      </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-12">
                        <label class="text-white" for="oname">Contact Number</label>
                        <input type="text" name="oname" class="form-control" required>
                      </div>
                      
                    </div>
                    
                    
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-white" for="category">Select Category</label> 
                        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="text-white">
                        <select name="category">
                          <option value="wedding">Wedding</option>
                          <option value="nature">Nature</option>
                          <option value="birthday">Birthday</option>
                          <option value="modeling">Modeling</option>
                          <option value="festival">Festival</option>
                          <option value="art">Art</option>
                          <option value="product">Product</option>
                          <option value="fashion">Fashion</option>
                          <option value="wildlife">Wildlife</option>
                          <option value="sport">Sport</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-white" for="stname">Select State</label> 
                        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="text-white">
                        <select name="stname">
                          <option value="gujarat">Gujarat</option>
                          <option value="maharashtra">Maharashtra</option>
                          <option value="rajasthan">Rajasthan</option>
                        </select>
                        
                      </div>
                    </div>
                    
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="cityname">City</label> 
                        <input type="text" name="cityname" class="form-control" required>
                      </div>
                    </div>
                    
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="area">Area</label> 
                        <input type="text" name="area" class="form-control" required>
                      </div>
                    </div>

                      <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="pin">Pincode</label> 
                        <input type="text" name="pin" class="form-control" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="odate">Order date</label> 
                        <input type="text" name="odate" class="form-control" placeholder="yyyy-mm-dd" required>
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">Email</label> 
                        <input type="email" name="email" class="form-control" required>
                      </div>
                    </div>


                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Book Order" name="smt" class="btn btn-primary btn-md text-white" required>
                      </div>
                    </div>

        
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        

      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>