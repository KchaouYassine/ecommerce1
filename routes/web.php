<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    $data=[];
    $data['id']=5;
    $data['name']='yassine kchaou';
    return view('welcome',$data);
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/viex','SecondController@getIndex');
Route::get('/test', function () {
    return 'test';
});
//Route::get('second','SecondController@showString');
//Route::get('first','Front\FirstController@showString');
// 2émé method avec group
Route::group(['namespace'=>'Front'],function(){
    Route::get('first','FirstController@showString')->middleware('auth');
    Route::get('first1','FirstController@showString1'); // houni 7ata kén matiktibch ->middleware('auth') 3adi 5ater fil controller 3amil middelware a3lihom il kol
    Route::get('first4','FirstController@showString4');// houni il output string 5ater 3amil exept
});
Route::get('login',function(){
    return'Must be login to access this Route';
})->name('login');

// to use ressource tit7a9ha ili ki tist7a9 il medhod mté3ha il kol sinon ta3mil 3adi bil get
Route::resource('news','NewController');
//php artisan make:controller NewController --resource

Auth::routes(['verify'=>true]);// béch ba3d il login it9olo rak lézmik ta3mil il email reply

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified'); // til9ahom fil kerner.php
 // donc béch ta3mil il login lézmik tkoun auth w lézmik tkoun zéda verfied(ma3néha itib3ath il replymail)

