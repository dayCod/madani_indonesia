<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AdminModel;
use Hash;
use Session;
use App\SubsAction;
use App\ContentModel;
use DB;
use App\GambarModel;
use App\Charts\Count;

class AdminController extends Controller
{
    public function login_page()
    {
    	return view('admin.login_admin');
    }
    public function register_admin()
    {
    	return view('admin.register_admin');
    }
    public function register_action(Request $request)
    {
    	$reg = AdminModel::create([
    		'nama'=>$request->nama,
    		'username'=>$request->username,
    		'password'=>Hash::make($request->password)
    	]);
    	if ($reg){
    		return redirect('admin.login_admin');
    	}
    	else{
    		return back();
    	}
    }
    public function login_action(Request $request)
    {
    	$login = Auth('login_admin')->attempt([
    		'username'=> $request->username,
    		'password'=> $request->password
    	]);
    	if ($login) {
    		return redirect('admin.dashboard')->withMessage('success','Anda berhasil login');
    	}else
    	{
    		return back();
    	}
    }
    public function dashboard()
    {
    	return view('admin.dashboard');
    }
    public function list()
    {
        return view('admin.index_tambah');
    }
    public function saran()
    {
        $tampil = DB::table('tb_saran')->get();
        // dd($tampil);
        return view('admin.saran',['tampil'=>$tampil]);
    }
    public function list_sub()
    {
        $show = DB::table('tb_pelanggan')->get();
        $dataDate = SubsAction::select('created_at', DB::raw('MONTH(created_at) month'))
    ->groupBy('month')
    ->get();
    
    $date = collect([]); 
    $today = collect([]); 
    foreach ($dataDate as $val) {
        $today->push(SubsAction::whereMonth('created_at', $val['month'])->count());
        $date->push(date('M-Y', strtotime($val['created_at'])));
    }
        // CONF
        // buat chart di App\Charts\MonthlyVisiotr MonthlyVisitor
        $chart = new Count;
        $chart->title('Monthly Visitor');
        $chart->labels($date);
        $chart->dataset('Monthly Visitor' ,'line' ,$today);
        return view('admin.list_sub',['show'=>$show,'chart'=>$chart]);
    }
    public function list_gambar()
    {
        $view = DB::table('tb_gambar')->get();
        // dd($view);
        return view('admin.list_gambar',['view'=>$view]);
    }
    public function gambar_action(Request $request)
    {
        $tambah = new GambarModel();
        $tambah->kategori = $request['kategori'];
        $file = $request->file('gambar');
        $filename = $file->getClientOriginalName();
        $request->file('gambar')->move("gallery/",$filename);
        $tambah->gambar = $filename;
        $tambah->save();
        return redirect()->back();
    }
    public function hapus($id)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('tb_gambar')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect()->back();
}
    public function logout()
    {
        session::flush();
        return redirect('admin.login_admin');
    }
}
