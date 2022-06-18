<?php
namespace App\Http\Controllers;
// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



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

// Route::get('/', function () {
//     return view('welcome');
// });
//----Les gets-----------
Route::get('/', [AuthController::class,'index'])->name('index');
//----AFFICHE PAGE DE CONNECTION-----------

Route::get('login', [AuthController::class,'login'])->name('login');
//----AFFICHE PAGE D'INSCRIPTION-----------
Route::get('register', [AuthController::class,'register'])->name('register');
//----AFFICHE TOUTE LES ANNONCES-----------
Route::get('annonce/list', [AnnonceController::class,'list'])->name('annoncelist');

Route::get('userinfo', [AuthController::class,'userinfo'])->name('userinfo');


Route::get('user/list', [AuthController::class,'list'])->name('userlist');
Route::get('refil', [AuthController::class,'Refil']);
Route::get('annonce/create', [AnnonceController::class,'Create'])->name('creer');
Route::get('emprunt/list', [EmpruntController::class,'list'])->name('empruntlist');
Route::get('pret/list', [PretController::class,'list'])->name('pretlist');


//----Les posts-----------
Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::post('refil.save', [AuthController::class,'Refilsave'])->name('save.refil');
Route::post('create.save', [AnnonceController::class,'store'])->name('save.create');
Route::post('login.save', [AuthController::class,'LoginSave'])->name('save.login');
Route::post('register.save', [AuthController::class,'Registersave'])->name('save.register');
