<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ListingController extends Controller
{


    public function index() {
        return Listing::latest()->filter(request(['category', 'search']))->paginate(6);
    }

    public function search ($name) {
        return Listing::where('category', 'like', "%".$name."%")->get();
    }


    public function create(Request $request) {
        $formFields = $request->validate([
            "name" => 'required',
            "slug" => 'required',
            "category" => 'required',
            "currency" => 'required',
            "email" => ['required', 'email'],
            "description" => 'required',
            "price" => 'required',
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return response(["message"=>"Listing created successfully!"], 201);
    }

    public function show($id){
        return Listing::find($id);
    }

    public function update(Request $request, Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "name" => 'required',
            "slug" => 'required',
            "category" => 'required',
            "currency" => 'required',
            "email" => 'required',
            "description" => 'required',
            "price" => 'required',
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return response(['message'=> 'Listing updated successfully!'], 201);
    }

    public function destroy(Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return response(['message'=> 'Listing deleted successfully!'], 201);
    }

    // Manage Listings
    public function manage() {
        return response(['listings' => auth()->user()->listings()->get()]);
    }

}
