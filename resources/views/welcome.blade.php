<!DOCTYPE HTML>
<html>
	<head>
		<title>BAGUS BATRA | Welcome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" href="images/logo-black.png">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon">
                                <img id="logoImage" src="images/logo-white.png" alt="">
                            </span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Welcome To <span class="typing">My Personal Web</span></h1>
                                <p>This website is a place where I share <a href="">my projects</a>, <a href="">hobbies</a>, 
                                    <a href="">experiences</a>, and <a href="">small moments</a> from my journey in technology and life. <br> 
                                    Feel free to explore my website and discover my projects and experiences.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="">About Me</a></li>
								<li><a href="">Projects</a></li>
								<li><a href="">Activities</a></li>
								<li><a href="">Achievements</a></li>
								<li><a href="">Blogs</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright"><b>&copy; 2026 Bagus. Thank you for visiting my personal website.</b></p>
                        <a href=""><i class="ph ph-github-logo"></i></a>
                        <a href=""><i class="ph ph-linkedin-logo"></i></a>
                        <a href=""><i class="ph ph-whatsapp-logo"></i></a>
                        <a href=""><i class="ph ph-instagram-logo"></i></a>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

            <script>
            setTimeout(function() {
                const logo = document.getElementById("logoImage");
                logo.style.opacity = "0";

                setTimeout(function(){
                    logo.src = "images/logo-real.png";
                    logo.style.opacity = "1";
                },500);

            },3000);
            </script>

	</body>
</html>
