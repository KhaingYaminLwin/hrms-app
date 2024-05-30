<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Cities;
use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = Cities::all();
        return view ('cities.index')->with('cities',$cities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cities.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Cities::create($input);
        return redirect('cities')->with('flash_message', 'City Addedd!');
    }


    /**
     * Display the specified resource.
     */

     public function edit(string $id): View
     {
         $cities = Cities::find($id);
         return view('cities.edit')->with('cities', $cities);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cities = Cities::find($id);
        $input = $request->all();
        $cities->update($input);
        return redirect('cities')->with('flash_message', 'cities Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cities::where('id',$id)->firstOrFail()->delete();

        return redirect()->route('cities.index')->with('success', 'Data delete successful');
    }
}
