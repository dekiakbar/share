<!DOCTYPE html>
<!-- 
	Template Designed by Deki Akbar | Made With : Semantic-UI 
-->
<html>
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>{!! setting('blog.title') !!}@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/highlight/styles/tomorrow-night-bright.css') }}">
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
	<div class="ui secondary pointing menu">
		<a href="https://dekiakbar.com" class="item">Website</a>
		<a class="item active teal">Blog</a>
		<a class="item" onclick="tampil();">Tentang</a>
	</div>

	@yield('sayhi')

	<div class="ui longer modal">
		<i class="close icon"></i>
		<div class="header">
	    	{!! setting('blog.about_title') !!}
		</div>
		<div class="image content">
			<img class="ui image" src="{!! asset('storage') !!}/{!! setting('blog.about_photo') !!}" style="max-height: 400px;">
	    	<div class="description" style="margin-left: 10px;">
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
							<form method="post" action="{{ url('/blog') }}" class="ui form">
								{{ csrf_field() }}
								<div class="ui icon input" style="max-width: 200px;">
									<input class="prompt" placeholder="Cari" type="text" name="cari">
									<i class="search icon"></i>
								</div>
								<div class="ui error message pointing basic label" style="padding: 5px !important;">
								</div>
							</form>
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
								    	@if($kategori->parent_id == null)
								    		<li>
								    			<a href="/blog/kategori/{{ $kategori->slug }}" class="item">{{ $kategori->name }}</a>
								      		</li>
								    	@endif
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
									@foreach($tags as $sub)
										<li><a href="/blog/tag/{{ $sub->slug }}">{{ $sub->name }}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
			    </div>

	    		<div class="ui segment tall raised stacked blue">
					<h4 class="ui horizontal divider header">
				  		Terbaru
				  	</h4>
					<div class="ui feed">
						@foreach($baru as $baru)
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
						<div class="ui divider"></div>
						@endforeach
					</div>
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

				<div class="ui segment teal center aligned raised stacked tall">
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
					<a target="_blank" href="{{ $bagikan->telegram }}" class="ui google">
					  <i class="big telegram icon"></i>
					</a>
			    </div>

				<div class="ui segment tall stacked raised teal">
					<h4 class="ui horizontal divider header">
						Arsip
					</h4>
					<div class="ui accordion" style="margin-bottom: 5px;">
						@foreach($arsip as $arsip)
							<div class="title ">
							    <i class="dropdown icon"></i>
							    {{ $arsip->tahun }}
							</div>
							<div class="content" style="margin-bottom: -10px;">
							    <div class="accordion transition visible" style="display: block !important;margin-top: -15px;margin-left: 10px;">
							    	@foreach($arsipBulan as $Bulan )
								        @if($Bulan->tahun == $arsip->tahun)
									        <div class="title " style="margin-bottom: -10px;">
									        	<i class="dropdown icon"></i>
									        	{{ $Bulan->bulan }}
									        </div>
									        <div class="content" style="margin-bottom: -10px;">
									        	<ul class="ui list" style="margin-left: 30px;">
									        		@foreach($arsipJudul as $Judul)
									      				@if($Judul->tahun == $arsip->tahun && $Judul->bulan == $Bulan->bulan)
									        				<li>
									        					<a href="/blog/{{ $Judul->slug }}" style="margin-left: 3px;">{{ $Judul->title }}</a>
									        				</li>
									      				@endif
									        		@endforeach
									        	</ul>
									        </div>
								      	@endif
							    	@endforeach
							    </div>
							</div>
						@endforeach
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

		this.$('.ui.form')
		  .form({
		    fields: {
		      cari: {
		        identifier: 'cari',
		        rules: [
		          {
		            type   : 'regExp[/^[a-z0-9_-]{1,16}$/]',
		            prompt : 'Form harus berisi huruf'
		          }
		        ]
		      }
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

