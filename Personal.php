<!doctype html>
<html>
<head>
	<title>Personal Website</title>
	<link rel="stylesheet" type="text/css" href="Personal.css">
	<link rel="stylesheet" href="jquery.flipster.min.css">
</head>
<body>
	<header>
		<a href="#" class="logo">D SISTER'S</a>
	</header>
	<section>
		<img src="ez2.jpg" id="stars">
		<h2 id="text">D SISTER'S</h2>
		<a href="#sec" id="btn">Explore</a>
	</section>
	<div class="sec" id="sec">
		<h2>D SISTER'S APPAREL</h2>
		<p>A PLACE WHERE YOU'RE WELCOME TO SEE AND EXPERIENCE HIGH QUALITY CLOTHING</p>
		<p>EXPLORE SOME OF BEST SELLING PRODUCTS SHOWCASED</p>
	</div>
	<div class="hero">
		<div class="carousel">
			<ul>
			
			<li><img src="ad1"></li>
			<li><img src="ad2"></li>
			<li><img src="ad3"></li>
			<li><img src="bd2"></li>
			<li><img src="bd3"></li>
			</ul>
	<div class="btn2" id="btn2">
	<a href="login3.php">Get Started</a>
	</div>
	</div>
		</div>
	<script>
		let stars = document.getElementById('stars');
		let text = document.getElementById('text');
		let btn = document.getElementById('btn');
		let header = document.querySelector('header');
		window.addEventListener('scroll', function(){
			let value = window.scrollY;
			stars.style.left = value * 0.25 + 'px';
			text.style.marginTop = value * 4.5 + 'px';
			text.style.marginbottom = value * 1.5 + 'px';
			btn.style.marginTop = value * 4.5 + 'px';
			header.style.top = value * 0.5 + 'px';
		})
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="jquery.flipster.min.js"></script>
	<script>
		$('.carousel').flipster({
		style:'carousel',
		spacing: -0.3,
		});
	</script>
</body>
</html>