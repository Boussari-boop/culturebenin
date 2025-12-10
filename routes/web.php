<?php
use App\Http\Controllers\languesController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TypeContenuController;
use App\Http\Controllers\TypeMediaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContenusController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ParlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/TableaudeBord', function() {
    return view('Tableau de bord.index');
})->name('dashboard');

Route::get('/pay', [PaymentController::class,'pay']);
Route::get('/payment/callback', [PaymentController::class,'callback']);

Route::resource('langues' , languesController::class);
Route::resource('utilisateurs' ,UtilisateursController::class);
Route::resource('regions' ,RegionsController::class);
Route::resource('roles' ,RolesController::class);
Route::resource('type-contenus', TypeContenuController::class);
Route::resource('type-medias', TypeMediaController::class);
Route::resource('contenus' ,ContenusController::class);
Route::resource('commentaires', CommentairesController::class);
Route::resource('parlers', ParlersController::class);

require __DIR__.'/auth.php';


