<?php

use App\Models\City;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

//Elenco tutte le categorie esistenti ANIME
Route::get('/', function () {
    dd(City::all());
    $anime = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
    // foreach ($anime as $single) {
    //     Genre::create(['title' => $single['title']]);
    // }
    //$anime = ['Titolo 1', 'titolo 2', 'titolo 3']; //Inserire tanti generi anime
    return view('welcome', compact('anime'));
});

Route::get('/dettaglio/anime/{mal_id}', function ($mal_id) {


    $list = Http::get('https://api.jikan.moe/v4/anime?genres=' . $mal_id)->json();

    return view('detail', compact('list'));
})->name('show');


Route::get('/importa-comuni', function () {

    $comuni = Http::get('https://axqvoqvbfjpaamphztgd.functions.supabase.co/comuni')->json();
    foreach ($comuni as $comune) {
        City::create([
            'name' => $comune['nome'],
            'cap' => $comune['cap']
        ]);
    }
});
