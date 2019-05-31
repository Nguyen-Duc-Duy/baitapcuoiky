	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TRANG CHỦ</title>

		<link rel="icon" href="anh/icon.png">


		<link rel="stylesheet" href="fontawesome/css/all.css">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery-ui.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/slick.css">
		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		
		

		<script type="text/javascript" src="js/slick.js"></script>

		<!--  wow.js -->
		<link rel="stylesheet" href="allstyle/WOW-master/WOW-master/css/libs/animate.css">
		<script src="allstyle/WOW-master/WOW-master/dist/wow.min.js"></script>
		<link rel="stylesheet" href="allstyle/css/basket.css">
		<link rel="stylesheet" href="allstyle/css/login.css">
		<link rel="stylesheet" href="allstyle/css/signup.css">
		<link rel="stylesheet" href="allstyle/css/test_order.css">
		<link rel="stylesheet" href="allstyle/css/animate.css">
		<link rel="stylesheet" href="allstyle/css/index.css">
		<link rel="stylesheet" href="allstyle/css/phong.css">
		<link rel="stylesheet" href="allstyle/css/abb.css">
		<link rel="stylesheet" href="allstyle/css/acc.css">


		<link rel="stylesheet" href="abc.css">

		<script src="allstyle/js/basket.js"></script>
		<script src="allstyle/js/login.js"></script>
		<script src="allstyle/js/signup.js"></script>
		<script src="allstyle/js/test_order.js"></script>



		<script>
			new WOW().init (); 
		</script>



	</head>
	<body>							
		<script>
			
			$(function(){
				$('.carousel').carousel({
					interval:3000
				});
			});

			
			$(document).ready(function($) {
				$('.slick.marquee').slick({
					speed: 5000,
					autoplay: true,
					autoplaySpeed: 0,
					centerMode: true,
					cssEase: 'linear',
					slidesToShow: 1,
					slidesToScroll: 1,
					variableWidth: true,
					infinite: true,
					initialSlide: 1,
					arrows: false,
					buttons: false
				});
			});
		</script>
		
		<?php 
		include("top.php");
		if(isset($_GET["module"])){
			$module = $_GET["module"];
			include("viewphp/".$module.".php");
		}else{
			include("body.php");
		}
		include("footer.php");
		?>
						
	</body>
</html>



