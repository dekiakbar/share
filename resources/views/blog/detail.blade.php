@extends('blog.master')

@section('isi')
	<div class="ui segment raised piled purple">
		<div class="ui breadcrumb">
			<a href="/blog" class="section">Home</a>
			<div class="divider"> / </div>
			<div class="active section">{{ $post->title }}</div>
		</div>
	</div>
	<div class="ui segment piled raised">

		<div class="ui divider"></div>
		{!! $post->body !!}
	</div>
@endsection