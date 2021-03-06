<!DOCTYPE HTML>
<!--
	template designed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	    <link rel="alternate" hreflang="id" href="https://dekiakbar.com/" />
		<title>{!! setting('site.title') !!}</title>
		<meta name="googlebot" content="index">
		<meta name="robots" content="index,follow">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="{{ setting('site.about_desc') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={!! setting('site.google_analytics_tracking_id') !!}"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '{!! setting('site.google_analytics_tracking_id') !!}');
		</script>

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
								<li><a href="https://ngoprek.dekiakbar.com">Blog</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">{!! setting('site.intro_title') !!}</h2>
								@if(setting('site.intro_image') != null)
								    <span class="image main"><img src="storage/{!! setting('site.intro_image') !!}" alt="" /></span>
								@endif
								<p>{!! setting('site.intro_desc') !!}
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">{!! setting('site.about_title') !!}</h2>
								@if(setting('site.about_Image') != null)
								    <span class="image main"><img src="storage/{!! setting('site.about_Image') !!}" alt="" /></span>
								@endif
								<p>{!! setting('site.about_desc') !!}</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="{{ url('/kirim') }}">
									{{ csrf_field() }}
									<div class="field half first">
										<label for="nama">Name</label>
										<input type="text" name="nama" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="pesan">Message</label>
										<textarea name="pesan" id="message" rows="4"></textarea>
									</div>
									@if($errors->any())
										<ul>
										@foreach($errors->all() as $error)
											<li>{!! $error !!}</li>
							      		@endforeach
							      		</ul>
							        @endif
							        @if(session()->has('status'))
							        	<ul>
							        		<li>{!! session('status') !!}</li>
							        	</ul>
							        @endif
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
										<a target="_blank" href="{!! setting('site.twitter') !!}" class="icon fa-twitter">
											<span class="label">Twitter</span>
										</a>
									</li>
									<li>
										<a target="_blank" href="{!! setting('site.fb') !!}" class="icon fa-facebook">
											<span class="label">Facebook</span>
										</a>
									</li>
									<li>
										<a target="_blank" href="{!! setting('site.linkedin') !!}" class="icon fa-linkedin">
											<span class="label">Instagram</span>
										</a>
									</li>
									<li>
										<a target="_blank" href="{!! setting('site.git') !!}" class="icon fa-github">
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
