<!DOCTYPE html>
<!-- 
	Template Designed by Deki Akbar | Made With : Semantic-UI 
 -->
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>Blog | Deki Akbar</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
</head>
<body>
	<div class="ui secondary pointing menu">
		<a class="item">Website</a>
		<a class="item active teal">Blog</a>
		<a class="item" onclick="tampil();">About</a>
		<div class="right menu">
			<a class="ui item">
		    	<i class="large github square icon"></i>
			</a>
			<a class="ui item">
		    	<i class="blue large facebook icon"></i>
			</a>
			<a class="ui item">
		    	<i class="teal large twitter square icon"></i>
			</a>
			<a class="ui item">
		    	<i class="purple large instagram icon"></i>
			</a>
		</div>
	</div>

	<div class="ui longer modal">
	  <i class="close icon"></i>
	  <div class="header">
	    Modal Title
	  </div>
	  <div class="image content">
	    <div class="image">
	      An image can appear on left or an icon
	    </div>
	    <div class="description">
	      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    </div>
	  </div>
	</div>

	<div class="ui container">
		<h2 class="ui header">
		  <i class="book icon"></i>
		  <div class="content">
		    Selamat Membaca
		    <div class="sub header">Pengetahuan itu gratis</div>
		  </div>
		</h2>
	</div>

	<div class="ui divider"></div>
	<div class="main content">
	    <div class="ui column stackable grid">
	    	<div class="three wide column">
			    <div class="ui segment blue raised stacked">
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
						<a class="title">
							<i class="dropdown icon"></i>
							<b>Kategori</b>
						</a>
						<div class="content menu">
							<div class="ui transition hidden">
							    <ul class="ui list" style="margin-left: 30px;">
								      <li><a class="item" href="#">Linux</a></li>
								      <li><a href="#">Elektronika</a></li>
								      <li><a href="#">Pemrograman</a></li>
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
								      <li><a href="#">Linux</a></li>
								      <li><a href="#">Ubuntu</a></li>
								      <li><a href="#">Debian</a></li>
								      <li><a href="#">PHP</a></li>
								</ul>
							</div>
						</div>
					</div>
			    </div>
			    <div class="ui segment blue center aligned raised stacked">
			    	<h4 class="ui horizontal divider header">
					  Bagikan
					</h4>
			    	<a href="#" class="ui twitter">
					  <i class="big twitter teal icon"></i>
					</a>
					<a href="#" class="ui linkedin">
					  <i class="big linkedin icon"></i>
					</a>
					<a href="#" class="ui facebook">
					  <i class="big facebook f blue icon"></i>
					</a>
					<a href="#" class="ui google">
					  <i class="big google plus red icon"></i>
					</a>
			    </div>
	    	</div>
	    	<div class="ten wide column">
	    		<div class="ui piled raised segment">
	    			<a class="ui blue right ribbon label">Linux</a>
	    			<span>
	    				<h3 class="ui header">
				        	<a href="#">Judul</a>
				    		<span class="sub header">April 1, 2027 by <a href="#">Deki</a></span>
				    	</h3>
					</span>
				    <div class="ui divider"></div>
				   	<p>
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				   	</p>
				    <blockquote>
				      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    </blockquote>
				    <div class="ui divider"></div>
				    	<a class="ui mini teal tag label">Linux</a>
				    	<a class="ui mini teal tag label">PHP</a>
				    	<a class="ui mini teal tag label">Web</a>
	    		</div>

	    		<div class="ui piled raised segment">
	    			<a class="ui blue right ribbon label">Linux</a>
	    			<span>
	    				<h3 class="ui header">
				        	<a href="#">Judul</a>
				    		<span class="sub header">April 1, 2027 by <a href="#">Deki</a></span>
				    	</h3>
					</span>
				    <div class="ui divider"></div>
				   	<p>
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				   	</p>
				    <blockquote>
				      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    </blockquote>
				    <div class="ui divider"></div>
				    <div class="ui">
				    	<a class="ui mini teal tag label">Linux</a>
				    	<a class="ui mini teal tag label">PHP</a>
				    	<a class="ui mini teal tag label">Web</a>
				    	<a class="ui label blue">Lihat</a>
				    </div>
	    		</div>

	    		<div class="ui piled raised segment">
	    			<a class="ui blue right ribbon label">Linux</a>
	    			<span>
	    				<h3 class="ui header">
				        	<a href="#">Judul</a>
				    		<span class="sub header">April 1, 2027 by <a href="#">Deki</a></span>
				    	</h3>
					</span>
				    <div class="ui divider"></div>
				   	<p>
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				   	</p>
				    <blockquote>
				      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    </blockquote>
				    <div class="ui divider"></div>
				    <div class="ui">
				    	<a class="ui mini teal tag label">Linux</a>
				    	<a class="ui mini teal tag label">PHP</a>
				    	<a class="ui mini teal tag label">Web</a>
				    	<a class="ui label blue">Lihat</a>
				    </div>
	    		</div>

	    	</div>
	    	<div class="three wide column">
				<div class="ui segment tall stacked raised">
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
	    	</div>
	    </div>
	</div>
	<br>
	<footer>
		<div class="ui segment center aligned">
			<p>&copy;{!! date('Y') !!} 
				<a href="https://dekiakbar.com">Dekiakbar.com</a> | Made With :
				<a href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
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
	</script>
</body>
</html>