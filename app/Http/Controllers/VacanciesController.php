<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

        $categoryModel = Category::find($category);

        if (!$categoryModel) {
            abort(404, 'Category not found');
        }

        return view('vacancies.index', [
            'categoryModel' => $categoryModel,
            'vacancies' => $categoryModel->vacancies,
            'category' => $categoryModel->id]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $vacancies = Vacancy::where('category_id', $category)
            ->where(function ($query) use ($search) {
                $query->where('role', 'LIKE', "%{$search}%")
                    ->orwhere('location', 'LIKE', "%{$search}%")
                    ->orWhere('type', 'LIKE', "%{$search}%")
                    ->orWhere('salary', 'LIKE', "%{$search}%")
                    ->orWhere('hours', 'LIKE', "%{$search}%");
            })->get();

        return view('vacancies.index', compact('vacancies', 'category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();
        //dd($companies);

        return view('vacancies.create', compact('categories', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy;
        $vacancy->role = $request->input('role');
        $vacancy->salary = $request->input('salary');
        $vacancy->hours = $request->input('hours');
        $vacancy->location = $request->input('location');
        $vacancy->type = $request->input('type');
        $vacancy->requirements = $request->input('requirements');
        $vacancy->description = $request->input('description');
        $vacancy->category_id = $request->input('category_id');
        $vacancy->company_id = $request->company_id;
        $vacancy->save();

        return redirect()->route('vacancies.index', $vacancy->category_id)->with('success', 'Vacancy created!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.show', compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $categories = Category::all();
        $companies = Company::all();

        return view('vacancies.edit',compact('vacancy', 'categories', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vacancy = Vacancy::findOrfail($id);
//        $request->validate([
//            'role' => 'required|string|max:255',
//            'salary' => 'required|numeric|min:0',
//            'hours' => 'required|string|max:255',
//            'location' => 'required|string|max:255',
//            'type' => 'required|string|in:full-time,part-time,side-job',
//            'requirements' => 'required|string',
//            'description' => 'required|string',
//            'category_id' => 'required|exists:categories,id',
//            'company_id' => 'required|exists:companies,id',
//        ]);
        $vacancy->update($request->all());


        return redirect()->route('vacancies.index', $vacancy->category_id)->with('success', 'Vacancy updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->back()->with('success', 'Vacancy deleted!');
    }
}
