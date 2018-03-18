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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// upload image
Route::post('media/upload', 'GalleryController@upload');
Route::post('media/upload_multiple', 'GalleryController@uploadMultiple');
Route::get('media/remove/{filename}', 'GalleryController@remove');

// Identitas
Route::group(['prefix'=>'identitas', 'middleware'=>['auth','role:admin|member']], function(){
	// Sekolah
	Route::resource('sekolah', 'SekolahController');
	// Guru Pengajar
	Route::resource('gurupengajar', 'GuruPengajarController');
	// Guru Inti
	Route::resource('guruinti', 'GuruIntiController');
});

// Penilaian
Route::group(['prefix'=>'penilaian', 'middleware'=>['auth','role:admin|member']], function(){
	// Penilaian Guru
	Route::resource('penilaianguru', 'PenilaianGuruController');
	// Perangkat Pembelajaran
	Route::resource('perangkatpembelajaran', 'PerangkatPembelajaranController');
	// Kedisiplinan
	Route::resource('kedisiplinan', 'KedisiplinanController');
	// Pelayanan Prima
	Route::resource('pelayananprima', 'PelayananPrimaController');
	// Ketuntasan Nilai
	Route::resource('ketuntasannilai', 'KetuntasanNilaiController');
});


// Laporan
Route::group(['prefix'=>'laporan', 'middleware'=>['auth','role:admin|member']], function(){
	// Rapot Akhir Guru
	Route::resource('rapotakhir', 'RapotAkhirController');
	// Download Excel
	Route::get('/rapot/downloadExcel/{type}', 'RapotAkhirController@downloadExcel');

	Route::post('/rapot/download', 'RapotAkhirController@pdfview');


});

// Sistem
Route::group(['prefix'=>'sistem', 'middleware'=>['auth','role:admin']], function(){
	// User
	Route::resource('user', 'UserController');
	// Role
	Route::resource('role', 'RoleController');
});

Route::get('/downloadPDF/{id}','RapotAkhirController@downloadPDF');


// Testing
Route::group(['middleware'=>'cors'],function(){
	Route::get('/contoh', 'TestingController@api');
});

Route::group(['middleware'=>'cors'],function(){
	Route::get('/api', 'ApiController@listdata');
});