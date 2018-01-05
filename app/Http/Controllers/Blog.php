<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\posts;
use App\kategoris;
use App\tag;

class Blog extends Controller
{
    public function index(){
    	$baru	 	= posts::orderBy('created_at', 'asc')->first();
    	$tags 		= tag::all();
    	$posts 		= posts::all();
    	$kategoris 	= kategoris::all();
    	return view('blog.index',compact('posts','kategoris','baru','tags'));
    }
}
