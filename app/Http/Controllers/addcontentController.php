<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentModel;
use DB;
use App\SubsAction;
use Mail;
class addcontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $val = DB::table('tb_pelanggan')->select('email')->get();
        // dd($val);
        
        return view('admin.list_content',['data'=>ContentModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $tambah = new ContentModel();
        $tambah->judul = $request['judul'];
        $tambah->kategori = $request['kategori'];
        $tambah->isi = $request['isi'];

        // Buat Gambar
        $file = $request->file('gambar');
        $filename = $file->getClientOriginalName();
        $request->file('gambar')->move("foto_content/",$filename);

        $tambah->gambar = $filename;
        $tambah->visit_count = $request['visit_count'];
        $tambah->save();
        return redirect()->route('admin_new.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContentModel $contentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contentModel)
    {
        return view('admin.edit',[
            'edit'=>ContentModel::where(['id'=>$contentModel])->first(),
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idate(format)
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contentModel)
    {
        ContentModel::find($contentModel)->update($request->except('_method','_token'));
        return redirect()->route('admin_new.index')->withMessage('Data Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contentModel)
    {
        DB::table('tb_content')->where('id',$contentModel)->delete();
        return redirect()->route('admin_new.index');

    }
}
