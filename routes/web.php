<?php
use App\Http\Controllers\home;
use App\Http\Controllers\new_pengaduan;
use App\Http\Controllers\home_pengaduan;
use App\Http\Controllers\admin;
use App\Http\Controllers\post;
use App\Http\Controllers\posts;
use App\Http\Controllers\pengaduan;
use App\Http\Controllers\register;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', [home::class, 'home',]);
Route::get('/new_pengaduan', [new_pengaduan::class, 'newpengaduan',]);
Route::get('/pengaduan',[home_pengaduan::class,'pengaduan']);
Route::get('/post',[post::class,'post']);

Route::post('/login',[login::class,'authenticate' ])->name('login')->middleware('guest');
Route::get('/login', [login::class,'login']);
Route::get('/logout', [login::class,'logout'])->name('logout');


Route::get('/register', [register::class, 'register',]);
Route::POST('/register', [register::class,'store']);

Route::get('/dashboard', [dashboard::class,'dashboard']);

Route::get('/dashboard/pengaduan', [pengaduan::class, 'index',]);

Route::get('/dashboard/admin', [admin::class, 'admin',])->middleware('guest');
Route::get('/dashboard/pengaduan/create', [posts::class, 'index',]);
Route::POST('/dashboard/pengaduan/create', [posts::class, 'store',]);

Route::group(['prefix' => 'comment', 'as' => 'comment'], function() {
   
});


