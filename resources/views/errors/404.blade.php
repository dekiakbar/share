<!DOCTYPE html>
<html>
<head>

	<title>404 | Not Found</title>
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}"> --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link href="{{ asset('css/jquery.terminal-1.11.3.min.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/shell.js@1.0.5/dist/css/shell.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
	body .shell {
    width: 400px;
    height: 300px;
	}
	.shell .typed-cursor, .shell .cursor {
	    background: transparent;
	}
	.shell > .status-bar .title {
	    cursor: move;
	}

	.shell.windows .status-bar .title {
	    right: 106px;
	}
	@supports (--css: variables) {
	    terminal {
	        --background: transparent;
	    } 
	}

	.cmd {
		background-color: transparent !important;
	}

	.shell .terminal.content,
	.shell.osx .content,
	.shell.ubuntu .content {
	    background-color: var(--background, #000000) !important;
	}

	.shell .terminal.content {
	    font-size: 12px;
	}
	@supports (--css: variables) {
	    .shell .terminal.content {
	        font-size: calc(var(--size, 1) * 12px);
	        --color:white;
	        --background:rgba(0,0,0,0.8);
	    }
	}
	</style>
</head>
<body>
<div class="shell ubuntu shadow" style="margin:13.5% auto;z-index: 2">
    <div class="status-bar">
        <div class="buttons">
            <a href="javascript:;" class="close" title="Close">
                <i class="fa fa-times"></i>
            </a>
            <a href="javascript:;" class="minimize" title="Minimize">
                <i class="fa fa-minus"></i>       
            </a>
            <a href="javascript:;" class="enlarge" title="Enlarge">
                <i class="fa fa-plus"></i>    
            </a>    
        </div>
        <div class="title">root@linux:~#</div>
    </div>
    <div class="content"></div>
</div>
<div style="
		background-image:url('{{ asset('storage') }}/{!! setting('site.bg') !!}'););
        -moz-transform: scale(1.0);
		-webkit-transform: scale(1.0);
		-ms-transform: scale(1.0);
		transform: scale(1.0);
		-webkit-backface-visibility: hidden;
		-webkit-filter: blur(3px);
        -moz-filter: blur(3px);
        -o-filter: blur(3px);
        -ms-filter: blur(3px);
  		filter: blur(5px);
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;"></div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
	<script src="{{ asset('js/jquery.terminal-1.11.3.min.js') }}"></script>
	<script type="text/javascript" src="https://rawgit.com/jcubic/leash/master/lib/wcwidth.js"></script>
	<script type="text/javascript" src="https://rawgit.com/inexorabletash/polyfill/master/keyboard.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://rawgit.com/jcubic/jquery.terminal/master/js/jquery.mousewheel-min.js"></script>

	<script type="text/javascript">
	var shell = $('.shell').resizable({
	    minHeight: 108,
	    minWidth: 100
	}).draggable({
	    handle: '> .status-bar .title'
	});

	var term = $('.content').terminal(function(command) {
	    if (command == 'bantuan') {
	        this.echo("Ketik 'bantuan' untuk menampilakn pesan ini\nKetik 'kembali' untuk kembali ke menu");
	    }else if(command == 'kembali'){
	    	window.location.href = 'https://dekiakbar.com';
	    }else {
	        this.echo(command+' : Perintah tidak dikenal\nKetik "bantuan" untuk menampilkan bantuan');
	    }
	},
	{
	    prompt: 'root@linux:~# ',
	    greetings: '404|Not Found\nMohon maaf atas ketidak nyamanan ini\nSaya yakin ini hanya kesalahan sistem\nKetik "help" untuk menampilakn bantuan\nKetik "kembali" untuk kembali ke menu',
	});
	</script>
</body>
</html>