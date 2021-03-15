<?php
include 'db_connection/db.php';
$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);


$sql3 = "SELECT * FROM kh_blog";
$result3 = $conn->query($sql3);

$sql5 = "SELECT * FROM kh_blog ORDER BY date DESC LIMIT 3";
$result5 = $conn->query($sql5);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="travels in kodaikanal,classic travels kodaikanal,kodaikanal trip from bangalore,kodaikanal trekking,kodaikanal places to visit,kodaikanal tours,kodaikanal tours packages,hiking in kodaikanal,vehicles,vehicles for tourism in kodaikanal,budget tours,students tours to kodaikanal,best tours and travels agency in Kodaikanal,best hotels in kodaikanal,kodaikanal tours,kodaikanal quality tour services,tour operators in kodaikanal,best travel agency in kodaikanal,kodaikanal travels car">
  <meta name="author" content="Saravanan">
  <link rel="icon" href="./kodai_logo.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
								<li class="main_nav_item"><a href="hirevehicals.php">hire vehicles</a></li>
								<li class="main_nav_item"><a href="bookmytour.php">book my tour</a></li>
								<li class="main_nav_item"><a href="#">blogs</a></li>
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
			<div class="logo menu_logo"><a href="#"><img src="" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="about.php">about us</a></li>
				<li class="menu_item"><a href="hirevehicals.php">hire vehicles</a></li>
				<li class="menu_item"><a href="bookmytour">book my tour</a></li>
				<li class="menu_item"><a href="#">blogs</a></li>
				<li class="menu_item"><a href="contact.php">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/kodai_blogbackground.jpg" width="1000px" height="465px"></div>
		<div class="home_content">
			<div class="home_title">blogs</div>
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
								<img src="./blogimages/<?php  echo $row3["image"];?>" alt="https://unsplash.com/">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
