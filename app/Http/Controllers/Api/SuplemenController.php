<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suplemen;

class SuplemenController extends Controller
{
    public function index()
    {
        $data = Suplemen::all();

        return response()->json($data);
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
            
            return response()->json(['message' => 'Suplemen created successfully.', 'data' => $response], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create suplemen.', 'error' => $e->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $suplemen = Suplemen::findOrFail($id);
            return response()->json($suplemen);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Suplemen not found.', 'error' => $e->getMessage()], 404);
        }
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
            
            return response()->json(['message' => 'Suplemen updated successfully.', 'data' => $suplemen]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update suplemen.', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $suplemen = Suplemen::findOrFail($id);
            $suplemen->delete();
            
            return response()->json(['message' => 'Suplemen deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete suplemen.', 'error' => $e->getMessage()], 500);
        }
    }
}