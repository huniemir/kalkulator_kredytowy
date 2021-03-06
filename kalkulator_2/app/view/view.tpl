<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator Kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Kalkulator Kredytowy</a></h1>
						<nav>
                                                    <a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="{$conf->app_url}/index.php">Strona główna</a></li>
								<li><a href="{$conf->app_url}/ctrl.php">Kalkulator</a></li>
							</ul>
							<a href="#" class="close">Zamknij</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
                                                                    
                                                                    <h2 class="major">{block name=title}Get in touch{/block}</h2>
                                                                    <p>{block name=body}Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.{/block}</p>
                                                                    {block name=content}
                                                                    <form method="post" action="#">
                                                                            <div class="fields">
                                                                                    <div class="field">
                                                                                            <label for="name">Name</label>
                                                                                            <input type="text" name="name" id="name" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="email">Email</label>
                                                                                            <input type="email" name="email" id="email" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="message">Message</label>
                                                                                            <textarea name="message" id="message" rows="4"></textarea>
                                                                                    </div>
                                                                            </div>
                                                                            <ul class="actions">
                                                                                    <li><input type="submit" value="Send Message" /></li>
                                                                            </ul>
                                                                    </form>
                                                                    {/block}
									
									

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
                                                <div class="inner">
							<ul class="copyright">
								<li>&copy; Marek Rybczyński Inc. Żadnych praw zastrzeżonych</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
                                                </div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/assets/js/util.js"></script>
			<script src="{$conf->app_url}/assets/js/main.js"></script>

	</body>
</html>