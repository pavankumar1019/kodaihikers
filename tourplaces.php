
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
			<div class="logo menu_logo"><a href="#"><img class="img-fluid" src="" alt=""></a></div>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="./images/slider 1.jpg"></div>
		<div class="home_content">
			<div class="home_title">Famous Tour Places in Kodaikanal</div>
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
						
						<div class="blog_post" id="place1">
							<div class="blog_post_image">
								<img src="./images/kodaikanal_lake.webp" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Kodaikanal Lake</a></div>
							<div class="blog_post_text">
								<p>You take an above-ground view of the Kodaikanal Lake, and you will be amazed to find a star-shaped water body that is the soul of this city. What makes this exceptional amongst the other places to visit in Kodaikanal is the fact that it is man-made and dates many years back. </p>
							</div>
							<div class="content">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>Vera Levinge was the man responsible for the creativity and resources of this lake amidst Kodaikanal town. The Palani Hills ranges make an extraordinary surrounding the main lake.

One can sit by, meander around, or go boating which is chargeable. If you get the permissions, then you can even go fishing at this lake.  Kodaikanal Lake is renowned for preserving the Kurinji Flower, which blooms only once in twelve years. Flower shows, and Boat Pageants are consistent fascinations in the summer season. </p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                The lake is situated at an elevation of 2285m above sea level and has an average depth of 3.0m. The lake is at a distance of 3 km from the Kodai Bus stand.
</p>
							</div>	
						</div>
                        <div class="button home_slider_button show_hide" >
									<div class="button_bcg"></div><a href="#place1"  class="show_hide">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>

						
						<!--2  -->
                        <div class="blog_post" id="place2">
							<div class="blog_post_image">
								<img src="./images/kodai_bryantpark.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Bryant Park</a></div>
							<div class="blog_post_text">
								<p>One of the many elements that add to the serenity of Kodaikanal is the infamous Bryant Park. Situated on the eastern side of the Kodai Lake, the park is bejewelled with various species of plants and shrubs. </p>
							</div>
							<div class="content1">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>They vary in a range of flowering plants, hybrids and grafts. Once you've had a stroll on the Coakers walk, the pathway will lead you towards the park. It is a popular spot amongst families as they can set up a picnic area in the park and watch their kids run around and tumble in the grass. The park also educates and trains students of Ornamental Horticulture as it is also recognised as a demonstration centre.</p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                Education, picnicking and gardening are all the things you will witness at Byrant Park, another jewel of Kodaikanal. The park is hoarded with variant types of species of plants and shrubs that leaves one astounded for long. Horticulture and gardening fanatics visit this place in plenty.
It is a wonderful place for gathering information on the many plants and trees, and hence is an amalgamation of an educational and fun trip! It is amongst the very few sites that preserve Green Roses, one of its latest additions. The Annual Horticulture Show conducted in May keeps people waiting from around the world!
You must visit Byrant Park and its 325 species & religious Bodhi Tree.

</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide1" >
									<div class="button_bcg"></div><a href="#place2" class="show_hide1">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>




<!-- 3 -->
<div class="blog_post" id="place3">
							<div class="blog_post_image">
								<img src="./images/kodai_silvercascadefalls.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Silver Cascade Falls</a></div>
							<div class="blog_post_text">
								<p>The perfect stop over in-between a long journey, these silver cascade falls demand your attention while you travel from Kodaikanal till Madurai. The Silver Cascade Falls formed as a result of the over flowing of the famous man-made Kodai Lake, are the perfect way to have a break while on a long road trip. </p>
							</div>
							<div class="content2">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>One can also take a swim in the waters of the waterfall provided the temperature is right
       The Silver Cascade Waterfall resembles its name in every essence. It is a pit stop on the way to Madurai, and it claims one’s scenic attention like nothing else! Falling from a humongous height of 180ft, this pour is unimaginably ethereal. It draws its water from the overflowing Kodai Lake and gushes down with loud thuds.
