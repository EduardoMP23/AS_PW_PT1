<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = Trainer::all();
        return view('trainer.index', compact('trainer'));
    }

    public function create()
    {
        return view('trainer.create');
    }

    public function store(Request $request)
    {
        Trainer::create($request->all());
        return redirect('trainer')->with('success', 'trainer created successfully.');
    }

    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainer.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $trainer = Trainer::findOrFail($id);
        
        $trainer->name = $request->name;
        $trainer->rank = $request->rank;
        $trainer->save(); 

        return redirect('trainer')->with('success', 'trainer updated successfully.');
    }

    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();
        return redirect('trainer')->with('success', 'trainer deleted successfully.');
    }
}
