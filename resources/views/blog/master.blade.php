<!DOCTYPE html>
<!-- 
	Template Designed by Deki Akbar | Made With : Semantic-UI 
-->
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>{!! setting('blog.title') !!} | {!! setting('site.title') !!}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/highlight/styles/tomorrow-night-bright.css') }}">
</head>
<body>
	<div class="ui secondary pointing menu">
		<a class="item">Website</a>
		<a class="item active teal">Blog</a>
		<a class="item" onclick="tampil();">About</a>
		{{-- <div class="right menu">
			<a href="{!! setting('blog.git_blog') !!}" class="ui item">
		    	<i class="large github square icon"></i>
			</a>
			<a href="{!! setting('blog.fb_blog') !!}" class="ui item">
		    	<i class="blue large facebook icon"></i>
			</a>
			<a href="{!! setting('blog.twitter_blog') !!}" class="ui item">
		    	<i class="teal large twitter square icon"></i>
			</a>
			<a href="{!! setting('blog.ig_blog') !!}" class="ui item">
		    	<i class="purple large instagram icon"></i>
			</a>
		</div> --}}
	</div>

	@yield('sayhi')

	<div class="ui longer modal">
		<i class="close icon"></i>
		<div class="header">
	    	{!! setting('blog.about_title') !!}
		</div>
		<div class="image content">
			<img class="images" src="storage/{!! setting('site.bg') !!}">
	    	<div class="description">
				{!! setting('blog.about_desc') !!}
	    	</div>
		</div>
	</div>

	<div class="ui divider"></div>

	<div class="main content">
	    <div class="ui column stackable grid">
	    	<div class="three wide column">
			    <div class="ui segment blue raised stacked tall">
			    	<h4 class="ui horizontal divider header">
					  Pencarian
					</h4>
					<br>
					<div class="ui center aligned grid">
						<div class="ui search">
							<div class="ui icon input" style="max-width: 200px;">
								<input class="prompt" placeholder="Cari" type="text">
								<i class="search icon"></i>
							</div>
							<div class="results"></div>
						</div>
					</div>
					<br>
					<br>
			    	<div class="ui accordion">
						<div class="title">
							<i class="dropdown icon"></i>
							<b>Kategori</b>
						</div>
						<div class="content menu">
							<div class="ui transition hidden">
							    <ul class="ui list" style="margin-left: 30px;">
							    	@foreach($kategoris as $kategori)
								      <li>
								    	<a href="/blog/kategori/{{ $kategori->slug }}" class="item" href="#">{{ $kategori->name }}</a>
								      </li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="title">
							<i class="dropdown icon"></i>
							<b>Tag</b>
						</div>
						<div class="content">
						  <div class="ui transition hidden">
								<ul class="ui list" style="margin-left: 30px;">
									@foreach($tags as $tag)
										<li><a href="#">{{ $tag->name }}</a></li>
									@endforeach	
								</ul>
							</div>
						</div>
					</div>
			    </div>
			    <div class="ui segment blue center aligned raised stacked tall">
			    	<h4 class="ui horizontal divider header">
					  Bagikan
					</h4>
			    	<a target="_blank" href="{{ $bagikan->twitter }}" class="ui twitter">
					  <i class="big twitter teal icon"></i>
					</a>
					<a target="_blank" href="{{ $bagikan->linkedin }}" class="ui linkedin">
					  <i class="big linkedin icon"></i>
					</a>
					<a target="_blank" href="{{ $bagikan->facebook }}" class="ui facebook">
					  <i class="big facebook f blue icon"></i>
					</a>
					<a target="_blank" href="{{ $bagikan->gplus }}" class="ui google">
					  <i class="big google plus red icon"></i>
					</a>
			    </div>
	    	</div>

	    	<div class="ten wide column">
	    		@yield('isi')
	    	</div>

			<div class="three wide column">
				<div class="ui segment tall raised stacked teal center aligned">
					<h4 class="ui horizontal divider header">
						Kontak
					</h4>
					<a target="_blank" href="{!! setting('blog.git_blog') !!}" class="ui item">
		    			<i class="large github square black icon"></i>
					</a>
					<a target="_blank" href="mailto:{!! setting('blog.email_blog') !!}" class="ui item">
				    	<i class="violet large mail square icon"></i>
					</a>
					<a target="_blank" href="{!! setting('blog.linkedin_blog') !!}" class="ui item">
				    	<i class="large linkedin square icon"></i>
					</a>
					<a target="_blank" href="{!! setting('blog.fb_blog') !!}" class="ui item">
				    	<i class="blue large facebook icon"></i>
					</a>
					<a target="_blank" href="{!! setting('blog.twitter_blog') !!}" class="ui item">
				    	<i class="teal large twitter square icon"></i>
					</a>
					<a target="_blank" href="{!! setting('blog.ig_blog') !!}" class="ui item">
				    	<i class="purple large instagram icon"></i>
					</a>
				</div>

				<div class="ui segment tall stacked raised teal">
				  <h4 class="ui horizontal divider header">
				  	Arsip
				  </h4>
				  	<div class="ui bulleted list">
					  	<div class="item">Gaining Access</div>
					  	<div class="item">Inviting Friends</div>
					  	<div class="item">
					    	<div>Benefits</div>
					    	<div class="list">
					      		<a class="item" href="#">Link to somewhere</a>
					      		<div class="item">Rebates</div>
					      		<div class="item">Discounts</div>
					    	</div>
					  	</div>
					  	<div class="item">Warranty</div>
					</div>
				</div>
				<div class="ui segment tall raised stacked teal">
					<h4 class="ui horizontal divider header">
				  		Terbaru
				  	</h4>
					<div class="ui feed">
						<div class="event">
						    <div class="content">
						      	<div class="summary">
						        	<a href="/blog/{{ $baru->slug }}">{{ $baru->title }}</a>
						      	</div>
						      	<div class="date" style="margin-top: 3px;">
						        	<p>{{ date_format($baru->created_at,'h:m:s d-m-Y') }}</p>
						      	</div>
						    </div>
						</div>
					</div>
				</div>
	    	</div>

	    </div>
	</div>
	<br>
	<footer>
		<div class="ui segment center aligned">
			<p>&copy;{!! date('Y') !!} 
				<a href="https://dekiakbar.com">Dekiakbar.com</a> | Made With :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
	<script type="text/javascript" src="https://semantic-ui.com/javascript/library/highlight.min.js"></script>
	<script type="text/javascript">
		$('.ui.accordion').accordion({
		    selector: {
		      trigger: '.title'
		    }
		});

		function tampil(){
			$('.ui.longer.modal').
			modal({
				blurring: true,
				transition: 'fade in'
			}).
			modal('show');
  		}
  		hljs.initHighlightingOnLoad();
	</script>
</body>
</html>

