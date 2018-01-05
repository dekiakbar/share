<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\posts;
use App\kategoris;
use App\tag;

use Chencha\Share\ShareFacade as Share;

class Blog extends Controller
{
    public function index(){
    	$baru	 	= posts::orderBy('created_at', 'asc')->first();
    	$tags 		= tag::all();
    	$posts 		= posts::all();
    	$kategoris 	= kategoris::all();

    	$bagikan 	= Share::load('http://www.example.com', 'tentang link')->services('facebook','twitter','gplus','linkedin');
    	$bagikan	= (object) $bagikan;
    		
    	return view('blog.index',compact('posts','kategoris','baru','tags','bagikan'));
    }
}
