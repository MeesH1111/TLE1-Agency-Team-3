<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\Category;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, string $category)
    {

        $categoryModel = Category::where('name', $category)->first();

        if(!$categoryModel) {
            abort(404, 'Category not found');
        }

        return view('vacancies.index', ['category' => $categoryModel->name,
            'vacancies' => $categoryModel->vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);

        $vacancy = new Vacancy();
        $vacancy->role = $request->input('role');
        $vacancy->salary = $request->input('salary');
        $vacancy->hours = $request->input('hours');
        $vacancy->location = $request->input('location');
        $vacancy->type = $request->input('type');
        $vacancy->requirements = $request->input('requirements');
        $vacancy->description = $request->input('description');
        $vacancy->save();

        return redirect()->route('vacancies.create');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $vacancy = Vacancy::findOrFail($id);

        return view('vacancies.show', compact('vacancy') );
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
