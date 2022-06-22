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
<<<<<<< HEAD

Route::get('login', [AuthController::class,'login'])->name('login');
=======
Route::get('login', [AuthController::class,'login'])->name('login');

>>>>>>> 09547d1a9a232210a0e3a604ddbce9e43bf009d0
//----AFFICHE PAGE D'INSCRIPTION-----------
Route::get('register', [AuthController::class,'register'])->name('register');
//----AFFICHE TOUTE LES ANNONCES-----------
Route::get('annonce/list', [AnnonceController::class,'list'])->name('annoncelist');
<<<<<<< HEAD

Route::get('userinfo', [AuthController::class,'userinfo'])->name('userinfo');


Route::get('user/list', [AuthController::class,'list'])->name('userlist');
Route::get('refil', [AuthController::class,'Refil']);
Route::get('annonce/create', [AnnonceController::class,'Create'])->name('creer');
Route::get('emprunt/list', [EmpruntController::class,'list'])->name('empruntlist');
Route::get('pret/list', [PretController::class,'list'])->name('pretlist');


//----Les posts-----------
Route::get('logout', [AuthController::class,'logout'])->name('logout');
=======
//----AFFICHE TOUTE LES INFOS SUR L USER-----------
Route::get('userinfo', [AuthController::class,'userinfo'])->name('userinfo');
Route::get('refil', [AuthController::class,'Refil']);
//----PAGE CREATION D ANNONCE-----------
Route::get('annonce/create', [AnnonceController::class,'Create'])->name('creer');
//----AFFICHE TOUTE LES INFOS SUR L EMPRUNT-----------
Route::get('emprunt/list', [EmpruntController::class,'list'])->name('empruntlist');
//----AFFICHE TOUTE LES INFOS SUR LE PRET-----------
Route::get('pret/list', [PretController::class,'list'])->name('pretlist');
//----PAGE MODIFICATION INFO USER-----------
Route::get('editinfo', [AuthController::class,'edit'])->name('editinfo');
//----PAGE MODIFICATION INFO ANNONCE-----------
Route::get('editannonce', [AnnonceController::class,'edit'])->name('editannonce');

Route::get('logout', [AuthController::class,'logout'])->name('logout');
//----PAGE D PROPOSITION-----------
Route::get('proposition/create', [PropositionController::class,'create'])->name('creerproposit');
//----AFFICHE LA LISTE DES PROPOSITIONS-----------
Route::get('proposition/list', [PropositionController::class,'create'])->name('listproposit');
//----PAGE SUPPRESSION ANNONCE-----------
Route::get('supprimerannonce', [AnnonceController::class,'show_delete'])->name('supprimerannonce');

//----Les posts-----------
>>>>>>> 09547d1a9a232210a0e3a604ddbce9e43bf009d0
Route::post('refil.save', [AuthController::class,'Refilsave'])->name('save.refil');
Route::post('create.save', [AnnonceController::class,'store'])->name('save.create');
Route::post('login.save', [AuthController::class,'LoginSave'])->name('save.login');
Route::post('register.save', [AuthController::class,'Registersave'])->name('save.register');
<<<<<<< HEAD
=======
Route::post('creerproposit.save', [PropositionController::class,'store'])->name('save.creerproposit');

//----Les patchs-----------
Route::patch('edituser.save', [AuthController::class,'update'])->name('save.edituser');
Route::patch('editannonce.save', [AnnonceController::class,'update'])->name('save.editannonce');

//----Les deletes-----------
Route::delete('sup.annonce', [AnnonceController::class,'delete'])->name('sup.annonce');
>>>>>>> 09547d1a9a232210a0e3a604ddbce9e43bf009d0
