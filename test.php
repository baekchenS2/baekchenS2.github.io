<?php
header("Content-Type: text/html; charset=UTF-8"); 

$cPhoto_one=$_POST['bc01'];
echo "$cPhoto";
?>

<!DOCTYPE html>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>백첸은 찐이다</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="script.js"></script>
		<script>
			var state=0;
			var storage = localStorage;
		</script>


	</head>

	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1>2018년 <span style="color:blue">백</span><span style="color:green">첸</span> 떡밥 월드컵</h1>
					<p>당신의 백첸에 투표하세요! 'ㅅ')ㅅ('w'</p>
				</header>
				<div class="container">
					<ul class="actions special">
						<li><a href="#one" class="button primary scrolly">Begin</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->


			<section id="three" class="main special">
					<div class="container">
						<a href="index30.html" id="choice01">
						<span class="image fit primary">
							<img id="img03" onclick="choicePhoto[1]='images/bc03.jpg'">
							<script>
								document.getElementById('img03').src=$cPhoto;
							</script>
							</a>
							</span>
					<div class="content">
						<header class="major">
								<h2>
									<script>
										document.write(title[2]);
									</script>
								</h2>
						</header>
					</div>
					<a href="#two" class="goto-;next scrolly">Next</a>
				</div>
			</section>

		<!-- Two -->

			<section id="four" class="main special">
				<div class="container">
					<a href="index30.html" target="_self" id="choice04" onclick="savePhotoName(2)">

						<span class="image fit primary">
							<img id = "img04">
								<script>
									document.getElementById('img04').src=photo[3];
								</script>
							</a>
						</span>
					<div class="content">
						<header class="major">
								<h2>
									<script>
										document.write(title[3]);
									</script>
								</h2>
						</header>
					</div>
					<a href="#two" class="goto-;next scrolly">Next</a>
				</div>
			</section>
			<input type = hidden  
		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>주관식</h2>
					</header>
					<form method="post" action="#">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Send Message" class="primary" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<footer>
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>Demo Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</footer>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<!--
				<script>
			location.href="index2.html?"+choicePhoto[0]+":"+choiceTitle[0]
			</script>
-->

	</body>
</html>
