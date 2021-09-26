<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SaranAction;
use App\SubsAction;
use App\ContentModel;

class userController extends Controller
{
    public function index()
    {
        $value = ContentModel::select('judul','kategori','isi','gambar','created_at')
        ->orderBy('created_at','desc')->paginate(5);
        // dd($value);
        return view('index',['value'=>$value]);
    }
	public function saran()
	{
		return view('contact');
	}
    public function add_content(Request $request)
    {
    	SaranAction::create([
    		'nama'=>$request->nama,
    		'email'=>$request->email,
    		'saran'=>$request->saran
    	]);
    	return back();
    }
    public function detail($id)
    {
         $show = DB::table('tb_content')->where('id',$id)->get();
    	return view('detail',['show'=>$show]);
    }
    public function detail_riset($id)
    {
        $data = DB::table('tb_content')->get();
        $collect = collect($data);
        $post = $collect->where('kategori','=','riset');
        //
        $show = DB::table('tb_content')->where('id',$id)->get();
    	return view('detail_riset',['show'=>$show, 'post'=>$post, 'id'=>$id]);
    }
    public function detail_politic($id)
    {
        $show = DB::table('tb_content')->where('id',$id)->get();
        // dd($show);
    	return view('detail_politic',['show'=>$show]);
    }
    public function subs_action(Request $request)
    {
        $sub = SubsAction::create([
            'email'=>$request->email
        ]);
        return back();
    }
    public function galeri()
    {
        $gambar = DB::table('tb_gambar')->get();
        // dd($data);
        return view('galeri',['gambar'=>$gambar]);
    }
    public function galeri_politic()
    {
        $gambar = DB::table('tb_gambar')->get();
        $collect = collect($gambar);
        $post = $collect->where('kategori','=','Politic');
        // dd($data);
        return view('galeri_politic',['post'=>$post]);
    }
     public function galeri_social()
    {
        $gambar = DB::table('tb_gambar')->get();
        $collect = collect($gambar);
        $post = $collect->where('kategori','=','Social');
        // dd($post);
        return view('galeri_social',['post'=>$post]);
    }
     public function galeri_public()
    {
       $gambar = DB::table('tb_gambar')->get();
       $collect = collect($gambar);
        $post = $collect->where('kategori','=','Public Dialog');
        // dd($data);
        return view('galeri_public',['post'=>$post]);
    }
    public function social()
    {
        $data = DB::table('tb_content')->get();
        $collection = collect($data);
        $group = $collection->where('kategori','=','sosial');
        // dd($group);
        return view('social',['group'=>$group]);
    }
    public function riset()
    {
        $data = DB::table('tb_content')->get();
        $collection = collect($data);
        $show = $collection->where('kategori','=','riset');
        // dd($show);
        return view('riset',['show'=>$show]);
    }
    public function politik()
    {
        $data = DB::table('tb_content')->get();
        $collection = collect($data);
        $report = $collection->where('kategori','=','politik');
        return view('politic',['report'=>$report]);
    }
    public function humanity()
    {
        $data = DB::table('tb_content')->get();
        $collection = collect($data);
        $show = $collection->where('kategori','=','humanity');
        // dd($data);
        return view('humanity',['show'=>$show]);
    }
    public function public_space()
    {
        $data = DB::table('tb_content')->get();
        $collection = collect($data);
        $show = $collection->where('kategori','=','public space');
        // dd($show);
        return view('public-space',['show'=>$show]);
    }
}
