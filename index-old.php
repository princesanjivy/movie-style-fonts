<!DOCTYPE html>
<html>
<head>
	<title>Movie Style Fonts</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="loader.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Get your name in your favourite Movie Fonts." />
	<meta name="keywords" content="movie fonts, movie font style, responsive, free, html5, ccs3" />
	<meta name="author" content="Prince Sanjivy" />

	<link rel="icon" sizes="16x16" href="images/Favicon.png">

	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>
	<script>
	  WebFont.load({
	    custom: {
	      families: ['Title','Tagline','Content','Footer']
	    }
	  });
	</script>

</head>
<body>

	<!-- <div id="loader">
		<img src="images/loader.gif">
	</div>
	<script type="text/javascript">
	   		var loader = document.getElementById("loader");
	  		window.addEventListener("load",function(){
	  			loader.style.visibility = "hidden";
	  });
	</script> -->

	<!-- Facebook Sdk -->
	<!-- <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1652468381508336&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script> -->

	<!-- Jumbotron -->
	<div class="jumbotron" style="background-image: url(images/Background.jpg); height: auto; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		<div data-aos="fade-right" data-aos-duration="1000" class="Heading">PRINCE WEB STUDIO's</div>
		<div class="container" style="padding-top: 180px;">
			
			<center>
				<div data-aos="fade-right" data-aos-duration="1200" data-aos-once="true"><h2>Movie Style Fonts</h2></div>
				<div data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
					<h3>Get Your name in your favourite<br>Movie Font.</h3>
				</div>
				<br><br><br><br><br>
				<?php
					function isMobile() {
    					return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
					}

					if(!isMobile()){
						echo '
							<div data-aos="fade-right" data-aos-duration="1800" data-aos-once="true">
								<a href="https://play.google.com/store/apps/details?id=com.princewebstudio.msfonts" target="_blank">
									<img src="images/PlayButton.png" width="150" height="57" alt="PlayButton">
								</a>
							</div>
						';
					}
				?>
				
			</center>

		</div>	
	</div>

	<!--  Content -->
	<div class="container" style="padding-top: 50px;">
		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><h4 style="font-style: italic;">Please use #moviestylefonts for sharing.</h4></div>
		<br>
		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><h4 style="font-style: italic;">"New Movie Fonts"</h4></div>
		<br>
		
		<br>
		<div class="row">

			<!-- Master Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Master.php">

						<div class="movie-cover" style="background-image: url(images/Master_yourname.png);">
							<div class="movie-desc">
								<p>Get your name in Master movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Master</label>
							<br>
							<?php
								$file = fopen("txt/Master.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Darbar Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Darbar.php">

						<div class="movie-cover" style="background-image: url(images/Darbar_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Darbar movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Darbar</label>
							<br>
							<?php
								$file = fopen("txt/Darbar.txt", "r");
								$views = fgets($file,1000);
								echo ' <i class="fa fa-eye"> ' .$views. ' </i> ';
							?>
							<br><br>
						</div>

					</a>
				</div>
			</div>
			<!-- End -->

			<!-- Rajini Murugan Movie -->
			<div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="font-display">
					<a href="Rajinimurugan.php">

						<div class="movie-cover" style="background-image: url(images/Rajinimurugan_yourname.jpg);">
							<div class="movie-desc">
								<p>Get your name in Rajini Murugan movie style.</p>
							</div>
						</div>

						<div class="text-center">
							<label><br>Rajini Murugan</label>
							<br>
							<?php
								$file = fopen("txt/RajiniMurugan.txt", "r");
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

		<!-- More Fonts Button -->
		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
			<center>
				<a class="btn" style="font-size: 20px;" href="morefonts.php">More Fonts</a>
			</center>
		</div>

	</div>
	
	<br>
	<br>

	<!-- Ads -->

<!-- 	<center>
	<script type="text/javascript">
			  ( function() {
			    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
			    var unit = {"calltype":"async[2]","publisher":"princesanjivy","width":320,"height":50,"sid":"Chitika Default"};
			    var placement_id = window.CHITIKA.units.length;
			    window.CHITIKA.units.push(unit);
			    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
			}());
			</script>
	<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
	</center> -->

	<!-- Suggestion -->
	<br><br>
	<div data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
		<form action="" method="POST">
			<center>
				<label>New movie fonts every sundays!</label><br>
				<label>Which Movie Font you want us to do next?</label>
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
						$hits = 29445;

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
