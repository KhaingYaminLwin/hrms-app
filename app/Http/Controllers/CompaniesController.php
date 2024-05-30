<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use App\Models\Company;
use App\Models\Cities;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companies = Company::all();
        return view ('companies.index')->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cities = Cities::pluck('name','id');
        return view('companies.create', compact('cities'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Company::create($input);
        return redirect('companies')->with('flash_message', 'Company Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $companies = Company::find($id);
        $cities = Cities::pluck('name','id');
        return view('companies.edit', compact('companies','cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $companies = Company::findorFail($id);
        $input = $request->all();
        $companies->update($input);
        // return redirect(route('companies.index'))->with('flash_message', 'Company Updated!');
        return redirect()->route('companies.index')->with('flash_message', 'Company Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id):RedirectResponse
    public function delete(string $id)
    {
        // Company::where('id',$id)->firstOrFail()->delete();
        $companies = Company::findOrFail($id);
        $companies->delete();
        return redirect()->route('companies.index')->with('success', 'Data delete successful');
        // Company::destroy($id);
        // return redirect('companies')->with('flash_message', 'Company deleted!');
    }
}
