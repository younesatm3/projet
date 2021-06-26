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

use App\Http\Controllers\firstcontroleur;
//use Illuminate\Routing\Route;
use App\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
 
Route::get('/', function () {
    return view('welcome');
});

Route :: get('contact' , 'firstcontroleur@affichers');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client',function ()
{
    $idu = Auth::user()->id;
    $stations = (DB::select("select * from stations where id= \"$idu\" "));
    return view('client',compact('stations'));
});

/*Route::get('/contact/station/{id_s}',function ($id_s)
{
  
    $cartes= (DB::select("select * from cartes where id_s= \"$id_s\" "));

    //dd($cartes);
    return view('stations',compact('cartes'));
});*/


Route::get('/new', function ($id_s) 
{
    $cartes= (DB::select("select * from cartes where id_s= \"$id_s\" "));

    //dd($cartes);
    return view('new',compact('cartes'));
});