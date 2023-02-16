<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ListingController extends Controller
{


    public function index() {
        return Listing::all();
    }

    public function create(Request $request) {
        $request->validate([
            "name" => 'required',
            "slug" => 'required',
            "category_id" => 'required',
            "currency" => 'required',
            "email" => 'required',
            // "description" => 'required',
            "price" => 'required',
        ]);
        return Listing::create($request->all());
    }

    public function show($id){
        return Listing::find($id);
    }

    public function search($name){
        return Listing::find($id);
    }

}
