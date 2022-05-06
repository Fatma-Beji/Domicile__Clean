	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Appointement</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<section class="generic-banner relative">	
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				       <div id="logo">
				        <h1 ><a  href="index.php" style="color: white; font-size: 30px; " class="text-uppercase"><img src="" alt="" title="" />Domicile Clean</a></h1>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php#home">Home</a></li>
				          <li><a href="#feature">Feature</a></li>
				          <li><a href="#project">Project</a></li>
				          <li><a href="#service">Service</a></li>
				          <li><a href="#blog">Blog</a></li>
				          <li><a href="#contact">Contact</a></li>
				         <li><a href="Login/indexx.php" class="primary-btn header-btn text-uppercase">Sign in</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

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
						background-image: url(Login/images/gardening1.jpg);
					}
				}
			</style>
				<section class="banner-area relative containerr " id="home" data-parallax="scroll" data-image-src="Login/images/cleaning2.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white"></h2>
								<p class="text-white"></p>
							</div>							
						</div>
					</div>
				</div>
			</section>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">

											


			
			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<h3 class="about-title mb-30">Make an Appointment</h3>
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30"></h3>
								<form action="#">
									
								<!--	<div class="mt-10">
										<input type="text" name="first_name" placeholder="Feature Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Feature Name'" required class="single-input-primary">
									</div>
									<div class="mt-10">
										<input type="text" name="last_name" placeholder="Service Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Service Name'" required class="single-input-primary">
									</div>
									<div class="mt-10">
										<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input-primary">
									</div>
									<div class="mt-10">
										<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input-primary">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div> -->

									


									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select>
												<?php
                                                include('connexion.php');

                                                  $req= "select `nomd`, `desc`, `imgd` from `domaine`";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $nomd=$row['nomd'];
                                                            // $desc=$row['desc'];
                                                            //$imgd=$row['imgd'];
                                                      
           									 ?>	

												<option value="<?php echo $nomd; ?>"><?php echo $nomd; ?></option>

											<?php } ?>

											</select>
										</div>
									</div>


									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select>
											<?php
                                                include('connexion.php');

                                                  $req= "select `noms`, `descs`, `ims`, `nomd`,`nomd`  from `services` ";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $nomd=$row['nomd'];
                                                             $noms=$row['noms'];
                                                             //$imgd=$row['imgd'];
                                                      
           									 ?>	

												<option value="<?php echo $noms; ?>"><?php echo $noms; ?></option>

											<?php } ?>

											</select>
										</div>
									</div>


									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select>
												<?php
                                                include('connexion.php');

                                                  $req= "select `namea` from `agent`";
                                                 $res=mysqli_query($con,$req);
                                                  while($row = mysqli_fetch_array($res)){
                                                 //echo "<img src='images/".$row['imga'].".jpg' >";

                                                         
                                                             $namea=$row['namea'];
                                                            // $desc=$row['desc'];
                                                             //$imgd=$row['imgd'];
                                                      
           									 ?>	

												<option value="<?php echo $namea; ?>"><?php echo $namea; ?></option>

											<?php } ?>

											</select>
										</div>
									</div>
									
									<div class="mt-10">
										<textarea class="single-textarea" placeholder="Notes" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Notes'" required></textarea>
									</div>


									<!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>

                     <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>


									<?php 
									function build_calender($month,$year){
										$daysOfWeek=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday',      'Sunday');
										$firstDayOfMonth=mktime(0,0,0,$month,1,$year);
										$numberDays=date('t',$firstDayOfMonth);
										$dateComponents=getdate($firstDayOfMonth);
										$monthName=$dateComponents['month'];
										$dayOfWeek=$dateComponents['wday'];
										$dateToday=date('Y-m-d');
										$calender="<table>";
										$calender.="<center><h2> $monthName $year </h2></center>";
										$calender.="<tr>";

										foreach ($daysOfWeek as $day) {
											$calender.="<th> $day </th>";
										}
										$calender.="</tr><tr>";

										if($dayOfWeek>0){
											for($k=0 ; $k<$dayOfWeek ; $k++){
												$calender.="<td></td>";

											}
										}
										$currentDay=1;
										$month=str_pad($month,2,"0",STR_PAD_LEFT);

										while($currentDay<=$numberDays){

											if($dayOfWeek==7){
												$dayOfWeek=0;
												$calender="</tr><tr>";
											}
											$currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
											$date="$year-$month-$currentDayRel";
											$calender.="<td><h4> $currentDay </h4>";
											$calender.="</td>";
											$currentDay++;
											$dayOfWeek++;
										}

										if($dayOfWeek!=7){
											$remainingDays=7-$daysOfWeek;
											for($i=0 ; $i<$remainingDays ; $i++){
												$calender.="<td></td>";
											}
										}

										$calender.="</tr>";
										$calender.="</table>";


										echo $calender;

									
									}
									?>

									<br><div>

									<?php 

										$dateComponents=getdate();
										$month=$dateComponents['mon'];
										$year=$dateComponents['year'];
										echo build_calender($month,$year);



									?>
								</div>

										
									<!-- For Gradient Border Use -->
									<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> 
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
									</div>
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
									</div>
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
									</div>-->
								</form>
								

						<!--	</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
								<div class="single-element-widget">
									<h3 class="mb-30">Switches</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample Switch</p>
										<div class="primary-switch">
											<input type="checkbox" id="default-switch">
											<label for="default-switch"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color Switch</p>
										<div class="primary-switch">
											<input type="checkbox" id="primary-switch" checked>
											<label for="primary-switch"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color Switch</p>
										<div class="confirm-switch">
											<input type="checkbox" id="confirm-switch" checked>
											<label for="confirm-switch"></label>
										</div>
									</div>
								</div>
								<div class="single-element-widget mt-30">
									<h3 class="mb-30">Selectboxes</h3>
									<div class="default-select" id="default-select"">
										<select>
											<option value="1">English</option>
											<option value="1">Spanish</option>
											<option value="1">Arabic</option>
											<option value="1">Portuguise</option>
											<option value="1">Bengali</option>
										</select>
									</div>
								</div>
								<div class="single-element-widget mt-30">
									<h3 class="mb-30">Checkboxes</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample Checkbox</p>
										<div class="primary-checkbox">
											<input type="checkbox" id="default-checkbox">
											<label for="default-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color Checkbox</p>
										<div class="primary-checkbox">
											<input type="checkbox" id="primary-checkbox" checked>
											<label for="primary-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color Checkbox</p>
										<div class="confirm-checkbox">
											<input type="checkbox" id="confirm-checkbox">
											<label for="confirm-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>04. Disabled Checkbox</p>
										<div class="disabled-checkbox">
											<input type="checkbox" id="disabled-checkbox" disabled>
											<label for="disabled-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>05. Disabled Checkbox active</p>
										<div class="disabled-checkbox">
											<input type="checkbox" id="disabled-checkbox-active" checked disabled>
											<label for="disabled-checkbox-active"></label>
										</div>
									</div>
								</div>
								<div class="single-element-widget mt-30">
									<h3 class="mb-30">Radios</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample radio</p>
										<div class="primary-radio">
											<input type="checkbox" id="default-radio">
											<label for="default-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color radio</p>
										<div class="primary-radio">
											<input type="checkbox" id="primary-radio" checked>
											<label for="primary-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color radio</p>
										<div class="confirm-radio">
											<input type="checkbox" id="confirm-radio" checked>
											<label for="confirm-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>04. Disabled radio</p>
										<div class="disabled-radio">
											<input type="checkbox" id="disabled-radio" disabled>
											<label for="disabled-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>05. Disabled radio active</p>
										<div class="disabled-radio">
											<input type="checkbox" id="disabled-radio-active" checked disabled>
											<label for="disabled-radio-active"></label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
					</div>
				</div>
			</section>
			<!-- End Generic Start -->		

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

			


		</body>
	</html>