</p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                Many take a dip into them when the weather is apt. The smell of homemade chocolates and herbal oils from local vendors will urge you into buying them for people back home. Sitting by the lake, and chomping off on local fruits and delicacies at the waterside restaurants is a binding memory!
</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide2" >
									<div class="button_bcg"></div><a href="#place3" class="show_hide2">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>



                           <!-- 4 -->



                           <div class="blog_post" id="place4">
							<div class="blog_post_image">
								<img src="./images/kodai_bearsholafalls.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Bear Shola Falls</a></div>
							<div class="blog_post_text">
								<p>Located at a mere distance of 2 kilometres from the Kodaikanal Lake, the Bear Shola Falls is a popular tourist spot in the region. This cascade is a seasonal attraction which comes to life in its fullest during the monsoons, when the water flows down from the hilltop making its way through the verdant greenery of the region. </p>
							</div>
							<div class="content3">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p> An interesting legend behind the unique name of this place is that it was a favourite haunt of a bear who used to frequent this water body to drink water, hence imparting it the name Bear Shola Falls. The quiet and peaceful atmosphere of this destination is a true haven for those who want to escape from concrete forest parks. A visit to this area will bring one up close and personal with many common and rare species of animals and plants.
If you are looking for privacy, serenity, a glimpse at nature’s beauty and want to say hello to some exotic species and fauna, then a visit to Bear Shola Falls is a must! It gets this attention-grabbing name from the fact that Bears visited this water body to quench their thirst.
</p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                This spout breathes to life in the monsoons as it streams down the green mountains and the stylishly shaped rocks. This white water area is a perfect place for Kodaikanal sightseeing which takes one through the thick forests.  One must make sure to wear comfortable shoes in this area, as it is slippery and is dominated by monkeys!
If you prefer going to someplace which is more reserved and private and is much closer to nature than a jungle of concrete buildings, then you should Bear Shola Falls. Wrapped with dense forests coupled with the chirping of birds, Bear Shola Falls is a little heaven. Also, the forest area of the Western Ghats situated near the falls is a biodiversity hotspot where you can have a rendezvous with our furry friends in the wild.

</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide3" >
									<div class="button_bcg"></div><a href="#place4" class="show_hide3">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>
<!-- 5 -->


<div class="blog_post" id="place5">
							<div class="blog_post_image">
								<img src="./images/kodai_coakerswalk.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Coaker's Walk</a></div>
							<div class="blog_post_text">
								<p>Coakers Walk is a beautiful man-made one-kilometre-long walking plaza built on the mountains in the mesmerizing city of Kodaikanal, which is situated in the south Indian state of Tamil Nadu. The lovely path of Coakers Walk that curves by the edge of the gorgeous mountain have been constructed mainly for visitors to get a glimpse of Paradise on Earth. </p>
							</div>
							<div class="content4">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p> It is a preferred location for morning and evening walks, and admirers of nature visit the location often to capture the wonderful lush green valleys and the hills of Kodaikanal. One can also choose to ride a bicycle to explore the scenic location. The sight is breathtakingly beautiful, and it almost makes one feel like they are walking in the clouds. 
The Coakers Walk was constructed in 1872, by Lieutenant Coaker. It is about half a kilometre away from the Kodaikanal Lake and is constructed on the steep slope of the mountains. The walk begins near Van Allen Hospital and joins the main road above St. Peter's Church. The pathway is fenced by the edge of the mountain for the safety of the visitors.
</p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                If you want to see with your own eyes the epitome of beauty on Earth, then you should know that Coaker’s Walk is the highlight of the tourist places in Kodaikanal. Driving through the mountains is one experience, but walking an entire kilometre on that path while you look at the lush green mountains on the other end is something else.

City people use this path for morning and evening walks. The telescope House escalates the view of the valley, even though chargeable, it is grandeur! The weather is pleasant throughout the year, but it is frigid and foggy during the winter due to its height.

</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide4" >
									<div class="button_bcg"></div><a href="#place5" class="show_hide4">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>
                           <!-- 6 -->

                           <div class="blog_post" id="place6">
							<div class="blog_post_image">
								<img src="./images/kodai_guinacaves.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Guna Caves</a></div>
							<div class="blog_post_text">
								<p>The Guna Caves in Kodaikanal have an engrossing history; it is believed that the Pandavas used to cook their meals in these caves, and hence it was initially called The Devil’s Kitchen. </p>
							</div>
							<div class="content5">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>The name was later changed in the ’90s when the film Guna was shot here.
