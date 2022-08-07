<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
// All Listings
Route::get('/', [ListingController::class, 'index']);


//Single Listing
// Route::get('/listings/{id}', function($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

// this way, you don't need to handle 404
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


// Route::get('/hello', function (){
//     return response('<h1>hello world</h1>', 200)
//     ->header("Content-type", 'text/plain')
//     ->header('foo', 'bar');
// });
// Route::get('/posts/{id}', function($id){
//     return response(('Post ' . $id));
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
// return ($request->name . ' ' . $request->city);
// });