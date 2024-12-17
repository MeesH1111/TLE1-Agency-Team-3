<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Vacancy;
use App\Models\Category;
use App\Models\WaitList;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, string $category)
    {

        $categoryModel = Category::find($category);
        $vacancies = Vacancy::where('category_id', $category)->withCount('waitLists')->get();
        $waitlist = WaitList::where('vacancy_id')->count();
        if (!$categoryModel) {
            abort(404, 'Category not found');
        }

        return view('vacancies.index', compact('category', 'categoryModel', 'vacancies', 'waitlist'));
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
        $waitlist = WaitList::where('vacancy_id', $category)->count();

        return view('vacancies.index', compact('vacancies', 'category', 'waitlist'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($companyId)
    {
        $categories = Category::all();
        $company = $companyId;

        return view('vacancies.create', compact('categories', 'company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'hours' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'requirements' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'company_id' => 'required|exists:companies,id',
        ], [
            'role.required' => 'Vul de baan titel in.',
            'salary.required' => 'Vul de salaris in',
            'hours.required' => 'vul het aantal uren in.',
            'location.required' => 'Vul het adres in.',
            'type.required' => 'Kies het baan type.',
            'requirements.required' => 'Vul de benodigdheden in. Als er geen zijn, vul dan "niks" in.',
            'description.required' => 'Vul de beschrijving van de baan in.',
            'category_id.required' => 'Kies het bijbehorende categorie.',
        ]);

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

        return redirect()->route('bedrijven.next', ['company' => $vacancy->company_id, 'offset' => 0])->with('success', 'Vacancy created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $company = null)
    {
        $companyId = $company;
        $vacancy = Vacancy::findOrFail($id);
        $category = Category::find($vacancy->category_id);
        $bedrijf = Company::find($companyId);
        $waitingCount = WaitList::where('vacancy_id', $id)->count();

        return view('vacancies.show', compact('vacancy', 'category', 'waitingCount', 'companyId', 'bedrijf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $categories = Category::all();
        $companies = Company::all();

        return view('vacancies.edit', compact('vacancy', 'categories', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vacancy = Vacancy::findOrfail($id);
        $request->validate([
            'role' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'hours' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'requirements' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'company_id' => 'required|exists:companies,id',
        ], [
            'role.required' => 'Vul de baan titel in.',
            'salary.required' => 'Vul de salaris in',
            'hours.required' => 'vul het aantal uren in.',
            'location.required' => 'Vul het adres in.',
            'type.required' => 'Kies het baan type.',
            'requirements.required' => 'Vul de benodigdheden in. Als er geen zijn, vul dan "niks" in.',
            'description.required' => 'Vul de beschrijving van de baan in.',
            'category_id.required' => 'Kies het bijbehorende categorie.',
        ]);
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
