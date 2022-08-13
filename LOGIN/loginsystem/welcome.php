<?php
 session_start();
 require_once('dbconnection.php');
if (strlen($_SESSION['id']==0)) {
    header('location:logout.php');
    } else{
     
      if(isset($_POST['signup']))
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Haba Match Request</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="index.php" class="logo me-auto" style="width:2cm;height:2cm; !important"><img src="logos.png" alt="" class="img-fluid"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Edit Profile</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="#">About</a>
      </li>
   
    <li  class="nav-item">
       <a  class="nav-link " href="#"><?php echo $_SESSION['name'];?></a>
      </li>
        <li class="nav-item" >
          <a  class="nav-link " href="contact.php" style="color:purple ;">Contact</a>
        </li>
         <li class="nav-item">
         <a  class="nav-link "href="logout.php" style="padding-right: 50%">Logout</a>
          </li>
          </ul>
  </div>
</nav>
    <center><h1> <b>FILL FORM TO REQUEST MATCH</b> </h1></center>

<body style="background-color:maroon;color:white">

    <div class="container">
<form name="match" class="" action="match.php" method="post">
                <div class="form-group pt-3">
                  <label for="fullname">Your name</label>
                  <input  type="text" name="fullname"  class="form-control" >
                </div>
                <div class="form-group">
                  <label for="email">Email address (Format: enquiries@habadatingclub.com)</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="contact">Mobile Number (Format: +XXX XXX XXX XXXX)</label>
                  <input type="contact" name="contact" value="+"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="dob">Your Date Of Birth (Format: DD/MM/YYYY)</label>
                  <input type="date" name="dob"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="gender">Your Gender (Format: Male/Female)</label>
                  <br>
                  <label for="gender"> <b>Male</b> </label>
                  <input type="checkbox" name="gender"   value="Male">
                  <label for="gender"> <b>Female</b></label>
                  <input type="checkbox" name="gender"   value="Female">

                </div> 
                <div class="form-group">
                  <label for="pgender">Searching For (Format: Male/Female)</label>
                  <br>
                  <label for="pgender"> <b>Male</b> </label>
                  <input type="checkbox" name="pgender"   value="Male">
                  <label for="pgender"> <b>Female</b></label>
                  <input type="checkbox" name="pgender"   value="Female">
                </div> 
                <div class="form-group">
                  <label for="rstatus">Your Relationship Status (Format: Single/Married/Divorced)</label>
                  <!-- <input type="text" name="rstatus"  class="form-control"> -->
                  <br>
                  <label for="rstatus""> <b>Single</b> </label>
                  <input type="checkbox" name="rstatus""   value="Single">
                  <br>
                  <label for="rstatus""> <b>Married</b></label>
                  <input type="checkbox" name="rstatus""   value="Married">
                  <br>
                  <label for="rstatus""> <b>Divorced</b></label>
                  <input type="checkbox" name="rstatus""   value="Divorced">
                </div> 
                <div class="form-group">
                  <label for="smoke">Do You Smoke? (Format:Yes/No)</label>
                  <br>
                  <input type="checkbox" id="smoke" name="smoke" value="Yes">
                  <label for="smoke"> Yes</label><br>
                  <input type="checkbox" id="smoke" name="smoke" value="No">
                  <label for="smoke"> No</label><br>
                </div> 
                <div class="form-group">
                  <label for="drink">Drink?  (Format:Yes/No)</label>
                  <input type="checkbox" id="drink" name="drink" value="Never">
                  <label for="drink"> Never</label><br>
                  <input type="checkbox" id="drink" name="drink" value="Moderately">
                  <label for="drink"> Moderately</label><br>
                  <input type="checkbox" id="drink" name="drink" value="Regularly">
                  <label for="drink"> Regularly</label><br>

                </div>
                <div class="form-group">
                  <label for="income">Whats Your Income  (Format: 20USD)</label>
                  <input type="checkbox" id="Never" name="income" value="Less than 25,000$">
                  <label for="income"> Less than 25,000$</label><br>
                  <input type="checkbox" id="vehicle2" name="income" value=" $5000 to $10000">
                  <label for="income"> $5000 to $10000</label><br>
                  <input type="checkbox" id="Never" name="income" value="$10001 to $20000">
                  <label for="income"> $10001 to $20000</label><br>
                  <input type="checkbox" id="vehicle2" name="income" value="$20001 to $35000">
                  <label for="income"> $20001 to $35000</label><br>
                  <input type="checkbox" id="Never" name="income" value="$35001 to $50001">
                  <label for="income"> $35001 to $50001</label><br>
                  <input type="checkbox" id="vehicle2" name="income" value="$50001 and above">
                  <label for="income">  $50001 and above</label><br>
                </div>
                <div class="form-group">
                  <label for="partnerminage">Required Partner Minimum Age (Format:18/No Preference)</label>
                  <input type="text" name="partnerminage"  class="form-control">
                </div> <div class="form-group">
                  <label for="partnermaxage">Req Partner Max Age (Format:50/No Preference)</label>
                  <input type="text" name="partnermaxage"  class="form-control">
                </div> <div class="form-group">
                  <label for="chronic">Do You Have Any Chronic Illness? (Format:Yes/No)</label>
                  <br>
                  <input type="checkbox" id="Never" name="chronic" value="Yes">
                  <label for="chronic"> Yes</label>
                  <input type="checkbox" id="vehicle2" name="chronic" value="No">     
                  <label for="chronic"> No</label>
   
                      </div> 
                      <div class="form-group">
                  <label for="pdrink">Should Your Partner Drink? (Format:Yes/No)</label>
                  <br>
                  <input type="checkbox" id="Never" name="pdrink" value="Never">
                  <label for="pdrink"> Never</label><br>
                  <input type="checkbox" id="Moderately" name="pdrink" value="Moderately">
                  <label for="pdrink"> Moderately</label><br>
                  <input type="checkbox" id="Regularly" name="pdrink" value="Regularly">
                  <label for="pdrink"> Regularly</label><br>
              
                <div class="form-group">
                <p>
                <input type="submit" name="save" id="Submit" onclick="window.location.href = 'http://localhost/LOGIN/loginsystem/welcome.php';" type="submit" value="Submit" />

                <!-- <input type="submit" name="save" id="Submit" value="Submit"> -->
                </p>                
              </div>

            </form>


    
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <footer id="footer" >

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Haba</h3>
            <p>
              Nairobi,Kenya <br>
              
              <strong>Phone:</strong> + <br>
              <strong>Email:</strong> enquiries@habadatingclub.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">Services</a></li>
              
            </ul>
          </div>

         

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Mailing List</h4>
            <p>Input Your Email Below To Join The Haba Family</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe" style="color:rgb(253, 2, 170)">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Haba</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
          <!-- Designed by <a href="">Rawlinz Designs</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>

</html>
<?php } ?>