<?php
$yourDateTime=$row3["date"];
 date('Y-m-d', strtotime($yourDateTime)); 
 ?>
									<div class="blog_post_month"><?php echo $yourDateTime;?></div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">Posted on <?php  echo $yourDateTime ?></a></li>

								</ul>
							</div>
							<div class="blog_post_title"><a href="#"><?php  echo $row3["title"];?></a></div>
							<div class="blog_post_text">
								<p><?php  echo $row3["description"];?></p>
							</div>
						</div>
                                                            <?php
								}
								}
								?>
					

						<!-- Blog Post -->
						
						

					</div>
						
					<!-- <div class="blog_navigation">
						<ul>
							<li class="blog_dot active"><div></div>01.</li>
							<li class="blog_dot"><div></div>02.</li>
							<li class="blog_dot"><div></div>03.</li>
						</ul>
					</div> -->
				</div>

				<!-- Blog Sidebar -->

				<div class="col-lg-4 sidebar_col">

					<!-- Sidebar Search -->
					<!-- <div class="sidebar_search">
						<form action="#">
							<input id="sidebar_search_input" type="search" class="sidebar_search_input" placeholder="" required="required">
							<button id="sidebar_search_button" type="submit" class="sidebar_search_button trans_300" value="Submit">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
												s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
												C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
												M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
												c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
											</g>
										</g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
												c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
												C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
											</g>
										</g>
									</g>
								</svg>
							</button>
						</form>
					</div>
					 -->
					<!-- Sidebar Archives -->
					<!-- <div class="sidebar_archives">
						<div class="sidebar_title">Seasons</div>
						<div class="sidebar_list">
							<ul>
								<li><a href="#">Dec-Feb 2021</a></li>
								<li><a href="#">March-May 2021</a></li>
								<li><a href="#">June-sept 2021</a></li>
								<li><a href="#">Oct-Nov 2021</a></li>
							</ul>
						</div>
					</div> -->
					
					<!-- Sidebar Archives -->
					<!-- <div class="sidebar_categories">
						<div class="sidebar_title">Categories</div>
						<div class="sidebar_list">
							<ul>
								<li><a href="#">Family Tours</a></li>
								<li><a href="#">Student Tours</a></li>
							
								<li><a href="#">Couple Tours</a></li>
								<li><a href="#">Honeymoon</a></li>
							</ul>
						</div>
					</div> -->

					<!-- Sidebar Latest Posts -->

					<!-- <div class="sidebar_latest_posts">
						<div class="sidebar_title">Latest Posts</div>
						<div class="latest_posts_container">
							<ul> -->

								<!-- Latest Post -->
								<!-- <li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/kodai_lakeviewpoint.jpg" alt="" width="70px" height="70px"></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="#">Lake View Point</a></div>
										<div class="latest_post_meta">
											<div class="stylesheet"><a href="#">Make our tour with  only $2000</a></div><br> -->
										<!-- div class="latest_post_date trans_200"><a href="#">Feb 14, 2021</a></div>	< -->
										<!-- </div>
									</div>
								</li> -->

								<!-- Latest Post -->
								<!-- <li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/kodai_solarobsarvetary.jpg" alt="" width="70px" height="70px"></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="#">Solar Observatory</a></div>
										<div class="latest_post_meta">
											<div class="stylesheet"><a href="#">Make our tour with only $2000</a></div> -->
											<!-- <div class="latest_post_date trans_200"><a href="#">Aug 25, 2016</a></div> -->
										<!-- </div>
									</div>
								</li> -->

								<!-- Latest Post -->
								<!-- <li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/kodai_vattakanalfalls.jpg" alt="" width="70px" height="70px"></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="#">Vattakanal Falls</a></div>
										<div class="latest_post_meta">
											<div class="stylesheet"><a href="#">Make our tour with only $2000</a></div> -->
											<!-- <div class="latest_post_date trans_200"><a href="#">Aug 25, 2016</a></div> -->
										<!-- </div>
									</div>
								</li> -->

								<!-- Latest Post -->
								<!-- <li class="latest_post clearfix">
									<div class="latest_post_image">
										<a href="#"><img src="images/kodai_permulpeak.jpg" alt="" width="70px" height="70px"></a>
									</div>
									<div class="latest_post_content">
										<div class="latest_post_title trans_200"><a href="#">Perumal Peak</a></div>
										<div class="latest_post_meta">
											<div class="stylesheet"><a href="#">Make our tour with only $2000</a></div> -->
											<!-- <div class="latest_post_date trans_200"><a href="#">Aug 25, 2016</a></div> -->
										<!-- </div>
									</div>
								</li>

							</ul>
						</div>
					</div> -->

					<!-- Sidebar Gallery
					<div class="sidebar_gallery">
						<div class="sidebar_title">Instagram</div>
						<div class="gallery_container">
							<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_1.jpg" alt="https://unsplash.com/@mantashesthaven">
									</a>
								</li>
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_2.jpg" alt="https://unsplash.com/@kensuarez">
									</a>
								</li>
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_3.jpg" alt="https://unsplash.com/@jakobowens1">
									</a>
								</li>
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_4.jpg" alt="https://unsplash.com/@seefromthesky">
									</a>
								</li>
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_5.jpg" alt="https://unsplash.com/@deannaritchie">
									</a>
								</li>
								<li class="gallery_item">
									<a class="colorbox" href="https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80">
										<img src="images/gallery_6.jpg" alt="https://unsplash.com/@benobro">
									</a>
								</li>
							</ul>
						</div>
					</div> -->

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
								<li class="tag_item"><a href="hirevehicals.php">Hire vehicles</a></li>
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
									<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,&nbsp; Kodaikanal-624103,Tamilnadu</div>								</li>
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
									<div class="contact_info_text"><a href="https://www.kodaihikers.com"> www.kodaihikers.com</a></div>
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
								<li class="footer_nav_item"><a href="about.php">about us</a></li>
								<li class="footer_nav_item"><a href="hirevehicals.php">hire vehicles</a></li>
								<li class="footer_nav_item"><a href="bookmytour.php">book my tour</a></li>
								<li class="footer_nav_item"><a href="#">blogs</a></li>	
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog_custom.js"></script>

</body>

</html>