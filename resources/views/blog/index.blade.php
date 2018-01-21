@extends('blog.master')
@section('judul',' | '.setting('site.title'))	
@section('sayhi')
	<div class="ui container">
		<h2 class="ui header center aligned">
		  <div class="content">
		    {!! setting('blog.hi') !!}
		    <div class="sub header">{!! setting('blog.hi_desc') !!}</div>
		  </div>
		</h2>
	</div>
@endsection

@section('isi')
	@foreach($posts as $post)
	    <div class="ui piled raised segment">
		    @foreach($kategoris as $kategori)
		    	@if($post->category_id == $kategori->id)
		    		<a href="/kategori/{{ $kategori->slug }}" class="ui blue right ribbon label">{{ $kategori->name }}</a>
		    	@endif
		    @endforeach
		    <span>
		    	<h3 class="ui header">
				    <a href="/{{ $post->slug }}">{{ $post->title }}</a>
				    <span class="sub header">{{ date_format($post->created_at,'h:m:s d-m-Y') }} by <a onclick="tampil();">Deki</a></span>
				</h3>
			</span>
			<div class="ui divider"></div>
			<div style="white-space: wrap;text-overflow: ellipsis; overflow: hidden;">
				{!! $post->excerpt !!}
			</div>
			<div class="ui divider"></div>
			@foreach($tags as $tag)
				@if($tag->id == $post->tag_id)
					<a href="/tag/{{ $tag->slug }}" class="ui mini teal tag label">{{ $tag->name }}</a>
				@endif
			@endforeach
		</div>
	@endforeach
	<div class="ui container center aligned">
		{{ $posts->appends(\Request::except('page'))->links('blog.paginate') }}
	</div> 
@endsection	
