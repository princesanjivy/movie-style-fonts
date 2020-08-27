<!DOCTYPE html>
<html>
<head>
	<title>Movie Style Fonts</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Get your name in your favourite Movie Fonts." />
	<meta name="keywords" content="movie fonts, movie font style, responsive, free, html5, ccs3" />
	<meta name="author" content="Prince Sanjivy" />

	<link rel="icon" sizes="16x16" href="images/Favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Facebook Sdk -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1652468381508336&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Jumbotron -->
	<div class="jumbotron" style="background-image: url(images/Background.jpg); height: auto; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		<div data-aos="fade-right" data-aos-duration="1000" class="Heading">PRINCE WEB STUDIO's</div>
	</div>

	<!--  Content -->
	<div class="container" style="padding-top: 50px;">

		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><h4>Movie Style Fonts.</h4></div>
		<br><br>
		<div class="row">

			<!-- MrLocal Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="MrLocal.php">

						<div class="movie-cover" style="background-image: url(images/MrLocal_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Mr.Local movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Mr.Local</label>
							<br>
							<?php
								$file = fopen("txt/MrLocal.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Petta Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Petta.php">

						<div class="movie-cover" style="background-image: url(images/Petta_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Petta movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Petta</label>
							<br>
							<?php
								$file = fopen("txt/Petta.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Mikhael Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Mikhael.php">

						<div class="movie-cover" style="background-image: url(images/Mikhael_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Mikhael movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Mikhael</label>
							<br>
							<?php
								$file = fopen("txt/Mikhael.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Kanaa Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Kanaa.php">

						<div class="movie-cover" style="background-image: url(images/Kanaa_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Kanaa movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Kanaa</label>
							<br>
							<?php
								$file = fopen("txt/Kanaa.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Avengers_EndGame Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Avengers_EndGame.php">

						<div class="movie-cover" style="background-image: url(images/Avengers_EndGame_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Avengers EndGame movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Avengers EndGame</label>
							<br>
							<?php
								$file = fopen("txt/Avengers_EndGame.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Aquaman Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Aquaman.php">

						<div class="movie-cover" style="background-image: url(images/Aquaman_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Aquaman movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Aquaman</label>
							<br>
							<?php
								$file = fopen("txt/Aquaman.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Dhruva Natchathiram Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Dhruva.php">

						<div class="movie-cover" style="background-image: url(images/Dhruva_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Dhruva Natchathiram movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Dhruva Natchathiram</label>
							<br>
							<?php
								$file = fopen("txt/Dhruva.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->


			<!-- 96 Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="96.php">

						<div class="movie-cover" style="background-image: url(images/96_yourname.png);">
							<div class="movie-desc">
								<p>Get your name in 96 movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>96</label>
							<br>
							<?php
								$file = fopen("txt/96.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Thimiru Pudichavan Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="ThimiruPudichavan.php">

						<div class="movie-cover" style="background-image: url(images/ThimiruPudichavan_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Thimiru Pudichavan movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Thimiru Pudichavan</label>
							<br>
							<?php
								$file = fopen("txt/Thimiru Pudichavan.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Remo Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Remo.php">

						<div class="movie-cover" style="background-image: url(images/RemoYourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Remo movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Remo</label>
							<br>
							<?php
								$file = fopen("txt/Remo.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Jurassic Park Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="JurassicPark.php">

						<div class="movie-cover" style="background-image: url(images/JurassicParkYourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Jurassic Park movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Jurassic Park</label>
							<br>
							<?php
								$file = fopen("txt/Jurassic Park.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- IronMan Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="IronMan.php">

						<div class="movie-cover" style="background-image: url(images/Ironman_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Iron Man movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Iron Man</label>
							<br>
							<?php
								$file = fopen("txt/IronMan.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->


		</div>

		<br>
		<!-- Home Button -->
		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
			<center>
				<a class="btn" style="font-size: 20px;" href="/">Home</a>
				<a class="btn" style="font-size: 20px;" href="morefonts1.php">Next</a>
			</center>
		</div>

	</div>
	
	<!-- Suggestion -->
	<br><br>
	<div data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
		<form action="" method="POST">
			<center>
				<label>New movie fonts every sundays!</label><br><br>
				<label>Didn't find your favourite ones,Tell us here to get yours!</label>
				<input type="text" placeholder="Movie Name" maxlength="30" name="query" required=""><br>
				<input type="submit" value="Submit" class="btn" name="subButton">
			</center>
		</form>
	</div>


	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Thank you!</h4>
	      </div>
	      <div class="modal-body">
	      	<br>
	        <p style="font-family: Content; color: black; font-weight: bold;">
	        	Your suggestion is sent. We'll be doing it within five days . If you like our work please do support us by giving a like and do follow us on Instagram.
	        </p>

	        <br>
	        <!-- Facebook -->
	        <div class="fb-like" data-href="https://facebook.com/princewebstudio" data-width="200" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>

	        <br><br>
	        <!-- Instagram -->
			<div style="font-size: 25px;">
				<i class="fa fa-instagram" style="color: #4267B2;">
					<a href="https://www.instagram.com/moviestylefonts/" target="_blank" style="font-family: Footer; font-weight: bolder; color: #4267B2; text-decoration: none;">
					 Instagram
					</a>
				</i>
			</div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn" data-dismiss="modal">ok</button>
	      </div>
	    </div>

	  </div>
	</div>
	<!-- Modal Ends -->

	<?php
		if(isset($_POST['subButton'])){
			$name = $_POST['query'];

			if(file_exists("txt/suggest.txt")){
				echo ' <script type="text/javascript">
					$("#myModal").modal();
				</script> ';
				$file = fopen("txt/suggest.txt", "a");
				fwrite($file, $name);
				fwrite($file, "\r\n");
				fclose($file);
			}
			else{
				echo ' <script type="text/javascript">
					$("#myModal").modal();
				</script> ';
				$file = fopen("txt/suggest.txt", "w");
				fwrite($file, $name);
				fwrite($file, "\r\n");
				fclose($file);
			}
		}
	?>

	<br><br>
	<!-- Footer -->
	<footer>
			
		<div style="background-image: url(images/Background.jpg); width: 100%; height: 100%;  background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
			<div style="padding-top: 30px; font-size: 25px;">
				<center>
					
					<!-- Visitors -->
					<?php
						$log = 'txt/Visitors.txt';

						$IP = base64_encode( getenv ('REMOTE_ADDR'));
						$add = true;
						$hits = 14140;

						// To write
						$h = fopen ($log, 'r');
						while (!feof ($h)) {
						    $line = fgets ($h, 4096);
						    $line = trim ($line);
						    if ($line != '')
						        $hits++;

						    if ($line == $IP)
						        $add = false;
						}

						fclose($h);

						// To save
						if ($add == true) {
						    $h = fopen ($log, 'a');
						    fwrite($h, "
						$IP");
						    fclose($h);
						    $hits++;
						}

						echo '
							<div style="font-family: Footer; font-weight: bolder; color: white;" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true"> '
						 		. $hits . ' Visitors	
							</div>
						';
					?>
					<br>
					<!-- Facebook -->
					<div data-aos="fade-right" data-aos-duration="1600" data-aos-once="true">
						<i class="fa fa-facebook" style="color: white;">
							<a href="https://www.facebook.com/princewebstudio/" target="_blank" style="font-family: Footer; font-weight: bolder; color: white; text-decoration: none;">
							 Facebook 
							</a>
						</i>
					</div>

					<!-- Instagram -->
					<div data-aos="fade-right" data-aos-duration="1700" data-aos-once="true">
						<i class="fa fa-instagram" style="color: white;">
							<a href="https://www.instagram.com/moviestylefonts/" target="_blank" style="font-family: Footer; font-weight: bolder; color: white; text-decoration: none;">
							 Instagram
							</a>
						</i>
					</div>
				</center>
			</div>
			<br><br>
			<div style="padding-left: 10px; color: white; font-family: Footer;">
				&copy; copyrights Movie Style Fonts.<br>
				Images appearing on the site are the property of their respective owners.<br>
				Design:<a href="http://aboutprince.ga/" target="_blank" style="text-decoration-style: dotted; color: white;">
				 Prince Sanjivy </a>
				<br><br>
			</div>
		</div>

	</footer>

	<script>
	  AOS.init();
	</script>

</body>
</html>