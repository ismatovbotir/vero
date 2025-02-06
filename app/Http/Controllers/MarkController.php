<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkStoreRequest;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MarkImport;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Transaction::withCount('marks')->paginate(20);
        //dd($data);
        return view('mark.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mark.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarkStoreRequest $request)
    {
        //dd($request);
        $validated=$request->validated();
        Excel::import(new MarkImport,$request->file('xls') );
        
        return to_route('admin.mark.index')->with('success', 'All good!');

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
