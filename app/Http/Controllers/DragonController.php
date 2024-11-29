<?php

namespace App\Http\Controllers;

use App\Models\Dragon;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function index()
    {
        $dragon = Dragon::all();
        return view('dragon.index', compact('dragon'));
    }

    public function create()
    {
        $trainers = Trainer::all();
        return view('dragon.create', compact('trainers'));
    }

    public function store(Request $request)
    {
        Dragon::create($request->all());
        return redirect('dragon')->with('success', 'dragon created successfully.');
    }

    public function edit($id)
    {
        $dragon = Dragon::findOrFail($id);
        $trainers = Trainer::all();
        return view('dragon.edit', compact('dragon', 'trainers'));
    }

    public function update(Request $request, $id)
    {
        $dragon = Dragon::findOrFail($id);
        $dragon->update($request->all());

        $dragon->name = $request->name;
        $dragon->element = $request->element;
        $dragon->age = $request->age;

        if(!is_null($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $dragon->image = 'images/'.$imageName;
        }
        $dragon->save();

        return redirect('dragon')->with('success', 'dragon updated successfully.');



    }

    public function destroy($id)
    {
        $dragon = Dragon::findOrFail($id);
        $dragon->delete();
        return redirect('dragon')->with('success', 'dragon deleted successfully.');
    }
}
