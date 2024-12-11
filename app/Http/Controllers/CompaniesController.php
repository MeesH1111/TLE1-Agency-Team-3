<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ], [
            'title.required' => 'Vul een bedrijfsnaam in',
            'location.required' => 'Vul een geldige locatie in',
            'image' => 'Upload een geldige afbeelding',
            'contact' => 'Vul een contact adress in',
        ]);;

        // Create a new Company instance
        $company = new Company;
        $company->user_id = 1;
        $company->name = $request->title;
        $company->location = $request->location;
        $company->contact = $request->contact;
        $company->description = $request->description;

        // Handle the image upload if provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('companies', 'public');
            $company->image = $path;
        }

        // Save to the database
        $company->save();

        // Redirect or return response
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $offset = 0)
    {
        $company = Company::findOrFail($id);
        $vacature = Vacancy::where('company_id', $id)
            ->skip($offset)
            ->take(1)
            ->first();

        return view('companies.show', compact('company', 'vacature', 'offset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