The caves are hugged by three gigantic rock pillars and are sheltered by the Shola trees. It is a place that some find risky, and some find rousing due to its altitude, steep drops, and cliffs. </p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                You cannot visit the caves anymore since they are now jailed for people’s safety, but it is still worthy of your time to even set your eye on it from a distance as you walk through the pine forest.
</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide5" >
									<div class="button_bcg"></div><a href="#place6" class="show_hide5">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>
                           <!-- 7 -->

                           <div class="blog_post" id="place7">
							<div class="blog_post_image">
								<img src="./images/kodai_moirpoint.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Moir Point</a></div>
							<div class="blog_post_text">
								<p>Being a hill station and keeper of numerous wonders of nature, Kodaikanal has a lot of points at a height to cherish what it has to give us. Situated at the entrance of the forest which leads up all the way to the exquisite Berijam Lake, Moir Point is one of the most significant viewpoints present in Kodaikanal.  </p>
							</div>
							<div class="content6">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>  Moir point, one of the ‘must visit’ tourist places in Kodaikanal is named after Sir Thomas Moir who started the construction of the road Goschen in 1929 CE.
Offering a spectacular view of the valley, Moir Point has always stayed as a hotspot for all the tourists out there. The Moir Point is situated at the place where the first grass was cut by Sir Thomas Moir to build the Goschen Road. Until 1929, the Moir Point was known as Fore Mile Road. </p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                The importance of the place lies in the long history that is associated with it wherein the entry of unauthorised people is barred. One gets a refreshing bird's viewpoint of the hills along with the villages which surround the region. Being a calm and serene place, tourists get to experience an ideal ambience where they can rejuvenate and unwind at the Moir Point.
It is at the entrance of the forest which eventually leads you to the Berijam Lake. It will be a one hour trip where you can go any day of the week.

</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide6" >
									<div class="button_bcg"></div><a href="#place7" class="show_hide6">read more
										<span></span><span></span><span></span></a>
								       </div>
						   </div>

                           <!-- 8 -->

                           <div class="blog_post" id="place8">
							<div class="blog_post_image">
								<img src="./images/kodai_dolphinsnose.jpg" alt="https://unsplash.com/@anniespratt">
						
							</div>
							<div class="blog_post_meta">
								
							</div>
							<div class="blog_post_title"><a href="#">Dolphin's Nose</a></div>
							<div class="blog_post_text">
								<p>       Kodaikanal is well-known as the Queen of Hill Stations in India. The Dolphin's Nose viewpoint is where you can experience Kodaikanal at its best - plunging valleys, rugged terrain, clear skies, and the splendour of green embellishing the scene. </p>
							</div>
							<div class="content7">
							<div class="blog_post_title"><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>As the name suggests, this viewpoint is based on a flat, protruding piece of rock that is shaped like a dolphin's nose. This forms a visible cliff at the height of 6,600 feet, with the best part being that it is accessible to the public. This destination is perfect for those who desire an adventurous addition to the otherwise laidback trip that Kodaikanal offers. 
      The caveat is that reaching this heavenly spot requires a moderate level 3 km long trek through the pines and rocks of the Palani Hill Range. </p>
							</div>
							<div class="blog_post_title "><a href="#"></a></div>
							<div class="blog_post_text ">
								<p>
                                It is possible to explore a nearby waterfall and a local village along the way. Perhaps the most captivating scenario would be if you happened to visit Dolphin's Nose when a mystical fog has covered the mountains and surrounding valley. A quiet retreat into the mountains is a splendid way to engage in some soulful introspection or wonder while the experience itself can be enhanced multi-fold during a sunrise or sunset
         No prizes for guessing that Dolphin’s Nose in Kodaikanal is a viewpoint on a rock that is shaped like a dolphin’s nose. Several people trek up this route to descend to this point. You wouldn’t have trouble understanding when your trek comes to an end, because the fast-flowing Catherine Falls will shout out to you to celebrate half of your hike.

</p>
							</div>
							<br>						
						</div>
                        <div class="button home_slider_button show_hide7" >
									<div class="button_bcg"></div><a href="#place8" class="show_hide7">read more
										<span></span><span></span><span></span></a>
								       </div>
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
									<div class="contact_info_text"><a href="https://colorlib.com">www.kodaihikers.com</a></div>
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
<script>
$(document).ready(function () {
    $(".content1").hide();
    $(".show_hide1").on("click", function () {
		$(".content1").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content2").hide();
    $(".show_hide2").on("click", function () {
		$(".content2").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content3").hide();
    $(".show_hide3").on("click", function () {
		$(".content3").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content4").hide();
    $(".show_hide4").on("click", function () {
		$(".content4").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content5").hide();
    $(".show_hide5").on("click", function () {
		$(".content5").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content6").hide();
    $(".show_hide6").on("click", function () {
		$(".content6").show();
$(this).hide();
    });
});
</script>
<script>
$(document).ready(function () {
    $(".content7").hide();
    $(".show_hide7").on("click", function () {
		$(".content7").show();
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