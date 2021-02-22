
<?php
include 'db_connection/db.php';
$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM kh_book_my_tours";
$result3 = $conn->query($sql3);

$sql5 = "SELECT * FROM kh_blog ORDER BY date DESC LIMIT 3";
$result5 = $conn->query($sql5);
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
						<?php
                            if ($result3->num_rows > 0) {
                                // output data of each row
                                while($row3 = $result3->fetch_assoc()) {
                              
                                                            ?>

									<div class="blog_post">
							<div class="blog_post_image">
								<img src="./tourpackages/<?php echo $row3["photo"];?>" alt="">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center" style="width:160px;">

									<div class="blog_post_day">₹ &nbsp;<strong><?php echo$row3["price"]; ?></strong></div>
									<div class="blog_post_month"><?php echo $row3["no_of_person"]; ?> person</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href=""><?php echo $row3["no_of_days"]; ?></a></li>
								    <li class="blog_post_meta_item"><a href="">₹ <?php echo $row3["price"]; ?></a></li>
								    <li class="blog_post_meta_item"><a href=""><?php echo $row3["no_of_person"]; ?> person</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#"><?php echo $row3["package_name"]; ?></a></div>
							<div class="blog_post_title"><a href="#">Litnerary</a></div>
							<div class="blog_post_text">
								<p><?php echo $row3["litnerary"]; ?></p>
							</div>
							<div class="content">
							<div class="blog_post_title"><a href="#">Inclusions</a></div>
							<div class="blog_post_text ">
								<p><?php echo $row3["inclusion"]; ?></p>
							</div>
							<div class="blog_post_title "><a href="#">Exclusions</a></div>
							<div class="blog_post_text ">
								<p>
								<?php echo $row3["exclusion"]; ?>
</p>
							</div>
							<div class="blog_post_title "><a href="#">Terms & conditions</a></div>
							<div class="blog_post_text ">
								<p>
								<?php echo $row3["terms_and_conditions"]; ?>
</p>
							</div>
							<br>

							<div class="button home_slider_button " >
									<div class="button_bcg"></div><a href="contact.php#contact">book now
										us<span></span><span></span><span></span></a>
								</div>
								</div>
								<a href="#" onclick="return false;" class="show_hide">Read More</a>
						</div>

                                                            <?php
								}
								}
								?>



						
						<!-- Blog Post -->
						
					
						


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
									<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,&nbsp; Kodaikanal,Tamilnadu-624103</div>								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconphone.png" alt=""></div></div>
									<div class="contact_info_text">+91 9751882527 <br> +91 8073130545</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/kodai_iconemail.png" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">info@kodaihikers.com</a></div>
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
$(document).ready(function () {
    $(".content").hide();
    $(".show_hide").on("click", function () {
		$(".content").show();
$(this).hide();
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