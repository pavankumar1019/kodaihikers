
<?php
include 'db_connection/db.php';
$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>bookmytour</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
						<div class="phone">+123456789</div>
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
							<div class="user_box_login user_box_link"><a href="#">login</a></div>
							<div class="user_box_register user_box_link"><a href="#">register</a></div>
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
							<div class="logo"><a href="#"><img class="img-fluid" src="images/kodai_logo.png" alt=""></a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="hirevehicals.php">hire vehicals</a></li>
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
			<div class="logo menu_logo"><a href="#"><img class="img-fluid" src="/images/kodai_logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="about.php">about us</a></li>
				<li class="menu_item"><a href="hirevehicals.php">hire vehicals</a></li>
				<li class="menu_item"><a href="bookmytour.php">book my tour</a></li>
				<li class="menu_item"><a href="blog.php">blogs</a></li>
				<li class="menu_item"><a href="contact.php">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/blog_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">book my tour</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->

				<div class="col-lg-8">
					
					<div class="blog_post_container">

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_1.jpg" alt="https://unsplash.com/@anniespratt">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center" style="width:160px;">

									<div class="blog_post_day">₹ &nbsp;<strong>10,000</strong></div>
									<div class="blog_post_month">1 person</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">3 nights 4 days</a></li>
								    <li class="blog_post_meta_item"><a href="">₹ 10,000</a></li>
								    <li class="blog_post_meta_item"><a href="">1 person</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#">3 Nights to Ooty & Kodaikanal by Own Car</a></div>
							<div class="blog_post_text">
								<p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
							</div>
							<div class="content">
							<div class="blog_post_title"><a href="#">Inclusions</a></div>
							<div class="blog_post_text ">
								<p>Accomodation as per Itinerary
Daily Breakfast
Important Notes:-
The distance mentioned in the itinerary is correct, however, travel time depends on traffic and condition of the road
Route and stops are only suggested. Since it is a self-drive package, you could amend the route as you desire
Entry fees, wherever applicable, shall have to be paid for directly at the venue
All the guests are required to carry valid photo identities (Passport/Driving License/Voter ID Card). It is mandatory to carry a valid driving license.
Suggested activities are not included in the itinerary
Toll charges and Road taxes are not included in the cost of the package
If you plan to travel with an infant, then it is advised to carry an infant car seats</p>
							</div>
							<div class="blog_post_title "><a href="#">Exclusions</a></div>
							<div class="blog_post_text ">
								<p>
5% GSt Extra
Anything not mentioned under ‘Package Inclusions’
All personal expenses, optional tours and extra meals
Camera fees, alcoholic/non-alcoholic beverages, mineral water and starters
Entrance fees at all monuments and museums mentioned in the itinerary
Medical and travel insurance
</p>
							</div>
							<br>

							<div class="button home_slider_button " >
									<div class="button_bcg"></div><a href="contact.php">book now
										us<span></span><span></span><span></span></a>
								</div>
								</div>
								<a href="#" class="show_hide">Rad More</a>
						</div>

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_2.jpg" alt="https://unsplash.com/@tschax">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">01</div>
									<div class="blog_post_month">Dec, 2017</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">by Lore Papp</a></li>
									<li class="blog_post_meta_item"><a href="">Uncategorized</a></li>
									<li class="blog_post_meta_item"><a href="">3 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#">Try these new dream destinations</a></div>
							<div class="blog_post_text">
								<p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
							</div>
							<div class="blog_post_link"><a href="#">read more</a></div>
						</div>

						<!-- Blog Post -->
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_3.jpg" alt="https://unsplash.com/@stilclassics">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">01</div>
									<div class="blog_post_month">Dec, 2017</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">by Lore Papp</a></li>
									<li class="blog_post_meta_item"><a href="">Uncategorized</a></li>
									<li class="blog_post_meta_item"><a href="">3 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#">Try these new dream destinations</a></div>
							<div class="blog_post_text">
								<p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
							</div>
							<div class="blog_post_link"><a href="#">read more</a></div>
						</div>

					</div>
						
				
				</div>

				<!-- Blog Sidebar -->

				
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
								<div class="logo"><a href="#"><img src="images/kodai_logo.png" alt=""></a></div>
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
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/kodai_footerblog1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.php">Beauty of river.</a></div>
									<div class="footer_blog_date">Feb 14, 2021</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/kodai_footerblog2.png" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.php">Chettiar Park.</a></div>
									<div class="footer_blog_date">Feb 14, 2021</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/kodai_footerblog3.webp" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.php">Kodaikanal.</a></div>
									<div class="footer_blog_date">Feb 14, 2021</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">Hire vehicals</a></li>
								<li class="tag_item"><a href="#">Booking forms</a></li>
								
								<li class="tag_item"><a href="#">Give feedback</a></li>
								<li class="tag_item"><a href="#">videos</a></li>
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
									<div class="contact_info_text">Kodaikanal.Madurai-Tamil Nadu</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconphone.png" alt=""></div></div>
									<div class="contact_info_text">+1234567890</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconemail.png" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">office@ratstechnologies.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconweb.png" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.ratstechnologies.com</a></div>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  All rights reserved | Rats
Technologies
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.php">home</a></li>
								<li class="footer_nav_item"><a href="about.php">about us</a></li>
								<li class="footer_nav_item"><a href="hirevehicals.php">hire vehicals</a></li>
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
<script>
(document).ready(function () {
    $(".content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".content").is(':visible') ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt);
        $(this).next('.content').slideToggle(200);
    });
});
</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog_custom.js"></script>

</body>

</html>