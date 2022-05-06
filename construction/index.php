	<?php 
include_once'connexion.php';

	?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Domicile Clean</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <h1 ><a  href="index.php" style="color: white; font-size: 30px; " class="text-uppercase"><img src="" alt="" title="" />Domicile Clean</a></h1>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#feature">Feature</a></li>
				          <li><a href="#project">Project</a></li>
				          <li><a href="#service">Service</a></li>
				          <li><a href="#blog">Blog</a></li>
				          <li><a href="#contact">Contact</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.php">Generic</a></li>
				              <li><a href="elements.php">Elements</a></li>
				            </ul>
				          </li>
				          
				          
				          <li><a href="Login/indexx.php" class="primary-btn header-btn text-uppercase">Sign in</a></li>
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<style type="text/css">

				.containerr{
					animation: animate 16s ease-in-out infinite;
					background-size: cover;
				}
				@keyframes animate{
					0%,100%{
						background-image: url(Login/images/bg1.png);
					}
					25%{
						background-image: url(Login/images/bg2.jpg);
					}
					50%{
						background-image: url(Login/images/bg3.jpg);
					}
					75%{
						background-image: url(Login/images/bg4.jpg);
					}
				}
			</style>

			<section class="banner-area relative containerr" id="home" data-parallax="scroll" data-image-src="">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1 class="text-uppercase" style="font-size: 40px;">
								Domicile Clean					
							</h1> <br>
							<h4 class="text-white text-uppercase">Simplify your life, have free time</h4><br>
							
							<p class="text-white">
								
							</p>
							<a href="appointment.php" class="primary-btn header-btn text-uppercase">Appointment</a>
					<!--		<form method="post" action="#project">
						feature<input type="text" name="feature" value="">&nbsp;
						ville<input type="text" name="ville" value="">&nbsp;
						<select name="gender">
  							<option value="male" >male</option>
  							<option value="female">female</option>
  						</select>
  						<select name="note">
  							<option value="desc">mieux noté</option>
  							<option value="asc">moins noté</option>
  						</select>
						<input type="submit" name="sub" value="ok">
					</form>  -->

					<?php

						if(isset($_POST['gender'])){
						$gender=$_POST["gender"];
						$ville=$_POST["ville"];
						$note=$_POST["note"];
						$req="select * from agent where gendera='$gender' and villea='$ville' order by notea desc";
						$res=mysqli_query($con,$req);
						while ($row = mysqli_fetch_array($res)) 
						{
						echo $row['namea'].' '.$row['notea']."<br>";   
						
						}}
						?> 

						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start features Area -->
			<section class="features-area pt-100" id="feature">
			<div class="feature-section"><div class="container">
					<div class="row">
						<?php
                                                include('connexion.php');

                                                  $req= "select `namea`, `villea`, `maila`, `notea`,  `imga`, `tela` FROM `agent`";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $namea=$row['namea'];
                                                             $villea=$row['villea'];
                                                             $maila=$row['maila'];
                                                             $notea=$row['notea'];
                                                             $imga=$row['imga'];
                                                             $tela=$row['tela'];
                                                         
                                                       
          				  ?>	

						<div class="single-feature col-lg-4">
							<a href="Cleaning.php">
						<span style="height: 200px; width: 200px;"><?php echo"<img src='Login/images/".$imga."' >"; ?></span> 
							
							</a>
							<h4 class="pt-20 pb-20"><?php echo $namea; ?></h4>
							<p>
								<?php echo $villea; ?> &nbsp; <?php echo $tela; ?><br> <?php echo $maila; ?><br>
								<?php echo $notea; ?>
							</p>
						</div>
					<!--	<div class="single-feature col-lg-4">
							<a href=""><img src="img/f2.png" alt=""></a>
							<h4 class="pt-20 pb-20">Ironing</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class="single-feature col-lg-4">
							<a href=""><img src="img/f3.png" alt=""></a>
							<h4 class="pt-20 pb-20">Gardening</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>	
						<div class="single-feature col-lg-4">
							<a href=""><img src="img/f2.png" alt=""></a>
							<h4 class="pt-20 pb-20">Child Care</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>							
						</div>
						<div class="single-feature col-lg-4">
							<a href=""><img src="img/f2.png" alt=""></a>
							<h4 class="pt-20 pb-20">Animals Breeding</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>											
						</div>
						<div class="single-feature col-lg-4">
							<a href=""><img src="img/f2.png" alt=""></a>
							<h4 class="pt-20 pb-20"></h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>	 End features Area -->

						<?php 
                }
            ?>
			</div>
		</div></div>
			</section>
			

			


			
			<!-- Start offered Area -->
			<section class="offered-area section-gap" id="offered">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Some Features that Made us Unique</h1>
								<p>Simplify your life, have free time.</p>
							</div>
						</div>
					</div>	
					<div class="row">
						<?php
                                                include('connexion.php');

                                                  $req= "select `nomd`, `desc`, `imgd` from `domaine`";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $nomd=$row['nomd'];
                                                             $desc=$row['desc'];
                                                             $imgd=$row['imgd'];
                                                      
           				 ?>	
							

						<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="" alt=""><?php echo"<img src='Login/images/".$imgd."' >"; ?>
								<a href="#"><h4 class="pt-20 pb-20"><?php echo $nomd; ?></h4></a>
								<p>
									<?php echo $desc; ?>
								</p>
							</div>
						</div>
				<!--		<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="img/s2.png" alt="">
								<a href="#"><h4 class="pt-20 pb-20">Brake Repairs & Services</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="img/s3.png" alt="">
								<a href="#"><h4 class="pt-20 pb-20">Preventive Maintenance</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div> -->


			<?php 
                }
            ?>

					</div>
				</div>	
			</section>
			<!-- End offered Area -->

			<!-- Start projects Area -->
			<section class="projects-area pb-100" id="project">
				<div class="container-fluid">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Some Services that Made us Unique</h1>
								<p>Simplify your life, have free time.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-project-carusel col-lg-12">

							<?php
                                                include('connexion.php');

                                                  $req= "select `noms`,`descs`, `nomd`, `ims` from `services`";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $noms=$row['noms'];
                                                             $descs=$row['descs'];
                                                             $ims=$row['ims'];
                                                             $nomd=$row['nomd'];
                                                             
                                                            
                                                      
          				  ?>	

							<div class="item">
								<div class="single-project" style="background: url();">
					<div style="height: 600px; width:600px; "><?php echo"<img src='Login/images/".$ims."'>"; ?> </div>
									<div class="overlay overlay-content">
										<h2><?php echo $noms; ?>  </h2><br>
										<h4><?php echo $nomd; ?></h4><br>
										<p>
											<?php echo $descs; ?>
										</p>
									</div>
								</div>
							</div>	
					<!--		<div class="item">
								<div class="single-project" style="background: url(img/p2.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p3.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p4.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p1.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p2.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p3.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="single-project" style="background: url(img/p4.jpg);">
									<div class="overlay overlay-content">
										<h1>Alex Complex for <br> esidence</h1>
										<p>
											LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.
										</p>
									</div>
								</div>
							</div> -->

						<?php 
							}
					 	?>
																							
						</div>						
					</div>						
				</div>	
			</section>
			<!-- End projects Area -->
			
			<!-- Start fact Area -->
			<section class="facts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">2536</h1>
							<p>Really Happy Clients</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">6784</h1>
							<p>In House Professionals</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">1059</h1>
							<p>Total Tasks Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee Taken</p>
						</div>	
						<div class="col single-fact">
							<h1 class="counter">435</h1>
							<p>Cups of Coffee Taken</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->
			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What are our prices?</h1>
							<p>
								 The Domicile Clean's fares are among the lowest in Tunisia. 
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Cleaning</h4>
								<p>
									
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Ironing</h4>
								<p>
									
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Gardening</h4>
								<p>
									
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Animals breeding</h4>
								<p>
									
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Taking care of children</h4>
								<p>
									
								</p>								
							</div>
						</div>
					<!--	<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>	-->					
					</div>
				</div>	
			</section>
			<!-- End service Area -->


			<!-- Start testimonial Area -->
			<section class="testimonial-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<div class="active-testimonial">
							<div class="single-testimonial item d-flex flex-row">
								<div class="thumb">
									<img class="img-fluid" src="img/user1.png" alt="">
								</div>
								<div class="desc">
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.
									</p>
									<h4 mt-30>Mark Alviro Wiens</h4>
									<p>CEO at Google</p>
								</div>
							</div>
							<div class="single-testimonial item d-flex flex-row">
								<div class="thumb">
									<img class="img-fluid" src="img/user2.png" alt="">
								</div>
								<div class="desc">
									<p>
										Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.
									</p>
									<h4 mt-30>Mark Alviro Wiens</h4>
									<p>CEO at Google</p>
								</div>
							</div>								
						</div>					
					</div>
				</div>	
			</section>
			<!-- End testimonial Area -->

			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap" id="blog"> 
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Blog</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="blog-left col-lg-4 col-md-6">												
							<div class="single-blog">
								<img class="mx-auto d-block img-fluid" src="img/b1.jpg" alt="">
								<div class="desc">
									 <a href="#"><h5>We do Believe in Quality</h5></a>
									 <p>
									 	inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards.
									 </p>
									 <a class="read-more text-uppercase" href="#">Read More</a>
								</div>
							</div>	
						</div>
						<div class="blog-left col-lg-4 col-md-6">												
							<div class="single-blog">
								<img class="mx-auto d-block img-fluid" src="img/b2.jpg" alt="">
								<div class="desc">
									 <a href="#"><h5>We do Believe in Quality</h5></a>
									 <p>
									 	inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards.
									 </p>
									 <a class="read-more text-uppercase" href="#">Read More</a>
								</div>
							</div>	
						</div>						
						<div class="blog-right col-lg-4 col-md-6">
							<div class="single-list justify-content-start d-flex">
								<div class="thumb">
									<img src="img/b3.jpg" alt="">
								</div>
								<div class="details">
									<a href="#"><h6>We Believe in Quality</h6></a>
									<p>21st Dec  04 Comments</p>
								</div>
							</div>
							<div class="single-list justify-content-start d-flex">
								<div class="thumb">
									<img src="img/b4.jpg" alt="">
								</div>
								<div class="details">
									<a href="#"><h6>We Believe in Quality</h6></a>
									<p>21st Dec  04 Comments</p>
								</div>
							</div>
							<div class="single-list justify-content-start d-flex">
								<div class="thumb">
									<img src="img/b5.jpg" alt="">
								</div>
								<div class="details">
									<a href="#"><h6>We Believe in Quality</h6></a>
									<p>21st Dec  04 Comments</p>
								</div>
							</div>
							<div class="single-list justify-content-start d-flex">
								<div class="thumb">
									<img src="img/b6.jpg" alt="">
								</div>
								<div class="details">
									<a href="#"><h6>We Believe in Quality</h6></a>
									<p>21st Dec  04 Comments</p>
								</div>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->			

			<!-- Start brand Area -->
			<section class="brand-area">
				<div class="container">
					<div class="row logo-wrap">
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l1.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l2.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l3.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l4.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l5.png" alt="">
							</a>
					</div>	
				</div>	
			</section>
			<!-- End brand Area -->		
					
			<!-- start contact Area -->		
			<section class="contact-area section-gap" id="contact">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">If you need, Just drop us a line</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>										
					<form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
						<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="mt-10 alert-msg">								
						</div>
						</div></div>
					</form>						
					
				</div>	
			</section>
			<!-- end contact Area -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn primary circle arrow"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>

								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>	

			 <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
    
		</body>
	</html>



