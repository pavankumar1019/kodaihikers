<?php
include 'db_connection/db.php';
$sql = "SELECT * FROM kh_dynamic_scrolling_banners";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM kh_animated_gallery";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM kh_book_my_tours ORDER BY date DESC LIMIT 2";
$result4 = $conn->query($sql4);

$sql5 = "SELECT * FROM kh_blog ORDER BY date DESC LIMIT 3";
$result5 = $conn->query($sql5);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kodai Hikers Tours and Travels</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Kodai Hikers is a best tours and travels agency in Kodaikanal, budget tour packages,best hotels services, best vehicle services">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "678fdb16-8824-4b99-b872-4281424bafbd",
    });
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
p{
	text-align: justify;

}
</style>
<style>
	.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:80px;
	right:10px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
	.float1{
	position:fixed;
	width:60px;
	height:60px;
	bottom:160px;
	right:10px;
	background-color:#0063B2FF;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float1{
	margin-top:16px;
}
</style>
</head>

<body>
<a href="https://api.whatsapp.com/send?phone=+919751882527&text=Hello" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<a href="tel:+919751882527" class="float1" target="_blank">
<i class="fa fa-phone my-float1"></i>
</a>
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

			<nav class=" main_nav">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="#"><img class="img-fluid" src="images/kodai_logo.png"  alt=""></a>
								</div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="#">home</a></li>
									<li class="main_nav_item"><a href="about.php">about us</a></li>
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
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="#"><img src="images/kodai-logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="about.php">about us</a></li>
					<li class="menu_item"><a href="hirevehicals.php">hire vehicles</a></li>
					<li class="menu_item"><a href="bookmytour.php">book my tour</a></li>
					<li class="menu_item"><a href="blog.php">blog</a></li>
					<li class="menu_item"><a href="contact.php">contact</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->

			<div class="home_slider_container">

				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {

?>
                  <div class="owl-item home_slider_item">
						<!-- Image by https://unsplash.com/@anikindimitry -->
						<div class="home_slider_background" style="background-image:url(dynamic_scrolling_banners/<?php  echo $row["path"];?>)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX"
								data-animation-out="animate-out fadeOut">
								<h1>Make your</h1>
								<h1>Journey Easy...</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="contact.php">contact
										us<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>
<?php

								}
								}
								
								?>

		

					

				</div>

				<!-- Home Slider Nav - Prev -->
				<div class="home_slider_nav home_slider_prev">
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
						viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_prev'>
								<stop offset='0%' stop-color='white' />
								<stop offset='100%' stop-color='white' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="white" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="white" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
					</svg>
				</div>

				<!-- Home Slider Nav - Next -->
				<div class="home_slider_nav home_slider_next">
					<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px"
						viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_next'>
								<stop offset='0%' stop-color='white' />
								<stop offset='100%' stop-color='white' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
					</svg>
				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
						<li class="home_slider_custom_dot active">
							<div></div>01.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>02.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>03.
						</li>
					</ul>
				</div>

			</div>

		</div>

		<!-- Search -->

		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->

						<div class="search_tabs_container">
							<div
								class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div
									class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/family01.png" alt=""><span>Family Tours</span></div>
								<div
									class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/students.png" alt="">Student Tours</div>
								<div
									class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/couples01.png" alt="">Couple Tours</div>
								<div
									class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
									<img src="images/honeymoon.png" alt="">Honeymoon Tours</div>
							</div>
						</div>

						<!-- Search Panel -->

						<div class="search_panel active">
							<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								
									<div class="container-fluid d-flex p-2 bd-highlight">
										<div class="row">
											<div class="col-lg-4 ">	<img src="./images/kodai_greenvally.jpg" class="img-fluid" width="380px" alt="" srcset=""></div>
											<div class="col-lg-8 ">
												<h1 >Family tours</h1>
												<p class="text-justify" style="color:white;">You take an above-ground view of the Kodaikanal Lake, and you will be amKodai Hikers features the list of top family holiday packages in Kodaikanal. Be it  any season of the year our packages give you the best options of embarking on an enjoyable family vacation in kodaikanal.  </p>
											<a href="bookmytour.php" class="button search_button">View All Packages<span></span><span></span><span></span></a>
											</div>
										  </div>
							

									</div>
								
							</form>
						</div>

						<!-- Search Panel -->

						<div class="search_panel">
							<form action="#" id="search_form_2"	class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
								<div class="container-fluid d-flex p-2 bd-highlight">
									<div class="row">
										<div class="col-lg-4 col-sm-12">	<img src="./images/kodai_lakeviewpoint.jpg"  class="img-fluid" width="380px" alt="" srcset=""></div>
										<div class="col-lg-8 col-sm-12">
											<h1 >Student tours</h1>
											<p class="text-justify" style="color:white;">Students can enjoy the beauty of mother Nature in kodaikanal.And also learn about solar observatory.</p>
											<a href="bookmytour.php" class="button search_button">View All Packages<span></span><span></span><span></span></a>
										</div>
									  </div>
						

								</div>
						</form>
						</div>

						<!-- Search Panel -->

						<div class="search_panel">
							<form action="#" id="search_form_3"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="container-fluid d-flex p-2 bd-highlight">
									<div class="row">
										<div class="col-lg-4 col-sm-12">	<img src="./images/kodai_lakeviewpoint.jpg" class="img-fluid"  width="380px" alt="" srcset=""></div>
										<div class="col-lg-8 col-sm-12">
											<h1 >Couple tours</h1>
											<p class="text-justify" style="color:white;">The newly married couples as they come here due to the romantic breeze it holds in its ozone.Couples can enjoy a romantic afternoon on their honeymoon trip 
