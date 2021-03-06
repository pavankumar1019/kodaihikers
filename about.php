<?php
include 'db_connection/db.php';
$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);

$sql5 = "SELECT * FROM kh_blog ORDER BY date DESC LIMIT 3";
$result5 = $conn->query($sql5);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="travels in kodaikanal,classic travels kodaikanal,kodaikanal trip from bangalore,kodaikanal trekking,kodaikanal places to visit,kodaikanal tours,kodaikanal tours packages,hiking in kodaikanal,vehicles,vehicles for tourism in kodaikanal,budget tours,students tours to kodaikanal,best tours and travels agency in Kodaikanal,best hotels in kodaikanal,kodaikanal tours,kodaikanal quality tour services,tour operators in kodaikanal,best travel agency in kodaikanal,kodaikanal travels car">
  <meta name="author" content="Saravanan">
  <link rel="icon" href="./kodai_logo.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<style>
p{
	text-align: justify;

}
</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+91 9751882527</div>
						<div class="social">
							<ul class="social_list">
							<?php
                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while($row2 = $result2->fetch_assoc()) {
                              
                                                            ?>
									<li class="social_list_item"><a href="<?php echo $row2["links"]; ?>"><?php echo $row2["social_media_icon"]; ?></a></li>
                                                            <?php
								}
								}
								?>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="#">KODAI HIKERS</a></div>
							<!-- <div class="user_box_register user_box_link"><a href="#">register</a></div> -->
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img class="img-fluid" src="images/kodai_logo.png"  alt=""></a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="#">about us</a></li>
								<li class="main_nav_item"><a href="hirevehicals.php">hire vehicles</a></li>
								<li class="main_nav_item"><a href="bookmytour.php">book my tour</a></li>
								<li class="main_nav_item"><a href="blog.php">blogs</a></li>
								<li class="main_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#">
				<!-- <img src="images/kodai_logo.png" class="klogo" alt=""> -->
			</a></div>
			<ul>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="#">about us</a></li>
				<li class="menu_item"><a href="hirevehicals.php">hire vehicles</a></li>
				<li class="menu_item"><a href="bookmytour.php">book my tour</a></li>
				<li class="menu_item"><a href="blog.php">blogs</a></li>
				<li class="menu_item"><a href="contact.php">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/kodai_lakeviewpoint.jpg"></div>
		<div class="home_content">
			<div class="home_title">about us</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="intro_image"><img src="images/Kodai_aboutusimg.png" alt=""></div>
				</div>
				<div class="col-lg-5">
					<div class="intro_content">
						<div class="intro_title">About Kodai Hikers tours and travels</div>
						<p class="intro_text">We are always searching for ways to make your holidays as beautiful as possible</p>
						
					</div>
					<div class="intro_content">
						
						<p class="intro_text">We offer best solution for your travel needs. We are one of the professional travelling agencies. We organize customized holiday tours by considering the requirements of our client’s. We are offering several four packages like family tours, student, couple and honeymoon tours packages with best price and quality services. Kodaikanal is also known as the princess of hills stations. Kodaikanal is one of the most visited tourist spot in India. Kodaikanal has lots of attractions you can explore the paradise of nature’s beauty. We make your journey imperishable.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-5">
					<div class="intro_content">
						<div class="intro_title">About Kodaikanal</div>
						<p class="intro_text">We are always searching for ways to make your holidays as beautiful as possible</p>
						
					</div>
					<div class="intro_content">
						
						<p class="intro_text">	Kodaikanal is  the ‘Princess of Hill Station,' Kodaikanal is a place of ethereal beauty and paradisiac charm. Being centered on a beautiful man-made lake, the town gorgeously rambles up and down the hillsides. Nestled amidst the patches of Shola forest and evergreen broadleaved fauna, Kodaikanal overlooks the majestic Western Ghats. Every year millions of tourists from across the globe frequent this magnificent hill station of South India. It has also become very famous amongst the honeymooners and passionate bikers. Avoiding the heat-soaked plains, disembark into the misty chill of Kodaikanal. Get enchanted by the untouched beauty of nature and unravel the grandeur of the erstwhile colonialism. Visit the places of unparalleled beauty such as Kodaikanal Lake, Berijam Lake, Pine Forest, Pillar Rocks, Bryant Park and many others. Spend a marvelous vacation amidst the majestic hills of Kodai.</p>
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="intro_image"><img src="images/kodai_pambarfalls.jpg"  width="600px" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Stats -->

	<!-- <div class="stats">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">years statistics</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<p class="stats_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum. Aenean in lacus ligula. </p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_years">
						<div class="stats_years_last">2016</div>
						<div class="stats_years_new float-right">2017</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_contents"> -->
						
						<!-- Stats Item -->
						<!-- <div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_1.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">1642</div>
									<div class="stats_type">Clients</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="1642" data-y="3527" data-color="#31124b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_1.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">3527</div>
									<div class="stats_type">Clients</div>
								</div>
							</div>
						</div> -->
						
						<!-- Stats Item -->
						<!-- <div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_2.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">768</div>
									<div class="stats_type">Returning Clients</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="768" data-y="145" data-color="#a95ce4">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_2.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">145</div>
									<div class="stats_type">Returning Clients</div>
								</div>
							</div>
						</div> -->

						<!-- Stats Item -->
						<!-- <div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_3.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">11546</div>
									<div class="stats_type">Reach</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="11546" data-y="9321" data-color="#fa6f1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_3.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">9321</div>
									<div class="stats_type">Reach</div>
								</div>
							</div>
						</div> -->

						<!-- Stats Item -->
						<!-- <div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_4.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">3729</div>
									<div class="stats_type">Items</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="3729" data-y="17429" data-color="#fa9e1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_4.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">17429</div>
									<div class="stats_type">More Items</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Add -->

	<!-- <div class="add">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="add_container">
						<div class="add_background" style="background-image:url(images/kodai_aboutbackground\ 123.jpg)" width="930px" height="269px"></div>
						<div class="add_content">
							<h1 class="add_title">Hire vehicals</h1>
							<div class="add_subtitle"><span></span></div>
							<div class="button add_button"><div class="button_bcg"></div><a href="#">click here<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Milestones -->

	<!-- <div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<!-- <div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.png" alt=""></div>
						<div class="milestone_counter" data-end-value="255">0</div>
						<div class="milestone_text">Clients</div>
					</div>
				</div> -->

				<!-- Milestone
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.png" alt=""></div>
						<div class="milestone_counter" data-end-value="1176">0</div>
						<div class="milestone_text">Projects</div>
					</div>
				</div> -->

				<!-- Milestone -->
				<!-- <div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.png" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Tourist Places in Kodai Kanal</div>
					</div>
				</div> -->

				<!-- Milestone
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.png" alt=""></div>
						<div class="milestone_counter" data-end-value="127">0</div>
						<div class="milestone_text">Coffees</div>
					</div>
				</div> -->

			<!-- </div>
		</div>
	</div>  -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/kodai_logo.png"  alt=""></a></div>
							</div>
							<p class="footer_about_text">We are always searching for ways to make your holidays as beautiful as possible</p>
							<ul class="footer_social_list">
							<?php
                            if ($result1->num_rows > 0) {
                                // output data of each row
                                while($row1 = $result1->fetch_assoc()) {
                              
                                                            ?>
									<li class="footer_social_item"><a href="<?php echo $row1["links"]; ?>"><?php echo $row1["social_media_icon"]; ?></a></li>
                                                            <?php
								}
								}
								?>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">

								<!-- Footer blog item -->

								<?php
                            if ($result5->num_rows > 0) {
                                // output data of each row
                                while($row5 = $result5->fetch_assoc()) {
                              
                                                            ?>
									<li class="social_list_item"><a href="<?php echo $row2["links"]; ?>"><?php echo $row2["social_media_icon"]; ?></a></li>
									<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img src="./blogimages/<?php  echo $row5["image"];?>" alt="https://unsplash.com/@avidenov"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.php"><?php echo $row5["title"]; ?> </a>
										</div>
										<div class="footer_blog_date" style="color:red;"><?php echo $row5["date"]; ?></div>
									</div>
								</div>

                                                            <?php
								}
								}
								?>
								

								<!-- Footer blog item -->
								

								<!-- Footer blog item -->
								

							</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="hirevehicals.php">Hire vehicles</li>
								<li class="tag_item"><a href="bookvehicle.php#contact">Booking forms</a></li>
								
								<li class="tag_item"><a href="bookmytour.php">Book My Tour</a></li>
								<li class="tag_item"><a href="contact.php#contact">Get in Touch</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_location_icon.png" alt=""></div></div>
									<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,&nbsp; Kodaikanal-624103,Tamilnadu</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconphone.png" alt=""></div></div>
									<div class="contact_info_text">+91 9751882527 <br> +91 8073130545</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconemail.png" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">info@kadaihikers.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconweb.png" alt=""></div></div>
									<div class="contact_info_text"><a href="https://www.kodaihikers.com">www.kodaihikers.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rats
Technologies
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.php">home</a></li>
								<li class="footer_nav_item"><a href="#">about us</a></li>
								<li class="footer_nav_item"><a href="hirevehicals.php"> hire vehicles</a></li>
								<li class="footer_nav_item"><a href="bookmytour.php">book my tour</a></li>
								<li class="footer_nav_item"><a href="blog.php">blogs</a></li>
								<li class="footer_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about_custom.js"></script>

</body>

</html>