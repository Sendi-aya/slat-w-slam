<?php

use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\ServicesController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view ('navbar');
});
Route::get('/dashbord',function(){
    return view ('dashbord');
});
// Route::get('/salles', function () {
//     return view('reservation');
// });


Route::get('/salles',[SallesController::class , 'index']);
Route::get('/rendez-vous',[RendezVousController::class ,'rendezVousPage'])->name('rendezv');
// Route::get('/services/salles', [ServicesController::class ,'index'])->name('services.salles');
// Route::get('/services/music', [ServicesController::class, 'index'])->name('services.music');


Route::get('/product_detail/{id}', [ServicesController::class, 'product_detail'])->name('salles_detail');
Route::get('/music_detail/{id}', [ServicesController::class, 'music_detail'])->name('music_detail');
Route::get('/traiteur_detail/{id}', [ServicesController::class, 'traiteur_detail'])->name('traiteur_detail');

Route::get('/services/salles', [ServicesController::class, 'getSalles']);
Route::get('/services/music', [ServicesController::class, 'getMusic']);
Route::get('/services/traiteur', [ServicesController::class, 'getTraiteur']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/calendar', [Reservation::class, 'calendar']);
Route::post('/reservations', [Reservation::class, 'store']);
// Route::get('/get-music-details/{id}', [ServicesController::class, 'getMusicDetails'])->name('get_music_details');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store_reservation');



