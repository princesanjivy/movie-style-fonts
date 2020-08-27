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

	<style type="text/css">
		@font-face {
			font-family: Title;
			src: url(fonts/Titlefont.ttf);
		}

		@font-face {
			font-family: Footer;
			src: url(fonts/Footerfont.ttf);
		}

		@font-face {
			font-family: Tagline;
			src: url(fonts/Taglinefont.ttf);
		}

		@font-face {
			font-family: Content;
			src: url(fonts/Contentfont.ttf);
		}

		* {
			font-family: Content;
		}

		body {
			background-color: #f2f2f2;
		}

		p {
			font-family: Content;
			font-size: 20px;
			font-weight: normal;
		}

		h2 {
			font-family: Title;
			color: white;
			font-size: 150px;
		}

		h4 {
			font-family: Content;
			font-size: 28px;
			color: grey;
			font-weight: bold;
			text-align: center;
		}

		h3 {
			font-family: Tagline;
			color: white;
			font-size: 25px;
		}

		.Heading {
			color: white;
			font-family: Tagline;
			padding-left: 20px;
			font-size: 20px;
		}

		label {
			color: black;
			font-size: 18px;
			font-family: Content;
		}

		i {
			color: grey;
		}

		.btn {
			font-size: 15px; 
			font-family: Tagline;
		    background-color: white;
		    color: black;
		    border: 2px solid #555555;
		}

		.btn:hover {
			font-size: 15px; 
			font-family: Tagline;
		    background-color: #555555;
		    color: white;
		}

		input[type=text] {
		    width: 300px;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    background: transparent;
		    border: 2px solid grey;
		    border-radius: 6px;
		    font-family: Content;
		}

		input[type=text]:focus{
			border-color: lightgrey;
		}

		/*Font Display*/

		.font-display {
		  width: 100%;
		  float: left;
		  margin-bottom: 40px;
		}

		.font-display > a {
		  width: 100%;
		  float: left;
		  background: #fff;
		}

		.font-display > a:hover {
		  -webkit-box-shadow: 0px 8px 16px -4px rgba(0, 0, 0, 0.13);
		  -moz-box-shadow: 0px 8px 16px -4px rgba(0, 0, 0, 0.13);
		  box-shadow: 0px 8px 16px -4px rgba(0, 0, 0, 0.13);
		}

		.font-display > a:hover .movie-desc {
		  opacity: 1;
		  background-color: white;
		}

		.font-display .movie-cover {
		  width: 100%;
		  float: left;
		  background-size: cover;
		  background-position: center center;
		  background-repeat: no-repeat;
		  position: relative;
		  height: 300px;
		}

		@media screen and (max-width: 768px) {
		  .font-display .movie-cover {
		    height: 400px;
		  }
		}

		.font-display .movie-cover .movie-desc {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background: rgba(255, 255, 255, 0.95);
		  opacity: 0;
		  padding: 30px;
		  -webkit-transition: 0.3s;
		  -o-transition: 0.3s;
		  transition: 0.3s;
		}

		.font-display .movie-cover .movie-desc p {
		  color: #8f989f;
		  font-weight: 900;
		}

	</style>

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

		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"><h4>Black Panther.</h4></div>
			<br><br>
			<div class="row">

					<?php

					$image_filepath = './images/Panther.jpg';
					$Username = $_POST["username"];
					saveImageWithText($Username, $image_filepath);
					 
					function saveImageWithText($text, $source_file) { 
					   
					  $public_file_path = '.';
					   
					  // Copy and resample the imag
					  list($width, $height) = getimagesize($source_file);
					  $image_p = imagecreatetruecolor($width, $height);
					  $image = imagecreatefromjpeg($source_file);
					  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
					   
					  // Prepare font size and colors
					  $text_color = imagecolorallocate($image_p, 255, 255, 255);
					  //$bg_color = imagecolorallocate($image_p, 255, 255, 255);
					  $font = $public_file_path . '/fonts/Blackpantherfont.ttf';
					  $font_size = 95; 
					   
					  // Set the offset x and y for the text position
					  $offset_x = 760;
					  $offset_y = 600;
					   
					  // Get the size of the text area
					  $dims = imagettfbbox($font_size, 0, $font, $text);
					  $text_width = $dims[4] - $dims[6] + $offset_x;
					  $text_height = $dims[3] - $dims[5] + $offset_y;
					   
					  // Add text background
					  //imagefilledrectangle($image_p, 0, 0, $text_width, $text_height, $bg_color);  

					  // Add text
					  imagettftext($image_p, $font_size, 0, $offset_x, $offset_y, $text_color, $font, $text);
					   
					  // Save the picture
					  imagejpeg($image_p, './output/Black Panther_'. $text . '.jpg', 100); 
					 
					  // Clear
					  imagedestroy($image); 
					  imagedestroy($image_p); 
					}; 
				
			
					echo '
						<div class="row">
						<div class="col-md-6"  data-aos="fade-right" data-aos-duration="1300" data-aos-once="true">

							<div class="thumbnail"><img src="./output/Black Panther_' . $Username . '.jpg" alt="" /></div>
						
						  	<center><a href="./output/Black Panther_' . $Username . '.jpg" class="btn" download>Download</a></center>
						  </div>
						  <div class="col-md-6">
						  <div class="fb-comments" data-href="http://moviestylefonts.ga/BlackPanther" data-numposts="5" data-width="100%"></div>
						  </div>
						  </div>';

				?>

			</div>

		</div>

		<br>
		<!-- Home Button -->
		<div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
			<center>
				<a class="btn" style="font-size: 20px;" href="/">Home</a>
			</center>
		</div>

	</div>
	<!-- Content Ends -->

	
	<br><br>
	<!-- Footer -->
	<footer>
			
		<div style="background-image: url(images/Background.jpg); width: 100%; height: 100%;  background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
			<div style="padding-top: 30px; font-size: 25px;">
				<center>
					
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