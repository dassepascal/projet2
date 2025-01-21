<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Models\Particular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticularController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');

    } 
    public function index()
    {
        $particulars = Particular::all();
        return view('admin.particulars.index', compact('particulars'));
    }

    public function create(): View
    {
        $particular = new Particular();
        return view('admin.particulars.create',[
            'particular' => $particular
        ]);
    }

    public function store(Request $request)
    {
       
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        Particular::create($request->all());
       

        return redirect()->route('admin.particulars.index')->with('success', 'Particular created successfully.');
    }

    public function show(Particular $particular)
    {
        return view('admin.particulars.show', compact('particular'));
    }

    public function edit(Particular $particular)
    {
        return view('admin.particulars.edit', compact('particular'));
    }

    public function update(Request $request, Particular $particular)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $particular->update($request->all());

        return redirect()->route('admin.particulars.index')->with('success', 'Particular updated successfully.');
    }

    public function destroy(Particular $particular)
    {
        $particular->delete();

        return redirect()->route('admin.particulars.index')->with('success', 'Particular deleted successfully.');
    }
}
