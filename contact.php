
<?php
include 'db_connection/db.php';
$sql1 = "SELECT * FROM kh_social_media_links";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM kh_social_media_links";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM kh_social_media_links";
$result3 = $conn->query($sql3);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
								<li class="main_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
<!-- svg version="1.1" id="Layer<r_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
							</svg> -->
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
			<div class="logo menu_logo"><a href="#"><img src="" class="klogo" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="about.php">about us</a></li>
				<li class="menu_item"><a href="hirevehicals.php">hire vehicals</a></li>
				<li class="menu_item"><a href="bookmytour.php">book my tour</a></li>
				<li class="menu_item"><a href="blog.php">blogs</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./weather/bg.jpg"></div>
		<div class="home_content" style="color:white;">
			<p>
				<h2>Kodai Kannal</h2><br>
				<h6>30Deg</h6>
			</p>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">get in touch</div>
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
				<div class="col-lg-6">

					<!-- Contact Form -->
					<div class="container-fluid bg-info">
						<div class="contact_title text-center">Online Payment</div>
						
						<div class="container md-6" style="color:white;">
						<br><br>
						<h3>Savings Account</h3>
						<br>
						<br>
						<h6>A/C NAME :- &nbsp;<span style="font-weight:normal">M.SARAVANAKUMAR</span></h6>
						<h6>A/C NO :- &nbsp;<span style="font-weight:normal"><u>6977475914</u></span></h6>
						<h6>IFSC CODE :-&nbsp; <span style="font-weight:normal">IDIB000K039</span></h6>
						<h6>BANK NAME :- &nbsp;<span style="font-weight:normal">INDIAN BANK</span></h6>
						<h6>BRANCH NAME :- &nbsp;<span style="font-weight:normal">KODAIKANAL BRANCH</span></h6>
						<br>
						<h1></h1>
						</div>
						
					
							
					</div>
					<div class="">

<!-- Contact Form -->
<div class="container-fluid bg-info" >
	<div class="contact_title text-center">UPI Payments</div>
	
	<div class="container md-6" style="color:white;">
	<br><br>
	<h3>+91 9751882527</h3>
	<br>
	<img src="phone.png" style="width:80px" /> &nbsp; <img src="download.png" style="width:80px" /> &nbsp; <img src="downloadp.png" style="width:80px" /> &nbsp;<img src="downloada.png" style="width:80px" /> &nbsp;<img src="paytm.png" style="width:80px" />
	<h1></h1>
	</div>
	

		
</div>

</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="images/kodai_kumbakkaraifalls.jpg" alt="" width="380px" height="520px">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#"><img src="images/kodai_logo.png" alt=""></a></div>
						</div>
						<p class="about_text">We are always searching for ways to make your holidays as beautiful as possible</p>
						<ul class="about_social_list">
														
			<?php
                            if ($result3->num_rows > 0) {
                                // output data of each row
                                while($row3 = $result3->fetch_assoc()) {
                              
                                                            ?>
									<li class="about_social_item"><a href="<?php echo $row3["links"]; ?>"><?php echo $row3["social_media_icon"]; ?></a></li>
                                                            <?php
								}
								}
								?>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/kodai_location_icon.png" alt=""></div></div>
								<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,&nbsp; Kodaikanal,Tamilnadu-624103</div>							</li>
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

	<!-- Google Map -->
		
	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.4569871139547!2d77.47700211479606!3d10.224678192697304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDEzJzI4LjgiTiA3N8KwMjgnNDUuMSJF!5e0!3m2!1sen!2sin!4v1613462756454!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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
								<li class="tag_item"><a href="#">Videos</a></li>
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
									<div class="contact_info_text">Kodai Hikers,Royal Complex,Near Upper Lake View,Pambarpuram,Kodaikanal, Tamilnadu-624101</div>
								</li>
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
								<li class="footer_nav_item"><a href="hirevehicals.php">hire vehicals</a></li>
								<li class="footer_nav_item"><a href="bookmytour.php">book my tour</a></li>
								<li class="footer_nav_item"><a href="blog.php">blogs</a></li>
								<li class="footer_nav_item"><a href="#">contact</a></li>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
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