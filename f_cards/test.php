<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artistarc - Beta</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="../css/user_post.css" />
    
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!--[panel]-->
    <link href="../css/custom.bootstrap.css" rel="stylesheet">
    <!--[padding, margin, grid]-->
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    
    <!-- Animate CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/waves-effect.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Login -->
    <script src="../js/login.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body id="body">
<div class="container-fluid">

<!-- Navigation -->
        <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <h3 style="margin-top:-5px"  id="mobile-nav">Artistarc
                  <small> BETA
                        <span class=" glyphicon glyphicon-menu-hamburger"  style="margin-left:10px;color:white" aria-hidden="true" id="mobile-nav"></span>
                  </small></h3></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                </ul>
                <div>
                <ul class="nav navbar-nav" style="float:right;padding-right:15px;">
                    <li>
                        <a href="#">
	                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
	                        <span class=" glyphicon glyphicon-bell" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
	                    <a href="" style="padding: 10px;" class="dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    <img src="./img/user_profile/0001.jpg" class="img-circle usr-pic"></a>
		                    <ul class="dropdown-menu">
                                        <li><a href=""><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href=""><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href=""><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="./php/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
	                            </ul>
                    </li>
                </ul>
                </div>
            </div> 
            <!-- /.navbar-collapse -->
                       <!-- <div class="navbar-header user-settings" style="float:right">
                        
	                    <a href="" style="padding: 10px;" class="dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                    <img src="./img/user_profile/0001.jpg" class="img-circle usr-pic">
	                    </a>
	                    <ul class="dropdown-menu">
		                    <li id="body"><h4 class="text-center"><small><?php echo $_SESSION['UserName'] ; ?></small><h4></li>
                                    <li><a href=""><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href=""><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href=""><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="./php/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
	                 </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- hamburger menu -->

    <!-- hamburger -->
    <script src="../js/main.js"></script>
    
    <nav id="n-nav" >
      <ul class="n-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Works</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    
<!-- [ Post Body ] -->
<div class="container-fluid m-t-100">
	<div class="row">
	
		<!-- [ row-1 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- cards -->
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Personal Information</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
				<div class="panel-heading"> 
					<h3 class="panel-title">Personal Information</h3> 
				</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
		
		</div>
		</div>
		<!-- [ /. row-1 ] -->
		
		<!-- [ row-2 ] -->
		<div class="col-md-6">
		<div class="row">
		
			<!-- [ cards ] -->
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill" >
					<!-- BEGIN Portlet PORTLET-->
				<div class="portlet p-t-10"  style="margin-bottom:0px; padding-bottom:0px;">
					<div class="portlet-title">
						<div class="caption caption-purple">
							<a href="" style="padding: 10px;" class="p-0 dropdown-toggle dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                    <img src="./img/user_profile/0001.jpg" class="img-circle post-usr-pic">
							</a>
							<i class="glyphicon glyphicon-pushpin"></i>
							<span class="caption-subject bold font-yellow-crusta uppercase">
							Tabs 
							</span>
							<span class="caption-helper">more samples...</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="tab-content">
							<div class="tab-pane active" id="portlet_tab1">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
							</div>
							<div class="tab-pane" id="portlet_tab2">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
							</div>
							<div class="tab-pane" id="portlet_tab3">
								<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
									<input type="text" class="form-control m-b-10" name="user_post" placeholder="Share your art" required="" style="height:100px">
								</form>
								</div>
						</div>
					</div>
					<div class="portlet-title" style="margin-bottom:0px">
						<div class="caption ">
							<a class="btn waves-effect waves-light" type="submit">Log In</a>
							<a class="btn waves-effect waves-light" type="submit">Log In</a>
						</div>
						<ul class="nav nav-tabs">
							<li>
								<a href="#portlet_tab3" data-toggle="tab">
								Tab 3 </a>
							</li>
							<li>
								<a href="#portlet_tab2" data-toggle="tab">
								Tab 2 </a>
							</li>
							<li class="active">
								<a href="#portlet_tab1" data-toggle="tab">
								Tab 1 </a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END Portlet PORTLET-->
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="panel panel-default panel-fill" data-toggle="modal" data-target="#myModal">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #1</h3> 
					</div>
					<div class="panel-body">
							Panel content
					</div>
				</div>
			        <!-- [ Modal - card-expanded ]-->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      <div class="modal-body">
				        ...<br>
				        ...<br>
				        ...<br>
				        ...<br>
				        ...<br>
				        ...<br>
				        ...<br>
				        ...<br>
				      </div>
				      <div class="modal-footer">
				        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>-->
				      </div>
				    </div>
				  </div>
				 </div>
				<!-- [ /. Modal - card-expanded ]-->
			</div>
		
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div class="panel-heading"> 
						<h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="about-info-p">
					<div class="panel-body">
						<strong>Full Name</strong>
						<p class="text-muted">Panel content</p>
						
						<form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="./php/upload.php">
						    <input type="hidden" name="image_form_submit" value="1"/>
						    <label>Choose Image</label>
						    <input type="file" name="images[]" id="images" multiple >
						    <div class="uploading none">
						        <label>&nbsp;</label>
						        <img src="uploading.gif" alt="uploading......"/>
						    </div>
						</form>
						
						<!--<script>
							$(document).ready(function(){
							    $('#images').on('change',function(){
							        $('#multiple_upload_form').ajaxForm({
							            //display the uploaded images
							            target:'#images_preview',
							            beforeSubmit:function(e){
							                $('.uploading').show();
							            },
							            success:function(e){
							                $('.uploading').hide();
							            },
						            error:function(e){
						            }
							        }).submit();
							    });
							});
						</script>-->
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default panel-fill">
					<div id="demoajax" cellspacing="0"></div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-2] -->
		
		<!-- [ row-3 ] -->
		<div class="col-md-3">
		<div class="row">
		
			<!-- [ cards ] -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"> 
						 <h3 class="panel-title">Post #2 <small>Ayuit Biu</small></h3> 
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>
			<!-- [ /. cards ] -->
		</div>
		</div>
		<!-- [ /. row-3 ] -->
	</div>
</div>
<!-- [ /. Post Body ] -->

<img id='loading' src='img/loading.gif'>
<!-- <div id="demoajax" cellspacing="0"> -->
<!-- Footer -->
    
    <hr style="margin:4px">
    <footer>
        <div class="row">
             <div class="col-lg-12">
                 <p style="float:right">Copyright &copy; Artistarc 2015</p>
             </div>
        </div>
    <!-- /.row -->
    </footer>

    </div>
    <!-- /.container -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
</body>
<script type="text/javascript" src="script.js"></script>
</html>