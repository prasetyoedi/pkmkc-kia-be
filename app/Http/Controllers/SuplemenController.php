<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplemen;

class SuplemenController extends Controller
{
    public function index()
    {
        $data = Suplemen::all();

        return view('suplemen.index', compact('data'));
    }

    public function create()
    {
        return view('suplemen.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'suplemen' => 'required|string|max:50',
                'trimester' => 'required|integer|min:1|max:3',
                'keterangan' => 'nullable|string|max:100',
            ]);

            $response = Suplemen::create([
                'suplemen' => $request->input('suplemen'),
                'trimester' => $request->input('trimester'),
                'keterangan' => $request->input('keterangan'),
            ]);

            return redirect()->route('suplemen.index')->with('success', 'Suplemen added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add suplemen.');
        }
    }

    public function edit(string $id)
    {
        $suplemen = Suplemen::findOrFail($id);
        return view('suplemen.edit', compact('suplemen'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'suplemen' => 'required|string|max:50',
                'trimester' => 'required|integer|min:1|max:3',
                'keterangan' => 'nullable|string|max:100',
            ]);

            $suplemen = Suplemen::findOrFail($id);
            $suplemen->update([
                'suplemen' => $request->input('suplemen'),
                'trimester' => $request->input('trimester'),
                'keterangan' => $request->input('keterangan'),
            ]);
            
            return redirect()->route('suplemen.index')->with('success', 'Suplemen updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update suplemen.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $suplemen = Suplemen::findOrFail($id);
            $suplemen->delete();
            
            return redirect()->route('suplemen.index')->with('success', 'Suplemen deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete suplemen.');
        }
    }
}