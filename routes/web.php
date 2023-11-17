<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),

    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello',function() {
//     return response('<h1>Hello Worlds</h1>',200)
//        ->header('Content-type','text/plain')
//        ->header('custom','header');
// });

// Route::get('/durgesh',function() {
//     return view('durgesh');
// });

// Route::get('/posts/{id}',function($id) {
//     // ddd($id);
//     return response('Post ' . $id);
// })->where('id','[0-9]+');

// // Route::get('/search?name={name}&city={city}',function($name,$city) {
// //     return response('Name is ' . $name .' and City is ' . $city);
// // });

// Route::get('/search',function(Request $request) {
//     // dd($request->name . ' - ' . $request->city);
//     return response('Your Name is '.$request->name . ' and you live in ' . $request->city);
// });
