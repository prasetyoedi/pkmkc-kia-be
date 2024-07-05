<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asupan;

class AsupanController extends Controller
{
    public function index()
    {
        $data = Asupan::all();

        return view('asupan.index', compact('data'));
    }

    public function create()
    {
        return view('asupan.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'bahan_makanan' => 'required|string|max:50',
                'trimester' => 'required|integer|min:1|max:3',
                'keterangan' => 'nullable|string|max:100',
            ]);

            $response = Asupan::create([
                'bahan_makanan' => $request->input('bahan_makanan'),
                'trimester' => $request->input('trimester'),
                'keterangan' => $request->input('keterangan'),
            ]);

            return redirect()->route('asupan.index')->with('success', 'Asupan added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add asupan.');
        }
    }

    public function edit(string $id)
    {
        $asupan = Asupan::findOrFail($id);
        return view('asupan.edit', compact('asupan'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'bahan_makanan' => 'required|string|max:50',
                'trimester' => 'required|integer|min:1|max:3',
                'keterangan' => 'nullable|string|max:100',
            ]);

            $asupan = Asupan::findOrFail($id);
            $asupan->update([
                'bahan_makanan' => $request->input('bahan_makanan'),
                'trimester' => $request->input('trimester'),
                'keterangan' => $request->input('keterangan'),
            ]);

            return redirect()->route('asupan.index')->with('success', 'Asupan updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update asupan.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $asupan = Asupan::findOrFail($id);
            $asupan->delete();

            return redirect()->route('asupan.index')->with('success', 'Asupan deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete asupan.');
        }
    }
}