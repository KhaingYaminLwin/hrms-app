<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Department;
use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\View\View;

use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view ('departments.index')->with('departments',$departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Department::create($input);
        return redirect('departments')->with('flash_message', 'Department Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departments = Department::find($id);
        return view('departments.edit')->with('departments', $departments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departments = Department::find($id);
        $input = $request->all();
        $departments->update($input);
        return redirect()->route('departments.index')->with('flash_message', 'departments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        // Department::where('id',$id)->firstOrFail()->delete();
        $departments = Department::findOrFail($id);
        $departments->delete();
        return redirect()->route('departments.index')->with('success', 'Data delete successful');
    }
}
