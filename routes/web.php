<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies/{sabji}', function ($sabji) {
   
    return $sabji;
})->whereIn('sabji', ['baigan', 'bhindi', 'aaloo', 'gobhi']);

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/hello', function () {
    return view('veggies');
});

// On route '/veggies 'a chart should be seen , with name and price of veggies
Route::get('/veggies', function () {
    return view('table');
});


Route::get('/songs_static', function () {
    return view('songs_static');
});
//Route::get('/songs_static', function () {
  //  $song = new Song("one","two","three",4);
    //$song->setTitle("With You");
    //$song->setArtist("AP Dillon");
    //return view('songs',['songs' => $song]);
//});

Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});

?>
