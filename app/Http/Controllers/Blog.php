<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\posts;
use App\kategoris;
use App\tag;

use Chencha\Share\ShareFacade as Share;

class Blog extends Controller
{
    public function index(Request $request){
    	$baru	 	= posts::orderBy('created_at', 'asc')->first();
    	$tags 		= tag::all();
    	$kategoris 	= kategoris::all();
    	$posts 		= posts::paginate(3);
    	
    	$bagikan 	= Share::load('http://www.example.com', 'tentang link')->services('facebook','twitter','gplus','linkedin');
    	$bagikan	= (object) $bagikan;

    	return view('blog.index',compact('posts','kategoris','baru','tags','bagikan'))->with('no',($request->input('page',1)-1)*3);
    }

    public function detail($slug){
    	$post		= posts::where('slug','=',$slug)->first();
    	$baru	 	= posts::orderBy('created_at', 'asc')->first();
    	$tags 		= tag::all();

    	$kategoris 	= kategoris::all();
    	$bagikan 	= Share::load('http://www.example.com', 'tentang link')->services('facebook','twitter','gplus','linkedin');
    	$bagikan	= (object) $bagikan;

    	return view('blog.detail',compact('post','kategoris','baru','tags','bagikan'));
    }
}
