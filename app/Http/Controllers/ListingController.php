<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        // return Listing::latest()->filter(request(['category_id', 'search']))->paginate(6);
    }
}
