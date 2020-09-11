<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emergency || Contact</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
  

  <!-- j Query -->
  <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

  <!-- Script -->
	<script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "index.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
                            $("#add_err2").html("loading...");
						}
					});
					 return false;
				});
});
    </script>


</head>

<body>
    <div class="main-page-wrapper">



        <!--Theme Header( Navbar)-->

			<?php require_once 'nav.php'; ?>
            
        <!--   
        =====================================================
            Theme Inner page Banner
        =====================================================
        -->
        <section class="inner-page-banner">
            <div class="opacity">
                <div class="container">
                    <h2>LOGIN</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Login</li>
                    </ul>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </section> <!-- /.inner-page-banner -->
       
      <!--
			=====================================================
				Login Section
			=====================================================
			-->
      <div class="box">
			<div id="contact-section">
				<div class="container">
        <div class="alert alert-danger">
					<strong>You must be logged in to view the page.</strong>
          </div>
          <div id="add_err2"></div>
					<div class="clear-fix contact-address-content">

					<!-- Contact Form -->
					<div class="send-message">
						<h2>Login</h2>

						<form role="form">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="email" placeholder="Email*" id="email" name="email" maxlength="25" class="form-control">
									</div> <!-- /.single-input -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="password" placeholder="Password*" id="password" name="password" maxlength="10" class="form-control">
									</div> <!-- /.single-input -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">
                  <button class="tran3s p-color-bg" type="submit" id="login" >Login</button> </br>
									</div> <!-- /.single-input -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">
										<a href="register.php"><button type="button" class="tran3s p-color-bg">Register here</button></a>
									</div> <!-- /.single-input -->
								</div>
              </div>
							</div> <!-- /.row -->
						</form>
					</div> <!-- /.send-message -->
				</div> <!-- /.container -->
			</div> <!-- /#contact-section -->
      </div>
			
              
        <!--Footer linking	-->
			<?php require_once 'footer.php'; ?>


      <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </button>




        <!-- Js File_________________________________ -->
        

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Vendor js _________ -->
        <!-- owl.carousel -->
        <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
        <!-- Validation -->
        <script type="text/javascript" src="vendor/contact-form/validate.js"></script>
        <script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
        <!-- Calendar js -->
        <script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


        <!-- Theme js -->
        <script type="text/javascript" src="js/theme.js"></script>
        <script type="text/javascript" src="js/map-script.js"></script>

    </div> <!-- /.main-page-wrapper -->
</body>
</html>