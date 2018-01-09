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
    	$baru	 	= posts::orderBy('created_at', 'desc')->first();
    	$tags 		= tag::all();
    	$kategoris 	= kategoris::all();
    	$posts 		= posts::orderBy('created_at', 'desc')->paginate(3);
        $semua      = posts::all();
    	
    	$bagikan 	= Share::load('http://www.example.com', 'tentang link')
                            ->services('facebook','twitter','gplus','linkedin','telegram');
    	$bagikan	= (object) $bagikan;

    	return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','semua'))
                    ->with('no',($request->input('page',1)-1)*3);
    }

    public function kategori(Request $request,$kategori){
        if ( !empty($kategori)) {
        
    	    $kategori 	= kategoris::where('slug','=',$kategori)->firstOrFail();
    		$posts 		= posts::where('category_id','=',$kategori->id)->paginate(3);
            $baru       = posts::orderBy('created_at', 'desc')->firstOrFail();
    		$tags 		= tag::all();
    		$kategoris 	= kategoris::all();
            $semua      = posts::all();
    		
    		$bagikan 	= Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
    		$bagikan	= (object) $bagikan;
	
    		return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','semua'))
    					->with('no',($request->input('page',1)-1)*3);

    		return redirect('blog');
        }else{
            return abort(404);
        }
    }    

    public function detail($slug){
    	if (!empty($slug)) {
            $post       = posts::where('slug','=',$slug)->firstOrFail();
            $baru       = posts::orderBy('created_at', 'asc')->firstOrFail();
            $tags       = tag::all();
            
            $semua      = posts::all();
            $kategoris  = kategoris::all();
            $kategori   = kategoris::where('id',$post->category_id)->firstOrFail();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;
    
            return view('blog.detail',compact('post','kategoris','baru','tags','bagikan','kategori','semua'));
        }else{
            return abort(404);
        }
    }

    public function tag(Request $request,$tag){
        if (!empty($tag)) {
            $tag        = tag::where('slug',$tag)->firstOrFail();
            $posts      = posts::where('tag_id',$tag->id)->paginate(3);

            $semua      = posts::all();
            $baru       = posts::orderBy('created_at', 'desc')->firstOrFail();
            $tags       = tag::all();
            $kategoris  = kategoris::all();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;
    
            return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','semua'))
                        ->with('no',($request->input('page',1)-1)*3);
        }else{
            return abort(404);
        }
    }

    public function cari(Request $request,$cari){
        if (!empty($cari)) {
            $posts = posts::whereHas('kategori', function($query) use($cari) {
                            $query->where('name', 'like', '%'.$cari.'%');
                        })->orWhereHas('tag', function($query) use($cari) {
                            $query->where('name', 'like', '%'.$cari.'%');
                        })
            ->orWhere("title", "LIKE","%$cari%")->paginate(3);
            
            $baru       = posts::orderBy('created_at', 'desc')->first();
            $tags       = tag::all();
            $kategoris  = kategoris::all();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;

            return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','semua'))
                        ->with('no',($request->input('page',1)-1)*3);
        }
    }
}
