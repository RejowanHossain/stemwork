<!doctype html>
<html lang="en">

<head>
	<!-- Basic Page Needs
	================================================== -->
	<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
	<!-- <div class="Loader"></div> -->
    <div class="clearfix"></div>
	<div class="wrapper">
		<!-- Start Navigation -->
		<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

			<div class="container">            
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">
						<img src="assets/img/logo/logo.svg" class="logo logo-display" alt="">
						<img src="assets/img/logo/logo.svg" class="logo logo-scrolled" alt="">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="active">
							<input name="input" type="text" class="form-control hide-input">
						</li>
						<li class="dropdown">
							<a href="employee-joblist.php" class="dropdown-toggle">Jobs</a>
						</li>
						<li class="dropdown">
							<a href="employers.php" class="dropdown-toggle">Employers</a>
						</li>
						
						<li class="dropdown megamenu-fw"><a href="about.php" class="dropdown-toggle">About</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<!-- <li><a href="register.html"><i class="fa fa-sign-in"></i>Sign Up</a></li> -->
						<li><a href="employee-joblist.php" class="findjob-btn">Find Jobs</a></li>
						<li><a href="company-register.php"  class="signin">Post Job</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		
		<!-- ====================== Job List Starts ================= -->
        <section class="advance-search">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4 col-sm-12">
                        <div class="full-sidebar-wrap">
                            
                            <a href="javascript:void(0)" onclick="openNav()" class="btn btn-dark full-width mrg-bot-20 hidden-lg hidden-md hidden-xl"><i class="ti-filter mrg-r-5"></i>Filter Search</a>
                            
                            
                            <div class="show-hide-sidebar hidden-xs hidden-sm">
                                <!-- Search Job -->
                                <div class="sidebar-widgets">
                                
                                    <div class="ur-detail-wrap">
                                        <div class="ur-detail-wrap-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Keyword</label>
                                                    <input type="text" class="form-control" placeholder="Job Title or Keyword">
                                                </div>
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control" placeholder="ex. New York">
                                                </div>
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select id="choose-category" class="form-control">
                                                        <option>Choose Category</option>
                                                        <option>Banking Job</option>
                                                        <option>IT / Software</option>
                                                        <option>Medical & Hospital</option>
                                                        <option>Networking</option>
                                                        <option>Automotive</option>
                                                        <option>Business Development</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Job Type</label>
                                                    <select id="choose-type" class="form-control">
                                                        <option>Job Type</option>
                                                        <option>Onsite</option>
                                                        <option>Remote</option>
                                                        <option>Contractual</option>
                                                        <option>Hybrid</option>
                                                    </select>
                                                </div>

                                                 <div class="form-group">
                                                    <label>Experience</label>
                                                    <select id="choose-experience" class="form-control">
                                                        <option>Experience</option>
                                                        <option>0 - 1 Year</option>
                                                        <option>1 - 2 Years</option>
                                                        <option>2 - 4 Years</option>
                                                        <option>5 Years+</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Expected Range</label>
                                                    <select id="choose-range" class="form-control">
                                                        <option>Choose Range</option>
                                                        <option>Under 30k BDT</option>
                                                        <option>30k - 50k BDT</option>
                                                        <option>50k+ BDT</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary full-width">Find Jobs</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- /Search Job -->
                            </div>
                            
                        </div>
                    </div>
                
                    <div class="col-md-8 col-sm-12">
                        <!--Browse Job -->							
                        <div class="row">
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout fr1">
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                    <div class="brows-job-type"><span class="freelanc">Contractual</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-2.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">Web Designing</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$3.2K - $5K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">7 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout fr1">
                                    <div class="brows-job-type"><span class="full-time">Onsite</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-3.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">App Developer</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$4.2K - $5K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">2 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout fr1">
                                    <div class="brows-job-type"><span class="part-time">Remote</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-4.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">Software Developer</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$6.5K - $8K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">02 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout">
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                    <div class="brows-job-type"><span class="freelanc">Hybrid</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-5.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">iPhone Developer</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$3.7K - $6K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">04 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout">
                                    <div class="brows-job-type"><span class="part-time">Onsite</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-6.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">UI/UX Designer</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$3.2K - $5K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">05 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout">
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                    <div class="brows-job-type"><span class="full-time">Remote</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-7.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">Content Writer</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$304K - $6K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">02 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout">
                                    <div class="brows-job-type"><span class="enternship">Internship</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-7.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">Project Manager</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$37.5K - $8K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">07 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single New Job -->
                            <div class="col-md-4 col-sm-6">
                                <div class="job-instructor-layout">
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                    <div class="brows-job-type"><span class="full-time">Hybrid</span></div>
                                    <div class="job-instructor-thumb">
                                        <a href="job-detail-2.html"><img src="assets/img/com-1.jpg" class="img-fluid" alt="" /></a>
                                    </div>
                                    <div class="job-instructor-content">
                                        <h4 class="instructor-title"><a href="job-detail-2.html">Wordpress Expert</a></h4>
                                        <div class="instructor-skills">
                                            CSS3, HTML5, Javascript, Bootstrap, Jquery
                                        </div>
                                    </div>
                                    <div class="job-instructor-footer">
                                        <div class="instructor-students">
                                            <h5 class="instructor-scount">$10.2K - $16K</h5>
                                        </div>
                                        <div class="instructor-corses">
                                            <span class="c-counting">02 Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Browse Job-->
                        
                        
                        <div class="row mrg-0">
                            <ul class="pagination">
                                <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li> 
                                <li><a href="#">4</a></li> 
                                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
                                <li><a href="#"><i class="ti-arrow-right"></i></a></li> 
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
		<!-- ====================== Job List Ends ================= -->



		<!-- ============================ Before Footer ================================== -->
		<div class="before-footer">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="jb4-form-fields">
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter your email address">
								<span class="input-group-btn">
									<button class="btn theme-bg" type="submit"><span
											class="fa fa-paper-plane-o"></span></button>
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 hill">
						<ul class="job stock-facts">
							<li><span>2744</span></br>Jobs Posted</li>
							<li><span>2365</span></br>Jobs Posted</li>
							<li><span>2021</span></br>Freelancer</li>
							<li><span>7542</span></br>Companies</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- ============================ Before Footer ================================== -->

		<!-- ============================ Footer Start ================================== -->
		<footer class="dark-footer skin-dark-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3">
							<div class="footer-widget">
								<img src="assets/img/logo-white.png" class="img-footer" alt="" />
								<div class="footer-add">
									<p>Collins Street West, Victoria,</br> Australia (AU4578).</p>
									<p><strong>Email:</strong></br>hello@jobstock.com</p>
									<p><strong>Call:</strong></br>91 855 742 62548</p>
								</div>

							</div>
						</div>
						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">Navigations</h4>
								<ul class="footer-menu">
									<li><a href="home-6.html">New Home Design</a></li>
									<li><a href="browse-candidate-list.html">Browse Candidates</a></li>
									<li><a href="browse-employer-list.html">Browse Employers</a></li>
									<li><a href="advance-search-2.html">Advance Search</a></li>
									<li><a href="checkout.html">Job With Map</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">The Highlights</h4>
								<ul class="footer-menu">
									<li><a href="index-2.html">Home Page 2</a></li>
									<li><a href="index-3.html">Home Page 3</a></li>
									<li><a href="index-4.html">Home Page 4</a></li>
									<li><a href="index-5.html">Home Page 5</a></li>
									<li><a href="login.html">LogIn</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-2">
							<div class="footer-widget">
								<h4 class="widget-title">My Account</h4>
								<ul class="footer-menu">
									<li><a href="candidate-dashboard.html">Dashboard</a></li>
									<li><a href="applications.html">Applications</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="candidate-resume.html">resume.html</a></li>
									<li><a href="register.html">SignUp Page</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-3">
							<div class="footer-widget">
								<h4 class="widget-title">Download Apps</h4>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-android theme-cl"></i>
										</div>
										<div class="os-app-caps">
											Google Play
											<span>Get It Now</span>
										</div>
									</div>
								</a>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-apple theme-cl"></i>
										</div>
										<div class="os-app-caps">
											App Store
											<span>Now it Available</span>
										</div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-6 col-md-6">
							<p class="mb-0">© 2019 Job Stock. Designd By <a href="https://themezhub.com">Themez Hub</a>
								All Rights Reserved</p>
						</div>

						<div class="col-lg-6 col-md-6 text-right">
							<ul class="footer-bottom-social">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
								<li><a href="#"><i class="ti-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- ============================ Footer End ================================== -->

		<!-- Scripts
			================================================== -->
		<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
		<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
		<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
		<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
		<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
		<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
		<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
		<!-- Custom Js -->
		<script src="assets/js/custom.js"></script>
		<script type="text/javascript" src="assets/plugins/js/counterup.min.js"></script>

	</div>
</body>

</html>