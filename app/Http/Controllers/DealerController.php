<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $dealers = Dealer::all();
        return view('dealers.index', ['title'=> 'Index Dealer', 'dealers'=> $dealers]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Dealers';

        return view('dealers.create', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required | string | max:255',
            'name' => 'required | string | max:255'
        ]);

        Dealer::create($data);

        return redirect()->route('dealers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Show Dealers';
        $dealer = Dealer::findOrFail($id);

        return view('dealers.show', [
            'title' => $title,
            'dealer' => $dealer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Dealers';
        $dealer = Dealer::findOrFail($id);

        return view('dealers.edit', [
            'title' => $title,
            'dealer'=> $dealer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'code'=> 'required|string|max:255',
            'name'=> 'required|string|max:255'
        ]);

        $dealer = Dealer::findOrFail($id);
        $dealer->update($data);

        return redirect()->route('dealers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->delete();
        
        return redirect()->route('dealers.index');
    }
}
