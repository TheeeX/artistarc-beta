<?php
echo "
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class='lt-ie7'> <![endif]-->
<!--[if IE 7]>     <html class='lt-ie8'> <![endif]-->
<!--[if IE 8]>     <html class='lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!-->

<html lang='en-US'>

<!--<![endif]-->

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>A . SignUp</title>

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

  <!-- Google Prettify -->
  <link rel='stylesheet' type='text/css' href='assets/google-code-prettify/prettify.css' />
  <!-- Main -->
  <link rel='stylesheet' type='text/css' href='assets/_con/css/_con.min.css' />

  
    <!-- jQuery -->
    <script src='assets/jquery/jquery.js'></script>
  
  <!--[if lt IE 9]>
    <script src='assets/html5shiv/html5shiv.min.js'></script>
  <![endif]-->
  
</head>

<body>

  <section id='sign-up'>

    <!-- Background Bubbles -->
    <canvas id='bubble-canvas'></canvas>
    <!-- /Background Bubbles -->

    <!-- Sign Up Form -->
    <form accept-charset='UTF-8' id='form_sign_up' method='post' role='form' action='' style='top: -65px!important;'>
      <div class='row links'>
        <div class='col s6 logo'>
          <img src='assets/_con/images/logo.png' alt='' style='width:40px;height:40px;'>
        </div>
        <div class='col s6 right-align'><a href='page-sign-in.html'>Sign In</a> / <strong>Sign Up</strong>
        </div>
      </div>

      <div class='card-panel clearfix'>

        <!-- Social Sign Up -->
        <div class='row socials'>
          <div class='col s4'>
            <a class='btn blue darken-2 z-depth-0 z-depth-1-hover' href='page-sign-up.html#'><i class='fa fa-2x fa-facebook'></i></a>
          </div>
          <div class='col s4'>
            <a class='btn blue lighten-2 z-depth-0 z-depth-1-hover' href='page-sign-up.html#'><i class='fa fa-2x fa-twitter'></i></a>
          </div>
          <div class='col s4'>
            <a class='btn red z-depth-0 z-depth-1-hover' href='page-sign-up.html#'><i class='fa fa-2x fa-google-plus'></i></a>
          </div>
        </div>
        <!-- /Social Sign Up -->

        <div class='row'>
          <!-- First Name -->
          <div class='col m6 s12'>
            <div class='input-field'>
              <i class='fa fa-user prefix'></i>
              <input type='text' id='input_fname' name='input_fname' required=''>
              <label for='input_fname'>First Name</label>
            </div>
          </div>
          <!-- /First Name -->

          <!-- Last Name -->
          <div class='col m6 s12'>
            <div class='input-field'>
              <i class='fa fa-user prefix'></i>
              <input id='input_lname' name='input_lname' type='text'>
              <label for='input_lname'>Last Name</label>
            </div>
          </div>
          <!-- /Last Name -->
        </div>

        <!-- Email -->
        <div class='input-field'>
          <i class='fa fa-envelope prefix'></i>
          <input id='input_email' name='input_email' type='email'>
          <label for='input_email'>Email</label>
        </div>
        <!-- /Email -->

        <!-- Username -->
        <div class='input-field'>
          <i class='fa fa-user prefix'></i>
          <input id='input_username' name='input_username' type='text'>
          <label for='input_username'>Username</label>
        </div>
        <!-- /Username -->

        <div class='row'>
          <!-- DOB -->
          <div class='col m6 s12'>
          <div class='input-field'>
          <i class='fa fa-user prefix'></i>
             <input class='datepicker'  type='date' id='input_dob' name='input_dob' required=''>
             <label for='input_dob'>Date Of Birth</label>
	  </div>
          </div>
          <!-- /DOB -->

          <!-- Class -->
          <div class='col m6 s12'>
            <div class='input-field'>
              <i class='fa fa-user prefix'></i>
              <input id='input_class' name='input_class' type='text'>
              <label for='input_class'>Class</label>
            </div>
          </div>
          <!-- /Class -->
        </div>
        
        <!-- Password -->
        <div class='input-field'>
          <i class='fa fa-unlock-alt prefix'></i>
          <input id='input_password' name='input_password' type='password'>
          <label for='input_password'>Password</label>
        </div>
        <!-- /Password -->

        <p>
          <input type='checkbox' id='checkbox_terms' name='checkbox_terms' />
          <label for='checkbox_terms'>I agree to the <a href='page-sign-up.html#'>terms of use</a>.</label>
        </p>

        <button type='submit' id='form-sign-up-submit' value='' class='waves-effect waves-light btn-large z-depth-0 z-depth-1-hover'>Sign Up</button>
      </div>

    </form>
    <!-- /Sign Up Form -->
    
  </section>

  <!-- Main js -->
  <script type='text/javascript' src='assets/php/main.js'></script>

  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type='text/javascript' src='assets/_con/js/_demo.js'></script>

  <!-- jQuery -->
  <script type='text/javascript' src='assets/jquery/jquery.min.js'></script>
  <script  type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  
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


  <!-- Google Prettify -->
  <script type='text/javascript' src='assets/google-code-prettify/prettify.js'></script>
</body>

</html>
";

?>