<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asupan;
use Illuminate\Http\Request;

class AsupanController extends Controller
{
    public function index()
    {
        $data = Asupan::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'bahan_makanan' => 'required|string|max:50',
                'trimester' => 'required|integer|min:1|max:3',
                'keterangan' => 'nullable|string|max:100',
            ]);

            $asupan = Asupan::create([
                'bahan_makanan' => $request->input('bahan_makanan'),
                'trimester' => $request->input('trimester'),
                'keterangan' => $request->input('keterangan'),
            ]);

            return response()->json(['message' => 'Asupan created successfully.', 'data' => $asupan], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create asupan.', 'error' => $e->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $asupan = Asupan::findOrFail($id);
            return response()->json($asupan);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Asupan not found.', 'error' => $e->getMessage()], 404);
        }
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

            return response()->json(['message' => 'Asupan updated successfully.', 'data' => $asupan]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update asupan.', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $asupan = Asupan::findOrFail($id);
            $asupan->delete();

            return response()->json(['message' => 'Asupan deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete asupan.', 'error' => $e->getMessage()], 500);
        }
    }
}