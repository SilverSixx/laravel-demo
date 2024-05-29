<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $humans = Human::query()
            ->orderBy("created_at","desc")
            ->paginate(10)
        ;
        return view('humans.index', [
            'humans' => $humans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('humans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'dob' => ['required', 'date'],
        ]);
        $human = Human::create($data);

        return to_route('humans.show', $human->id)->with('message', 'Human created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Human $human)
    {
        return view('humans.show', [
            'human' => $human,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Human $human)
    {
        return view('humans.edit', [
            'human' => $human,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Human $human)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'dob' => ['required', 'date'],
        ]);

        $human->update($data);

        return to_route('humans.show', $human->id)->with('message', 'Human updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $human)
    {
        $human->delete();

        return to_route('humans.index')->with('message', 'Human deleted successfully!');
    }
}
