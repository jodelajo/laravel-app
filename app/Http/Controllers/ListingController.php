<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index() {
        // dd(request()->tag); = dd(request('tag'));
        return view('listings.index', [
            // 'listings' => Listing::all()
            // same as 'all', but now sorted 
            // 'listings' => Listing::latest()->get()
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }
    //Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
