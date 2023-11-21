<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete Listing

// All Listings
Route::get('/', [ListingController::class, 'index']);


// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);



// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);




Route::get('/durgesh', function () {
    return view('durgesh');
});

// Route::get('/hello',function() {
//     return response('<h1>Hello Worlds</h1>',200)
//        ->header('Content-type','text/plain')
//        ->header('custom','header');
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
