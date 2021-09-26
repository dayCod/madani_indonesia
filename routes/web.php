<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Admin
Route::get('admin.login_admin','AdminController@login_page');
Route::get('admin.register_admin','AdminController@register_admin');
Route::get('admin.index_tambah','AdminController@list');
Route::post('login_action','AdminController@login_action')->name('login_action');
Route::post('register_action','AdminController@register_action')->name('register_action');
Route::get('logout','AdminController@logout')->name('logout');
Route::get('admin.dashboard','AdminController@dashboard');
Route::resource('admin_new','addcontentController');
Route::get('admin.list_sub','AdminController@list_sub');
Route::get('admin.list_gambar','AdminController@list_gambar');
Route::post('gambar_action','AdminController@gambar_action')->name('gambar_action');
Route::get('/list/hapus/{id}','AdminController@hapus');
Route::get('admin.saran','AdminController@saran');
Route::get('galeri','userController@galeri');
Route::get('galeri_politic','userController@galeri_politic');
Route::get('galeri_social','userController@galeri_social');
Route::get('galeri_public','userController@galeri_public');
Route::get('sendmail','addcontentController@mail');
// End Of Admin
// User Routes
Route::get('index','userController@index');

Route::get('/article', function () {
    return view('article');
});


Route::get('social','userController@social');
Route::get('detail/{id}','userController@detail');
Route::get('detail_riset/{id}','userController@detail_riset');
Route::get('detail_politic/{id}','userController@detail_politic');
Route::get('riset','userController@riset');
Route::get('politic','userController@politik');

Route::get('humanity','userController@humanity');
Route::get('public-space','userController@public_space');

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/about-madani-indonesia', function () {
    return view('about-madani-indonesia');
});

Route::get('/our-team', function () {
    return view('our-team');
});

Route::get('contact','userController@saran');
Route::post('add_content','userController@add_content')->name('add_content');
Route::post('subs_action','userController@subs_action')->name('subs_action');

Route::get('/about', function () {
    return view('about');
});
// End Of User Routes











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
