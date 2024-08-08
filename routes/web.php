<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pages\RouteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Gestion\ArticleController;
use App\Http\Controllers\Gestion\CompanyController;

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


Route::get("/",[RouteController::class,'index'])->name("home");
Route::get("/tologin",[LoginController::class,'index'])->name("tologin");
Route::get("/toregister",[RegisterController::class,'index'])->name("toregister");
Route::get("/addimage",[RegisterController::class,'addimage'])->name("addimage");
Route::get("/forgot-password",[LoginController::class,'forgot'])->name("forgotpassword");

Route::post("/traitement/register",[RegisterController::class,'traitement'])->name("traitement");
Route::post("/verification/login",[LoginController::class,'login'])->name("verification");
Route::post("/add/photo/{id}",[RegisterController::class,'addtraiter'])->name("addphoto");

Route::get("/descript",[RouteController::class,'descript'])->name("descript");
Route::get("/up/commpany/{id}",[RegisterController::class,'tocreatecompany'])->name("tocreatecompany");
Route::post("/update/comp/{id}",[RegisterController::class,'createcompany'])->name("create");
Route::post("/create",[RegisterController::class,'creation'])->name("creation");


Route::get("/dash/company",[CompanyController::class,'index'])->name("dashcompany");
Route::get("/addsupplem/{id}",[ArticleController::class,'suppadd'])->name("addsupp");
Route::post("/addother",[ArticleController::class,'sko'])->name("articles.storeDetails");

Route::get("/tocreate",[ArticleController::class,'tocreate'])->name("tocreate");
Route::get("/toupdate/article/{id}",[ArticleController::class,'editarticle'])->name("toupdatearticle");
Route::post("/create/article",[ArticleController::class,'createphase1'])->name("phase1");
Route::post("/update/article/{id}",[ArticleController::class,'updatearticle'])->name("phase3");

Route::post('/article/voyage', [ArticleController::class, 'storeVoyage'])->name('addvoyage');
Route::get('/article/voyage/delete/{id}', [ArticleController::class, 'deleteVoyage'])->name('deletevoyage');
Route::post('/article/location', [ArticleController::class, 'storeLocation'])->name('addlocation');
Route::get('/article/location/delete/{id}', [ArticleController::class, 'deletelocation'])->name('deletelocation');
Route::post('/article/contact', [ArticleController::class, 'storecontact'])->name('addcontact');
Route::get('/article/contact/delete/{id}', [ArticleController::class, 'deletecontact'])->name('deletecontact');

Route::post('/article/colis', [ArticleController::class, 'storecolis'])->name('addcolis');
Route::get('/article/colis/delete/{id}', [ArticleController::class, 'deletecolis'])->name('deletecolis');


Route::get('/article/number/delete/{id}', [ArticleController::class, 'deletenumber'])->name('deletenumber');
Route::post('/article/number', [ArticleController::class, 'storeNumber'])->name('addnumero');
Route::post('/article/autre', [ArticleController::class, 'storeAutreType'])->name('phase1.autre');
