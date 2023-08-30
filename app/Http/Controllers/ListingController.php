<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index(Request $request): View{

        /** @var Listing[] $listing */
        $listings = DB::select('select * from listings');
        $name = $request->input('name');
        // ddd($request);
        // Verify the request
        if($request){

        }

        return view('listings.index', [
            'listings' => $listings
        ]);

/*         return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['tag', 'search']))->simplePaginate(6)
        ]); */
    }

    // Show single Listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create form
    public function create(){
        return view('listings.create');
    }

    // Store Listing data
    public function store(Request $request): RedirectResponse{
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos',
             'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
    
    // Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing Data
    public function update(Request $request, Listing $listing): RedirectResponse{

        // Make the logged is the owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorised Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos',
             'public');
        }


        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }
    
    // Delete Listing
    public function destroy(Listing $listing){

        // Make the logged is the owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorised Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
