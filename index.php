<!DOCTYPE html>
<html lang="en">
<head>
<title>Salah Time</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">


		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.html">
									<div class="logo_text">Salah<span>Hour</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#Homeid">Home</a></li>
									<li><a href="#Annual_Calender">Annual Calender</a></li>
									<li><a href="#Contact_Us">Contact Us</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>01676825215</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>rightangleit@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#">Register or Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#Homeid">Home</a></li>
				<li class="menu_mm"><a href="#Annual_Calender">Annual Calender</a></li>
				<li class="menu_mm"><a href="#Contact_Us">Contact Us</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home" id="Homeid">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/Mosque11.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Prayer Time Webapplication</div>
									<div class="home_slider_subtitle">Search salah time near your location</div>
									<div class="home_slider_form_container">
                                        <form  method="post" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="text"name="search" class="home_search_input" placeholder="Keyword Search" required="required">
											</div>
											<button type="SUBMIT" name="submit" value="Search" class="home_search_button">submitted</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

		<!-- slider ending-->
		<div class="row features_row">
			<h1 class="heading">List of Your Nearby location</h1>
            <?php
			echo"<table class='feature text-center trans_1200'>";
				echo"<tr class='table_head'>";
				    echo"<th>Name of the Mosques</th>";
					echo"<th>Location</th>";
					echo"<th>Distance from location</th>";
					echo"<th>Praying Time</th>";
					echo "<th>Tarabi type</th>";
					echo"<th>Amount of khatam in tarabi per day</th>";
					echo"<th>Name of the Emam Saheb</th>";
					echo"<th>Name of the Khatib Saheb</th>";
					echo"<th>Name of Muajjen</th>";
					echo"<th>Name of Senior Committee member</th>";
					echo"<th>Name of senior Tablig member</th>";
					echo"<th>Upcoming Event</th>";
				echo"</tr>";
                $output = NULL;
                $i = 1;
                //echo "I Love String";
                if (isset($_POST['submit']))
                {
                    $mysqli = NEW MySQLI("localhost","root","","searchmosqueproject");
                    $search = $mysqli->real_escape_string($_POST['search']);

                    $resultSet = $mysqli->query("SELECT mosques.mosque_id, mosques.name, mosques.address, provider_details.emamsaheb,provider_details.khatibsaheb,provider_details.muajjen,provider_details.committeemember,provider_details.seniortablig,salah_times.tarabi_type,salah_times.tarabi_khatam_number
                        FROM mosques, provider_details,salah_times
                        WHERE mosques.salah_id = salah_times.salah_id and mosques.provider_id = provider_details.provider_id and mosques.thana = '$search'");

                    $jamatTime = $mysqli->query("SELECT mosques.mosque_id, salah_times.jamat_time FROM salah_times
                                INNER JOIN mosques ON mosques.salah_id = salah_times.salah_id and thana = '$search'");

                    $rolename = $mysqli->query("SELECT service_providers.name FROM service_providers
                                    INNER JOIN mosques ON mosques.provider_id = service_providers.provider_id and thana = '$search'");

                    if ($rolename->num_rows > 0) {
                        while ($var = $rolename->fetch_assoc()){
                                $chk = $var['name'];
                    $split =  explode(",",$chk);
                    echo $chk;

                    //if ($resultSet->num_rows > 0)
                    //{
                        while ($rows = $resultSet->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$rows["name"] . "</td>";
        				    echo "<td>".$rows["address"] . "</td>";
        				    echo "<td>1 KM</td>";
        				    echo"<td><a href='pray_time' data-toggle='modal' data-target='#mosques-".$rows["mosque_id"]."'>Details</a></td>";
        				    echo"<td>".$rows["tarabi_type"] . "</td>";
        				    echo"<td>".$rows["tarabi_khatam_number"] . "</td>";
        				    echo"<td><a href='emam' data-toggle='modal' data-target='#emam'>".$split[0] . "</a></td>";
        				    echo"<td><a href='khatib' data-toggle='modal' data-target='#khatib'>".$split[1] . "</a></td>";
        				    echo"<td><a href='muajjen' data-toggle='modal' data-target='#muajjen'>".$split[2] . "</a></td>";
        				    echo"<td><a href='committee_member' data-toggle='modal' data-target='#committee_member'>".$split[3] . "</a></td>";
        				    echo"<td><a href='tablig_member' data-toggle='modal' data-target='#tablig_member'>".$split[4] . "</a></td>";
        				    echo"<td><a href='event_modal' data-toggle='modal' data-target='#event_modal'> Details</a></td>";
                            echo "</tr>";
                        }
                    }
                    }
                    else {
                        echo "No Result";
                    }
                }
                echo "</table>";

                ?>
			</table>
		</div>



	<!-- Annual Calender -->
	<div class="AnnualCalender" id="Annual_Calender">
		<div class="container">
			<div class="row img_row">
				<div class="AC_head">
					<h2> Annual Calender </h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="AC_image">
						<img src="images/calender.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End of Annual Calender -->

	<!-- Contact Info -->

	<div class="contact_info_container" >
		<div class="container" id="Contact_Us">
			<div class="row contact_row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="contact_info">
						<div class="contact_info_title">Contact Info</div>
						<div class="contact_info_text">
							<p>Rightangleit is a recent startup compay. We have already built three management system. If you need any kind of help or suggestions feel free to contact us.</p>
						</div>
						<div class="contact_info_location">
							<div class="contact_info_location_title">Dhaka Office</div>
							<ul class="location_list">
								<li>Khilgaon, Dhaka - 1219</li>
								<li>+88 016 768 25215</li>
								<li>rightangleit@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form">
						<div class="contact_info_title">Contact Form</div>
						<form action="#" class="comment_form">
							<div>
								<div class="form_title">Name</div>
								<input type="text" class="comment_input" required="required">
							</div>
							<div>
								<div class="form_title">Email</div>
								<input type="text" class="comment_input" required="required">
							</div>
							<div>
								<div class="form_title">Message</div>
								<textarea class="comment_input comment_textarea" required="required"></textarea>
							</div>
							<div>
								<button type="submit" class="comment_button trans_200">submit now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal emam profile-->
	<div class="modal fade" id="emam" role="dialog">
	    <div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content modal_content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Emam shaheb</h3>
		        </div>
		        <div class="modal-body">
					<h4>Full Name: Salman MD Sultan</h4>
					<h6>Contact Number: 01676825215</h6>
					<h6> Position: Mufti</h6>
					<h6> Educaional Background: </h6>
					<h6> Free Time: 11am-1pm & 9.20pm-10pm</h6>
					<h6> Blood Group: A+ </h6>
					<h6> Experience: 5 years</h6>
					<div class="prof_img">
						<img src="images/team_2.jpg">
					</div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- Modal Khatib Saheb profile-->
	<div class="modal fade" id="khatib" role="dialog">
	    <div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content modal_content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Khatib shaheb</h3>
		        </div>
		        <div class="modal-body">
					<h4>Full Name: Salman MD Sultan</h4>
					<h6>Contact Number: 01676825215</h6>
					<h6> Position: Mufti</h6>
					<h6> Educaional Background: </h6>
					<h6> Free Time: 11am-1pm & 9.20pm-10pm</h6>
					<h6> Blood Group: A+ </h6>
					<h6> Experience: 5 years</h6>
					<div class="prof_img">
						<img src="images/team_2.jpg">
					</div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- Modal Muajjen profile-->
	<div class="modal fade" id="muajjen" role="dialog">
	    <div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content modal_content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Muajjen shaheb</h3>
		        </div>
		        <div class="modal-body">
					<h4>Full Name: Salman MD Sultan</h4>
					<h6>Contact Number: 01676825215</h6>
					<h6> Position: Mufti</h6>
					<h6> Educaional Background: </h6>
					<h6> Free Time: 11am-1pm & 9.20pm-10pm</h6>
					<h6> Blood Group: A+ </h6>
					<h6> Experience: 5 years</h6>
					<div class="prof_img">
						<img src="images/team_2.jpg">
					</div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- Modal Committee member profile-->
	<div class="modal fade" id="committee_member" role="dialog">
	    <div class="modal-dialog">
	    <!-- Modal content-->
		    <div class="modal-content modal_content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Committee member</h3>
		        </div>
		        <div class="modal-body">
					<h4>Full Name: Salman MD Sultan</h4>
					<h6>Contact Number: 01676825215</h6>
					<h6> Position: Mufti</h6>
					<h6> Educaional Background: </h6>
					<h6> Free Time: 11am-1pm & 9.20pm-10pm</h6>
					<h6> Blood Group: A+ </h6>
					<h6> Experience: 5 years</h6>
					<div class="prof_img">
						<img src="images/team_2.jpg">
					</div>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- Modal Tablig member profile-->
	<div class="modal fade" id="tablig_member" role="dialog">
	    <div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content modal_content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Tablig member</h3>
		        </div>
		        <div class="modal-body">
					<h4>Full Name: Salman MD Sultan</h4>
					<h6>Contact Number: 01676825215</h6>
					<h6> Position: Mufti</h6>
					<h6> Educaional Background: </h6>
					<h6> Free Time: 11am-1pm & 9.20pm-10pm</h6>
					<h6> Blood Group: A+ </h6>
					<h6> Experience: 5 years</h6>
					<div class="prof_img">
						<img src="images/team_2.jpg">
					</div>
		        </div>
		    </div>
	    </div>
	</div>

    <?php
    if ($jamatTime->num_rows > 0) :
        while ($temp = $jamatTime->fetch_assoc()):
            $sn = $temp['jamat_time'];
            $mosque_id = $temp['mosque_id'];
    ?>


            <!-- Modal praying time -->
        	<div class="modal fade" id="mosques-<?=$mosque_id; ?>" role="dialog">
        	    <div class="modal-dialog">
        	    <!-- Modal content-->
        		    <div class="modal-content new_pray">
        		        <div class="modal-header">
        		            <h3 class="modal-title">Information about Praying Time</h3>
        		        </div>
                        <div class='modal-body'>
                            <?php $salah_Time =  explode(",",$sn); ?>
                            <br>
                            <p>Jummah: <?= $salah_Time[0];?> pm</p>
                            <p>Fazar: <?=$salah_Time[0];?> am</p
                            <p>Johor: <?=$salah_Time[0];?> pm</p>
                            <p>Asar: <?=$salah_Time[0];?> pm</p>
                            <p>Magrib: <?=$salah_Time[0];?> pm</p>
                            <p>Esha: <?=$salah_Time[0];?> pm</p>
                            <p>Tarabi: <?=$salah_Time[0];?> pm</p>
                        </div>
        		    </div>
        	    </div>
        	</div>
            <!-- End Modal praying time -->

        <?php endwhile;
    endif; ?>

	<!-- Event modal -->
	<div class="modal fade" id="event_modal" role="dialog">
	    <div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		            <h3 class="modal-title">Information about Upcoming events</h3>
		        </div>
		        <div class="modal-body">
					<div class="event_col">
						<div class="event event_left">
							<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
							<div class="event_body d-flex flex-row align-items-start justify-content-start">
								<div class="event_date">
									<div class="d-flex flex-column align-items-center justify-content-center trans_200">
										<div class="event_day trans_200">15</div>
										<div class="event_month trans_200">Jun</div>
									</div>
								</div>
								<div class="event_content">
									<div class="event_title"><a href="#">Ifter Mahfil at Tilpapara Jame Mosque</a></div>
									<div class="event_info_container">
										<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>6pm - 7pm</span></div>
										<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Khilgaon, Dhaka - 1219y</span></div>
										<div class="event_text">
											<p>All moslims of khilgaon Tilpapara's area are welcome to join this ifter mahfil.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		        </div>
		    </div>
	    </div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-6 footer_col">

								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Salah<span>Time</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Find your nearest mosque in a click</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://www.facebook.com/rightangleit"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="https://github.com/rightangleit"><i class="fa fa-github" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-6 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: 	 rightangle@gmail.com</li>
											<li>Phone:	  +(880) 1676825215</li>
											<li>Location:	  Khilgaon, Dhaka - 1219</li>
										</ul>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://rightangleit.com" target="_blank">Rightangleit</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright information</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

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
<script src="js/custom.js"></script>
</body>
</html>
