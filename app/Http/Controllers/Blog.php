<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\posts;
use App\kategoris;
use App\tag;

use Chencha\Share\ShareFacade as Share;

class Blog extends Controller
{
    public function index(Request $request){
    	$baru	 	= posts::latest()->take(3)->get();
    	$tags 		= tag::all();
    	$kategoris 	= kategoris::all();
    	$posts 		= posts::orderBy('created_at', 'desc')->paginate(3);

        $arsip      = posts::orderBy('tahun','desc')
                      ->select(DB::raw('YEAR(posts.created_at) tahun'))
                      ->groupBy('tahun')->get();
        
        $arsipBulan = posts::orderBy('tahun','desc')
                      ->select(DB::raw('MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                      ->groupBy('bulan','tahun')->get();

        $arsipJudul = posts::orderBy('tahun','desc')
                      ->select(DB::raw('title,slug,MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                      ->groupBy('bulan','tahun','title','slug')->get();

    	$bagikan 	= Share::load('http://www.example.com', 'tentang link')
                      ->services('facebook','twitter','gplus','linkedin','telegram');
    	$bagikan	= (object) $bagikan;

    	return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','arsip','arsipBulan','arsipJudul'))
                    ->with('no',($request->input('page',1)-1)*3);
    }

    public function kategori(Request $request,$kategori){
        if ( !empty($kategori)) {
        
    	    $kategori 	= kategoris::where('slug','=',$kategori)->firstOrFail();
    		$posts 		= posts::where('category_id','=',$kategori->id)->paginate(3);
            $baru       = posts::latest()->take(3)->get();
    		$tags 		= tag::all();
    		$kategoris 	= kategoris::all();
            
            $arsip      = posts::orderBy('tahun','desc')
                      ->select(DB::raw('YEAR(posts.created_at) tahun'))
                      ->groupBy('tahun')->get();
        
            $arsipBulan = posts::orderBy('tahun','desc')
                          ->select(DB::raw('MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun')->get();

            $arsipJudul = posts::orderBy('tahun','desc')
                          ->select(DB::raw('title,slug,MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun','title','slug')->get();
        		
    		$bagikan 	= Share::load('http://www.example.com', 'tentang link')
                          ->services('facebook','twitter','gplus','linkedin','telegram');
    		$bagikan	= (object) $bagikan;
	
    		return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','arsip','arsipBulan','arsipJudul'))
    					->with('no',($request->input('page',1)-1)*3);

    		return redirect('blog');
        }else{
            return abort(404);
        }
    }    

    public function detail($slug){
    	if (!empty($slug)) {
            $post       = posts::where('slug','=',$slug)->firstOrFail();
            $baru       = posts::latest()->take(3)->get();
            $tags       = tag::all();
            
            $arsip      = posts::orderBy('tahun','desc')
                      ->select(DB::raw('YEAR(posts.created_at) tahun'))
                      ->groupBy('tahun')->get();
        
            $arsipBulan = posts::orderBy('tahun','desc')
                          ->select(DB::raw('MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun')->get();

            $arsipJudul = posts::orderBy('tahun','desc')
                          ->select(DB::raw('title,slug,MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun','title','slug')->get();

            $kategoris  = kategoris::all();
            $kategori   = kategoris::where('id',$post->category_id)->firstOrFail();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;
    
            return view('blog.detail',compact('post','kategoris','baru','tags','bagikan','kategori','arsip','arsipBulan','arsipJudul'));
        }else{
            return abort(404);
        }
    }

    public function tag(Request $request,$tag){
        if (!empty($tag)) {
            $tag        = tag::where('slug',$tag)->firstOrFail();
            $posts      = posts::where('tag_id',$tag->id)->paginate(3);
           
            $arsip      = posts::orderBy('tahun','desc')
                          ->select(DB::raw('YEAR(posts.created_at) tahun'))
                          ->groupBy('tahun')->get();
        
            $arsipBulan = posts::orderBy('tahun','desc')
                          ->select(DB::raw('MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun')->get();

            $arsipJudul = posts::orderBy('tahun','desc')
                          ->select(DB::raw('title,slug,MONTHNAME(posts.created_at) bulan,YEAR(posts.created_at) tahun'))
                          ->groupBy('bulan','tahun','title','slug')->get();

            $baru       = posts::latest()->take(3)->get();
            $tags       = tag::all();
            $kategoris  = kategoris::all();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                                ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;
    
            return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','arsip','arsipBulan','arsipJudul'))
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
            
            $baru       = posts::latest()->take(3)->get();
            $tags       = tag::all();
            $kategoris  = kategoris::all();
            $bagikan    = Share::load('http://www.example.com', 'tentang link')
                          ->services('facebook','twitter','gplus','linkedin','telegram');
            $bagikan    = (object) $bagikan;

            return view('blog.index',compact('posts','kategoris','baru','tags','bagikan','arsip'))
                        ->with('no',($request->input('page',1)-1)*3);
        }
    }
}
