@extends('blog.master')
@section('judul',' | '.$post->title)
@section('isi')
	<div class="ui segment raised piled purple">
		<div class="ui breadcrumb">
			<a href="/blog" class="section">Home</a>
			<div class="divider"> / </div>
			<div class="active section">{{ $post->title }}</div>
		</div>
	</div>
	<div class="ui segment piled raised">
		<div class="ui container">
			<div class="ui large header">{{ $post->title }}</div>
		</div> 
		<div class="ui feed"  style="margin-top: 5px;">
			<div class="event">
			    <div class="content">
			      	<div class="date">
			        	<p>{{ date_format($post->created_at,'h:m:s d-m-Y') }}
			        		by <a onclick="tampil();">Deki</a>
			        	</p>
			      	</div>
			    </div>
			</div>
		</div>
		<div class="ui divider"></div>
		@if($tag->id == $post->tag_id)
		<a href="/blog/tag/{{ $tag->slug }}" class="ui mini teal tag label">{{ $tag->name }}</a>
		@endif
		<div class="ui divider"></div>
			{!! $post->body !!}
	</div>
@endsection