<?php

include 'assets/php/connect.php';

echo "
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class='lt-ie7'> <![endif]-->
<!--[if IE 7]>     <html class='lt-ie8'> <![endif]-->
<!--[if IE 8]>     <html class='lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Artistarc . SignIn</title>

  <meta name='description' content=''>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel='icon' type='image/png' href='assets/_con/images/logo.png'>

  <!-- nanoScroller -->
  <link rel='stylesheet' type='text/css' href='assets/nanoScroller/nanoscroller.css' />


  <!-- FontAwesome -->
  <link rel='stylesheet' type='text/css' href='assets/font-awesome/css/font-awesome.min.css' />

  <!-- Material Design Icons -->
  <link rel='stylesheet' type='text/css' href='assets/material-design-icons/css/material-design-icons.min.css' />

  <!-- IonIcons -->
  <link rel='stylesheet' type='text/css' href='assets/ionicons/css/ionicons.min.css' />

  <!-- WeatherIcons -->
  <link rel='stylesheet' type='text/css' href='assets/weatherIcons/css/weather-icons.min.css' />
  <!-- Main -->
  <link rel='stylesheet' type='text/css' href='assets/_con/css/_con.min.css' />

    <!-- jQuery -->
    <script src='assets/jquery/jquery.js'></script>
  
  <!--[if lt IE 9]>
    <script src='assets/html5shiv/html5shiv.min.js'></script>
  <![endif]-->
</head>

<body>

  <section id='sign-in'>

    <!-- Background Bubbles -->
    <canvas id='bubble-canvas'></canvas>
    <!-- /Background Bubbles -->

    <!-- Sign In Form -->
    <form action='assets/php/_signin.php' accept-charset='UTF-8' id='form_sign_in' method='post' role='form' >
      <div class='row links'>
        <div class='col s6 logo'>
          <img src='assets/_con/images/logo.png' alt=''>
        </div>
        <div class='col s6 right-align'><strong>Sign In</strong> / <a href='page-sign-up.html'>Sign Up</a>
        </div>
      </div>

      <div class='card-panel clearfix'>

        <!-- Social Sign Up -->
        <div class='row socials'>
          <div class='col s4'>
            <a class='btn blue darken-2 z-depth-0 z-depth-1-hover' href='page-sign-in.html#'><i class='fa fa-2x fa-facebook'></i></a>
          </div>
          <div class='col s4'>
            <a class='btn blue lighten-2 z-depth-0 z-depth-1-hover' href='page-sign-in.html#'><i class='fa fa-2x fa-twitter'></i></a>
          </div>
          <div class='col s4'>
            <a class='btn red z-depth-0 z-depth-1-hover' href='page-sign-in.html#'><i class='fa fa-2x fa-google-plus'></i></a>
          </div>
        </div>
        <!-- /Social Sign Up -->

        <div class='row'>
          <div class='col'></div>
        </div>

        <!-- Username -->
        <div class='input-field'>
          <i class='fa fa-user prefix'></i>
          <input id='input_username' name='input_username' type='text' class='validate'>
          <label for='input_username'>Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class='input-field'>
          <i class='fa fa-unlock-alt prefix'></i>
          <input id='input_password' name='input_password' type='password'>
          <label for='input_password'>Password</label>
        </div>
        <!-- /Password -->

        <div class='switch'>
          <label>
            <input type='checkbox' checked />
            <span class='lever'></span>
            Remember
          </label>
        </div>

        <button class='waves-effect waves-light btn-large z-depth-0 z-depth-1-hover'>Sign In</button>
      </div>

      <div class='links right-align'>
        <a href='page-forgot-password.html'>Forgot Password?</a>
      </div>

    </form>
    <!-- /Sign In Form -->

  </section>

  <!-- Main js -->
  <script type='text/javascript' src='assets/php/main.js'></script>

  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type='text/javascript' src='assets/_con/js/_demo.js'></script>

  <!-- jQuery -->
  <script type='text/javascript' src='assets/jquery/jquery.min.js'></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type='text/javascript' src='assets/jqueryRAF/jquery.requestAnimationFrame.min.js'></script>

  <!-- nanoScroller -->
  <script type='text/javascript' src='assets/nanoScroller/jquery.nanoscroller.min.js'></script>

  <!-- Materialize -->
  <script type='text/javascript' src='assets/materialize/js/materialize.min.js'></script>

  <!-- Sortable -->
  <script type='text/javascript' src='assets/sortable/Sortable.min.js'></script>

  <!-- Main -->
  <script type='text/javascript' src='assets/_con/js/_con.min.js'></script>

</body>

</html>
";

?>