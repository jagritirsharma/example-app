<?php

use Illuminate\Support\Facades\Route;
use Practicals\Song;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies', function () {
	return view('veggies');
});

Route::get('/veggies/{veggieName}',function (string $veggieName) {
	return $veggieName;
})->whereIn('veggieName', ['baigan','bhindi', 'aaloo', 'gobhi']);

Route::get('/song', function () {
  
   $song1 = new Song("Stan", "Enimen", "pop", 74);
  $song1->setTitle("Stan");
  $song1->setArtist("Eminem");

  $song2 = new Song("Nothing", "Metallica", "music", "72");
  $song2->setTitle("Nothing Else Matters");
  $song2->setArtist("Metallica");

  $song3 = new Song("With you", "Hindi", "Pop", "71");
  $song3->setTitle("With You");
  $song3->setArtist("A P Dhillon");

  return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]);  
});
