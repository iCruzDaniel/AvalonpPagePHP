<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Avalon a Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<link href="/vistas/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<link href="/vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Avalon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<!-- js -->
	<script type="text/javascript" src="/vistas/js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="/vistas/js/move-top.js"></script>
	<script type="text/javascript" src="/vistas/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smooth-scrolling -->

</head>

<body>
	<!-- banner -->
	<?php if (!isset($_GET["pag"]) || $_GET["pag"] == "inicio"): ?>
		<div class="banner">
		<?php else: ?>
			<div class="banner pg-head">
			<?php endif ?>

			<div class="container">

				<?php if (!isset($_GET["pag"]) || $_GET["pag"] == "inicio"): ?>
					<div class="logo">
					<?php else: ?>

						<div class="logo head">
						<?php endif ?>

						<a href="index.php?pag=inicio"><img src="/vistas/images/2.jpg" alt="" /></a>
						</div>
						<div class="navigation">
							<span class="menu"><img src="/vistas/images/menu.png" alt="" /></span>
							<ul class="nav1">

								<?php if (isset($_GET["pag"])): ?>
									<?php if ($_GET["pag"] == "about"): ?>
										<li><a href="index.php?pag=about" class="active">ABOUT</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=about">ABOUT</a></li>
									<?php endif ?>


									<?php if ($_GET["pag"] == "services"): ?>
										<li><a href="index.php?pag=services" class="active">SERVICES</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=services">SERVICES</a></li>
									<?php endif ?>


									<?php if ($_GET["pag"] == "portfolio"): ?>
										<li><a href="index.php?pag=portfolio" class="active">PORTFOLIO</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=portfolio">PORTFOLIO</a></li>
									<?php endif ?>


									<?php if ($_GET["pag"] == "blog"): ?>
										<li><a href="index.php?pag=blog" class="active">BLOG</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=blog">BLOG</a></li>
									<?php endif ?>


									<?php if ($_GET["pag"] == "404"): ?>
										<li><a href="index.php?pag=404" class="active">SHOP</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=404">SHOP</a></li>
									<?php endif ?>


									<?php if ($_GET["pag"] == "contact"): ?>
										<li><a href="index.php?pag=contact" class="active">CONTACT</a></li>
									<?php else: ?>
										<li><a href="index.php?pag=contact">CONTACT</a></li>
									<?php endif ?>
								<?php else: ?>
									<li><a href="index.php?pag=about">ABOUT</a></li>
									<li><a href="index.php?pag=services">SERVICES</a></li>
									<li><a href="index.php?pag=portfolio">PORTFOLIO</a></li>
									<li><a href="index.php?pag=blog">BLOG</a></li>
									<li><a href="index.php?pag=404">SHOP</a></li>
									<li><a href="index.php?pag=contact">CONTACT</a></li>

								<?php endif ?>



							</ul>
							<!-- script for menu -->
							<script>
								$("span.menu").click(function() {
									$("ul.nav1").slideToggle(300, function() {
										// Animation complete.
									});
								});
							</script>
							<!-- //script for menu -->

						</div>

						<?php if (!isset($_GET["pag"]) || $_GET["pag"] == "inicio"): ?>
							<div class="banner-info text-center">
								<h1>WELCOME TO <span>AVALON</span></h1>
								<p>creative & innovative team</p>
								<div class="view"><a href="#" class="hvr-shutter-in-vertical button">VIEW PROJECTS</a></div>
							</div>
						<?php endif ?>

					</div>
			</div>
			<!-- //banner -->

			<?php

			if (isset($_GET["pag"])) {

				if (
					$_GET["pag"] == "about" ||
					$_GET["pag"] == "services" ||
					$_GET["pag"] == "portfolio" ||
					$_GET["pag"] == "inicio" ||
					$_GET["pag"] == "blog" ||
					$_GET["pag"] == "404" ||
					$_GET["pag"] == "contact"
				) {

					include "paginas/" . $_GET["pag"] . ".php";
				} else {

					include "paginas/404.php";
				}
			} else {

				include "paginas/inicio.php";
			}



			?>

			<!-- footer -->
			<div class="footer">
				<div class="container">
					<p>Copyright &copy; 2015 Avalon. Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
				</div>
			</div>
			<!-- //footer -->
</body>

</html>