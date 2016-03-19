<!DOCTYPE>		
<html>
<title>Navbar menu css only</title>
<head>
	<link rel="stylesheet" href="style.css">

</head>
	<body>
		<nav class="masterNav">
			<div class="navbarNav container">
				<ul class="navbarWrapper">
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo 'class="active"';} ?> ><a href="index.php">Home</a></li>
					<li class='hasSubmenu <?php if (stripos($_SERVER['REQUEST_URI'],'blog.php') !== false) {echo "active";} ?> '><a href="blog.php">Blog<span class="arrow-down"></span></a>
						<ul>
							<li><a href="#">Item1</a></li>
							<li><a href="#">Item2</a></li>
							<li><a href="#">Item3<span class="arrow-rigth"></a>
								<ul class="navWalker">
									<li><a href="#">subitem1</a></li>
									<li><a href="#">subitem2</a></li>
									<li><a href="#">subitem3</a></li>
								</ul>
							</li>
						</ul>

					</li>
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'testimonial.php') !== false) {echo 'class="active"';} ?> ><a href="testimonial.php">Testimonial</a></li>
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'about.php') !== false) {echo 'class="active"';} ?> ><a href="about.php">About Us</a></li>
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'help.php') !== false) {echo 'class="active"';} ?> ><a href="help.php">Help</a></li>
				</ul>
			</div>
		</nav>
