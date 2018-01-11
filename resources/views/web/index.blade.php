<!DOCTYPE HTML>
<!--
	template designed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{!! setting('site.title') !!}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-laptop"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>{!! setting('site.hi') !!}</h1>
								<p>{!! setting('site.description') !!}</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="http://blog.dekiakbar.com">Blog</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">{!! setting('site.intro_title') !!}</h2>
								<span class="image main"><img src="storage/{!! setting('site.intro_image') !!}" alt="" /></span>
								<p>{!! setting('site.intro_desc') !!}
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">{!! setting('site.about_title') !!}</h2>
								<span class="image main"><img src="storage/{!! setting('site.about_Image') !!}" alt="" /></span>
								<p>{!! setting('site.about_desc') !!}</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
									<li>
										<a href="{!! setting('site.twitter') !!}" class="icon fa-twitter">
											<span class="label">Twitter</span>
										</a>
									</li>
									<li>
										<a href="{!! setting('site.fb') !!}" class="icon fa-facebook">
											<span class="label">Facebook</span>
										</a>
									</li>
									<li>
										<a href="{!! setting('site.ig') !!}" class="icon fa-instagram">
											<span class="label">Instagram</span>
										</a>
									</li>
									<li>
										<a href="{!! setting('site.git') !!}" class="icon fa-github">
											<span class="label">GitHub</span>
										</a>
									</li>
								</ul>
						<p class="copyright">&copy;{!! date('Y') !!} 
							<a href="https://dekiakbar.com">Dekiakbar.com</a> | Design: 
							<a href="https://html5up.net">HTML5</a> | With :
							<a href="https://Laravel.com">Laravel</a>.
						</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg" style="background-image: url('{{ asset('storage') }}/{!! setting('site.bg') !!}');"></div>

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/skel.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>