</p>
											<a href="bookmytour.php" class="button search_button">View All Packages<span></span><span></span><span></span></a>
										</div>
									  </div>
						

								</div>
							</form>
						</div>

						<!-- Search Panel -->

						<div class="search_panel">
							<form action="#" id="search_form_3"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="container-fluid d-flex p-2 bd-highlight">
									<div class="row">
										<div class="col-lg-4 col-sm-12">	<img src="./images/kodai_lakeviewpoint.jpg" class="img-fluid"  width="380px" alt="" srcset=""></div>
										<div class="col-lg-8 col-sm-12">
											<h1 >Honeymoon</h1>
											<p class="text-justify" style="color:white;">Kodaikanal, the princess of hill station, is also mainly known for being honeymoon destinations among other places in India. Get set for a perfect paradise honeymoon.  Kodaikanal is one the best destination in India for a romantic honeymoon special. </p>
											<a href="bookmytour.php" class="button search_button">View All Packages<span></span><span></span><span></span></a>
										</div>
									  </div>
						

								</div>
							</form>
						</div>


						<!-- Search Panel -->

						<div class="search_panel">
							<form action="#" id="search_form_5"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_item">
									<div>destination</div>
									<input type="text" class="destination search_input" required="required">
								</div>
								<div class="search_item">
									<div>check in</div>
									<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
								</div>
								<div class="search_item">
									<div>check out</div>
									<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
								</div>
								<div class="search_item">
									<div>adults</div>
									<select name="adults" id="adults_5" class="dropdown_item_select search_input">
										<option>01</option>
										<option>02</option>
										<option>03</option>
									</select>
								</div>
								<div class="search_item">
									<div>children</div>
									<select name="children" id="children_5" class="dropdown_item_select search_input">
										<option>0</option>
										<option>02</option>
										<option>03</option>
									</select>
								</div>
								<button
									class="button search_button">search<span></span><span></span><span></span></button>
							</form>
						</div>

						<!-- Search Panel -->

						<div class="search_panel">
							<form action="#" id="search_form_6"
								class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_item">
									<div>destination</div>
									<input type="text" class="destination search_input" required="required">
								</div>
								<div class="search_item">
									<div>check in</div>
									<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
								</div>
								<div class="search_item">
									<div>check out</div>
									<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
								</div>
								<div class="search_item">
									<div>adults</div>
									<select name="adults" id="adults_6" class="dropdown_item_select search_input">
										<option>01</option>
										<option>02</option>
										<option>03</option>
									</select>
								</div>
								<div class="search_item">
									<div>children</div>
									<select name="children" id="children_6" class="dropdown_item_select search_input">
										<option>0</option>
										<option>02</option>
										<option>03</option>
									</select>
								</div>
								<button
									class="button search_button">search<span></span><span></span><span></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class=" container-fluid intro">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="intro_title text-center">ABOUT TOURS AND TRAVELS</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="intro_text text-center">
							<p>      We are always searching for ways to make your holidays as beautiful as possible </p>
						</div>
					</div>
				</div>
				<div class="row intro_items">

					<!-- -->
					<!-- Intro Item -->

					<div class="col-lg-12 intro_col">
						<div class=" intro_item">
							
							<!-- Image by https://unsplash.com/@willianjusten -->
							<p>	We offer best solution for your travel needs. We are one of the professional travelling agencies. We organize customized holiday tours by considering the requirements of our client’s. 

								</p>
							<br>
							<h2 style="color:black;">About Kodaikanal</h2>
							<p>	Kodaikanal is  the ‘Princess of Hill Station,' Kodaikanal is a place of ethereal beauty and paradisiac charm. Being centered on a beautiful man-made lake, the town gorgeously rambles up and down the hillsides.  </p>
							<a href="https://www.kodaihikers.com/about.php#about" class="button search_button">Read More...<span></span><span></span><span></span></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- CTA -->

		<div class="cta">
		
			<!-- Image by https://unsplash.com/@thanni -->
			<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col">

						<!-- CTA Slider -->

						<div class="cta_slider_container">
							<div class="owl-carousel owl-theme cta_slider">
							<?php
                            if ($result3->num_rows > 0) {
                                // output data of each row
                                while($row3 = $result3->fetch_assoc()) {
                              
                                                            ?>
								
									<div class="owl-item cta_item text-center">
									<div class="cta_title">Image Gallery</div>
									<img src="./animated_gallery/<?php echo $row3["path"]; ?>" class="img-fluid rounded mx-auto d-block" style="width:600px;" alt="" srcset="">
									<p class="cta_text"><?php echo $row3["description"]; ?></p>
									<!-- <div class="button cta_button">
										<div class="button_bcg"></div><a href="#">Read more<span></span><span></span><span></span></a>
									</div> -->
								</div>
                                                            <?php
								}
								}
								?>	
							</div>

							<!-- CTA Slider Nav - Prev -->
							<div class="cta_slider_nav cta_slider_prev">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
									height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
									xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_prev'>
											<stop offset='0%' stop-color='#FFFFFF' />
											<stop offset='100%' stop-color='#FFFFFF' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#FFFFFF" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#FFFFFF" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- CTA Slider Nav - Next -->
							<div class="cta_slider_nav cta_slider_next">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
									height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
									xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_next'>
											<stop offset='0%' stop-color='#FFFFFF' />
											<stop offset='100%' stop-color='#FFFFFF' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#FFFFFF" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#FFFFFF" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>

		<!-- Offers -->

		<div class="offers">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">The Best Tour Packages</h2>
					</div>
				</div>
				<div class="row offers_items">
				<?php
                            if ($result4->num_rows > 0) {
                                // output data of each row
                                while($row4 = $result4->fetch_assoc()) {
                              
                                                            ?>
			<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<img src="./tourpackages/<?php echo $row4["photo"];?>" class="img-fluid" alt="">
										<div class="offer_name"><a href="#"><?php echo $row4["package_name"]; ?></a></div>
									</div>
								</div>
								<div class="col-lg-12">
								<br>
									<div class="offers_content">
									<br>
										<div class="offers_price">₹ <?php echo $row4["price"]; ?> <span> <?php echo $row4["no_of_days"]; ?></span></div>
										
										<p class="offers_text"><?php echo $row4["litnerary"]; ?></p>
										<div class="offers_icons">
										<!-- <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor
											sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p> -->
										</div>
										<div class="offers_link"><a href="bookmytour.php">View All Packages</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
														   
														    <?php
								}
								}
								?>
					<!-- Offers Item -->
					

					<!-- Offers Item -->
					

					<!-- Offers Item -->
					
					<!-- Offers Item -->
					

				</div>
			</div>
		</div>

		<!-- Testimonials -->

		<div class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Testimonials</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="row d-flex justify-content-center">
										<img src="./images/kodai_studenttour.jpg" style="width:200px; height: 200px;" class="img-fluid rounded-circle" alt="">
										<div class="col-12  d-flex justify-content-center">
											<!-- <div class="rating rating_4">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  -->
										</div>
										<br>
										<div class="col-12  d-flex justify-content-center">
											<div class="test_name">Very nice and comfortable</div>
										</div>
										<div class="col-12  d-flex justify-content-center">
											<div >"kodai hikers is the best travel website"</div>
										</div>
									</div>
									
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="row d-flex justify-content-center">
										<img src="./images/kodai_studenttour.jpg" style="width:200px; height: 200px;" class="img-fluid rounded-circle" alt="">
										<div class="col-12  d-flex justify-content-center">
											<!-- <div class="rating rating_4">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  -->
										</div>
										<br>
										<div class="col-12  d-flex justify-content-center">
											<div class="test_name">Awesome</div>
										</div>
										<div class="col-12  d-flex justify-content-center">
											<div >"kodai hikers is the best travel website"</div>
										</div>
									</div>
									
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="row d-flex justify-content-center">
										<img src="./images/kodai_studenttour.jpg" style="width:200px; height: 200px;" class="img-fluid rounded-circle" alt="">
										<div class="col-12  d-flex justify-content-center">
											<!-- <div class="rating rating_4">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  -->
										</div>
										<br>
										<div class="col-12  d-flex justify-content-center">
											<div class="test_name">It's the best tours and travels website</div>
										</div>
										<div class="col-12  d-flex justify-content-center">
											<div >"kodai hikers is the best travel website"</div>
										</div>
									</div>
									
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="row d-flex justify-content-center">
										<img src="./images/kodai_studenttour.jpg" style="width:200px; height: 200px;" class="img-fluid rounded-circle" alt="">
										<div class="col-12  d-flex justify-content-center">
											<!-- <div class="rating rating_4">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  -->
										</div>
										<br>
										<div class="col-12  d-flex justify-content-center">
											<div class="test_name">It's gives happy and memoriable moments</div>
										</div>
										<div class="col-12  d-flex justify-content-center">
											<div >"kodai hikers is the best travel website"</div>
										</div>
									</div>
									
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="row d-flex justify-content-center">
										<img src="./images/kodai_studenttour.jpg" style="width:200px; height: 200px;" class="img-fluid rounded-circle" alt="">
										<div class="col-12  d-flex justify-content-center">
											<!-- <div class="rating rating_4">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  -->
										</div>
										<br>
										<div class="col-12  d-flex justify-content-center">
											<div class="test_name">Best Tours and Travels </div>
										</div>
										<div class="col-12  d-flex justify-content-center">
											<div >"kodai hikers is the best travel website"</div>
										</div>
									</div>
									
									</div>
								</div>

								<!-- Testimonial Item -->
								

							</div>

							<!-- Testimonials Slider Nav - Prev -->
							<div class="test_slider_nav test_slider_prev">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
									height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
									xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_prev'>
											<stop offset='0%' stop-color='#441bfa' />
											<stop offset='100%' stop-color='#441bfa' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#441bfa" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#441bfa" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- Testimonials Slider Nav - Next -->
							<div class="test_slider_nav test_slider_next">
								<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px"
									height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
									xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_next'>
											<stop offset='0%' stop-color='#441bfa' />
											<stop offset='100%' stop-color='#441bfa' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#441bfa" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>

		<div class="trending">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">famous places in kodai kanal</h2>
					</div>
				</div>
				<div class="row trending_container">

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodaikanal_lake.webp"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Kodaikanal Lake</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place1">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_bryantpark.jpg"
									alt="https://unsplash.com/@grovemade"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">Bryant Park</a></div>
								<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
								<!-- <div class="trending_location">read more</div> -->
								<a href="tourplaces.php#place2">Read more</a>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_silvercascadefalls.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Silver Cascade Falls</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place3">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_bearsholafalls.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Bear Shola Falls</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place4">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_coakerswalk.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Coaker's Walk </a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place5">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_guinacaves.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">guna caves</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place6">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_moirpoint.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Moir Point</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place7">Read more</a>
						</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/kodai_dolphinsnose.jpg"
								alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">Dolphin's Nose</a></div>
							<!-- <div class="trending_price">It is believed that the Pandavas used to cook their meals in these caves,</div> -->
							<!-- <div class="trending_location">read more</div> -->
							<a href="tourplaces.php#place8">Read more</a>
						</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="contact">
			<div class="contact_background" style="background-image:url(images/kodai_contactbackground.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact_image">

						</div>
					</div>
					<div class="col-lg-7 p-4">
						<div class="contact_form_container">
							<div class="contact_title">get in touch</div>
							<form id="fupForm" name="form1" method="post" class="contact_form">
								<input type="text" id="name" name="name" class="contact_form_name input_field"
									placeholder="Name"  required="required" data-error="Name is required.">
								<input type="text" id="email" name="email" class="contact_form_email input_field"
									placeholder="E-mail" required="required" data-error="Email is required.">
								<input type="text" onkeypress="return onlyNumberKey(event)" id="number" name="number" class="contact_form_subject input_field"
									placeholder="Phone Number" required="required" data-error="Subject is required.">
								<textarea id="message" class="text_field contact_form_message"
									name="message" rows="4" placeholder="Message" required="required"
									data-error="Please, write us a message."></textarea>
								<button type="submit" id="butsave" class="form_submit_button button">send
									message<span></span><span></span><span></span></button>
								
							</form>
							<div id="success" style="color:red;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_content footer_about">
								<div class="logo_container footer_logo">
									<div class="logo"><a href="#"><img class="kologo" src="images/kodai_logo.png"
												alt=""></a></div>
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
									<li class="tag_item"><a href="hirevehicals.php">Hire vehicles</a></li>
									<li class="tag_item"><a href="bookvehicle.php#contact">Booking Forms</a></li>
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
										<div>
											<div class="contact_info_icon"><img src="images/kodai_location_icon.png" alt="">
											</div>
										</div>
										<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,&nbsp; Kodaikanal-624103,Tamilnadu</div>							</li>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/kodai_iconphone.png" alt="">
											</div>
										</div>
										<div class="contact_info_text">+91 9751882527 <br> +91 8073130545</div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/kodai_iconemail.png" alt=""></div>
										</div>
										<div class="contact_info_text"><a
												href="mailto:contactme@gmail.com?Subject=Hello"
												target="_top">info@kodaihikers.com</a></div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/kodai_iconweb.png" alt="">
											</div>
										</div>
										<div class="contact_info_text"><a href="https://www.kodaihikers.com">
												www.kodaihikers.com
											</a></div>
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
							<div>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> Rats
								Technologies
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
					<div class="col-lg-9 order-lg-2 order-1">
						<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
							<div class="footer_nav">
								<ul class="footer_nav_list">
									<li class="footer_nav_item"><a href="#">home</a></li>
									<li class="footer_nav_item"><a href="about.php">about us</a></li>
									<li class="footer_nav_item"><a href="hirevehicals.php">hire vehicles</a></li>
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
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>
<script>
	var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
</script>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#number').val();
		var message = $('#message').val();
		if(name!="" && email!="" && phone!="" && message!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					name: name,
					email: email,
					phone: phone,
					message: message				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Message Sent successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
    </script>
</body>

</html>