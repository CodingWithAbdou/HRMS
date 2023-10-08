<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finance_calender;
use App\Models\Finance_cln_period;
use Illuminate\Http\Request;

class Finance_cln_periodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Finance_calender::where('com_code' , auth()->user()->com_code)->first();
        return view('Finance_calender.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Finance_calender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data =  Finance_cln_period::find($id);
        return view('Finance_calender.show' , compact('data'));
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
