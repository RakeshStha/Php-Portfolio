<?php

         ob_start();
if(isset($_POST['submit'])){
		$name=$_POST['firstname'];
		$email=$_POST['lastname'];
		$phone=$_POST['message'];
	

		$to='rakeshshrestha3222@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n";
		$headers="From: ".'rakeshshrestha322@gmail.com';

		if(mail($to, $subject, $message, $headers)){
			echo '
			<div class="alert alert-warning text-center" role="alert" style="margin:2px">
  Message sent Successfully! Thank you, We will contact you shortly!<a href="http://visitnepalrrrr.000webhostapp.com/"> Click here to refresh</a>
</div>';
		}
		else{
			echo "Something went wrong!";
		}
	}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <title>Portfolio</title>
    <style>
    body{
        background-color: rgba(0,0,0,0.1);
    }
    </style>
  </head>
  <body>
   <!---Navigartion bar-->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#6883bc;">
   <a class="navbar-brand" href="#" style="margin-left:10px;"><img src="img/logo.png" width="50px" height="50px" alt="logo"></a>
  <a class="navbar-brand" href="#" style="margin-left:100px; font-weight:600;">Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:260px; font-weight:500;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" >Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact" >Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about" >About</a>
      </li>
      
      <li class="nav-item" >
        <a class="nav-link" href="https://www.facebook.com/" ><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="https://twitter.com/" ><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="https://instagram.com" ><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
      </li>
      </ul>
      
      
     <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
   <!--End of Navigation bar-->

   <!--Body-->
   <div class="container" >
  <div class="row">
    <div class="col-sm-6" style="margin-top: 60px;">
      <h1>Hello There,</h1>
      <h2>Welcome to my website.</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
      scrambled it to make a type specimen book.
      </p>
      <h2 id="about">About me</h2>
      <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
      scrambled it to make a type specimen book.
      </p>
    </div>
    <div class="col-sm-6">
      <div class="card-box" style="margin-top:20px;">
      
      <img src="https://i.pinimg.com/originals/de/30/fd/de30fd62f738f00e3b47ea2cb3fca29b.jpg" alt="photo" width="100%" height="100%">
      
      </div>
    </div>
    
  </div>
</div>
<br>


 <div class="container">
 <div class="card" style="background-color: #dddddd ">
        <div class="card-title text-center" style="margin-top:5px;">
        <h1>Contact Me</h1>
        </div>
  <div class="row" >
    <div class="col-sm-6"  >
            <div class="card" style="margin-left:20px; height:365px; margin-bottom:20px;  background-color:#a1af77">
                        <div class="container" style="height: 365px;">
                        <form class="needs-validation" novalidate style="margin:30px; height:365px;" id="contact" action="" method="post">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">First name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="firstname" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Last name</label>
                                     <input type="text" class="form-control" id="validationTooltip02" name="lastname" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Your Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="message"></textarea>
                            </div>
                            <!--<div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip03">City</label>
                                    <input type="text" class="form-control" id="validationTooltip03" required>
                                <div class="invalid-tooltip">
                                 Please provide a valid city.
                                </div>
                            </div>
                             <div class="col-md-3 mb-3">
                                    <label for="validationTooltip04">State</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                    <label for="validationTooltip05">Zip</label>
                                    <input type="text" class="form-control" id="validationTooltip05" required>
                            <div class="invalid-tooltip">
                                     Please provide a valid zip.
                            </div>
                        </div>
                         </div>-->
                         <div class="text-center">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit form">
          
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
      <div class="card-box" style="margin: 10px;">
      <img src="https://heera.it/wp-content/uploads/2011/11/google-maps-new-interface1.jpg" alt="Google map" height="100%" width="100%">
      </div>
      <h6 style="font-size:14px; font-weight:700; margin: 10px;">Contact me: +977-9849497787</h6>
      <h6 style="font-size:14px; font-weight:700; margin: 10px;">Email: <a href="mailto:rakeshshrestha3222@gmail.com" onMouseOver="this.style.color='red'"
        onMouseOut="this.style.color='blue'">rakeshshrestha3222@gmail.com</a></h6>
    <h6 style="font-size:14px; font-weight:700; margin: 10px;"> Website: <a href="https://www.shrestharakesh.com.np/" onMouseOver="this.style.color='red'"
        onMouseOut="this.style.color='blue'">www.shrestharakesh.com.np</a></h6>
    <br>
    </div>
    
  </div>
</div>
</div>
   <!--Body Close-->
<br>
<!--Footer-->
<div class="copy_right text-center">
<p>&copy; 2020 UnknownBeginner . All rights reserved | Design and developed by <a href="https://www.shrestharakesh.com.np/" target="_blank" onMouseOver="this.style.color='red'"
        onMouseOut="this.style.color='blue'">Rakesh Shrestha.</a></p>
</div>
<!--Footer close-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>