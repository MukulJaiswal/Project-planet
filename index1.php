 <?php
 session_start();
 $name=$_POST['u_name'];
 mysql_connect("localhost","root","");
 mysql_select_db("project_era_db");
 
 $query="SELECT * from user WHERE user_name='$name'";
 
   $result=mysql_query($query);
   if($result) {
   $count=mysql_fetch_array($result, MYSQL_BOTH);
   $n=$count['user_name'];
   $n=$_POST['u_name'];
  } else {
    $n = 'Error';
  }
 ?>
 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

 


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
       <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="font-size: 20px;">Project Era</span></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Download</a>
            </li>


            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#chatbox">Chat With Us</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup/logout.php">Logout</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?php echo $_SESSION['user_name']; ?></a>
            </li>

           
             
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Download and  upload project from World Wide </h1>
          <hr>
          <p>Here you can download all the Colleges projects for free.
         Download the Project that are running presently for free</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light">
            <p class="text-faded">We have developed the website for youngsters to download the College project of any branch of 
            Engineering.Our main aim is to bridge gap between College and Industries. For such purpose,  they need a platform where students/professionals across the nation can come forward and share their ideas/projects with everyone.You can upload the 
            project as well by contacting us. 
            </p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>

        </div>
      </div>

       <p align="center"><b>Select the category that you want to download project.</b>
            </p>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
          <a href="branch/cse/cse.html" >  <img src=img/cs.jpg  width="270px" height="200px"  class="img-thumbnail>
              
              <br>

              <p class="text-muted" style="padding: 10px;" align="center">Computer Science Engineering</p></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
            <a href="branch/ece/ece.html" >   <img src=img/ece.jpg  width="270px" height="200px"  class="img-thumbnail>
              <h3>Electronic Engineering</h3>
              <p class="text-muted" style="padding: 10px;">Electronics Engineering!</p></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="branch/ce/ce.html" >  <img src=img/ce.jpg  width="270px" height="200px"  class="img-thumbnail>
              <h3>Civil Engineering</h3>
              <p class="text-muted" style="padding: 10px;"> Civil Engineering!</p></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <a href="branch/me/me.html" >   <img src=img/me.jpg  width="270px" height="200px"  class="img-thumbnail>
              <h3>Mechanical Engineering</h3>
              <p class="text-muted" style="padding: 10px;"> Mechanical Engineering!</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  <section class="bg-primary" id="chatbox">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Have doubt !! Chat with Us</h2>
            <hr class="light">
            <p style="color :#D3D3D3;">Sign up with the GUEST USER and leave a message.We will contact you as soon as possible.
            Do mention your Name and Email id in text.
            </p>
           
          <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowtransparency="true" src="https://chatroll.com/embed/chat/eci5?id=xiJFGHdDKDZ&platform=html"></iframe>

            
          </div>
        </div>
      </div>
    </section>
    
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
            <p>Ready to start or want to upload your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>91-9911985223</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:mukul.jaiswal786@gmail.com">mukul.jaiswal786@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>


  </body>
 <footer style="text-align:center;">
 Copyright © Project Era. All rights reserved.
</footer>

</html>
