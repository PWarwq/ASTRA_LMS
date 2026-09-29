<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "index Supervisor";
        return view('supervisors.index',[
            'title'=> $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Supervisor";
        return view('supervisors.create',[
            'title'=> $title
        ]);
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
        $title = "Show Supervisor";
        return view('supervisors.show',[
            'title'=> $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Supervisor";
        return view('supervisors.edit',[
            'title'=> $title
        ]);
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
