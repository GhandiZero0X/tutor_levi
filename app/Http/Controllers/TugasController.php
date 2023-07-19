<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function store(Request $request)
    {
        // Validate data from the form
        $validatedData = $request->validate([
            'DESK_TUGAS' => 'required|string|max:255',
            'TENGGAT_WAKTU' => 'required|date',
            'STATUS' => 'required|boolean',
            'jadwalharian_id' => 'required',
            'mahasiswaId' => 'required',
        ]);

        $user = Auth::user();

        // Create a new Tugas instance using the relationship
        $tugas = $user->tugas()->create([
            'DESK_TUGAS' => $validatedData['DESK_TUGAS'],
            'TENGGAT_WAKTU' => $validatedData['TENGGAT_WAKTU'],
            'STATUS' => $validatedData['STATUS'],
            'jadwalharian_id' => $validatedData['jadwalharian_id'],
            'mahasiswaId' => $validatedData['mahasiswaId'],
        ]);

        // Assign relationships with JadwalHarian and Mahasiswa
        $tugas->jadwalHarian()->associate($validatedData['jadwalharian_id']);
        $tugas->mahasiswa()->associate($validatedData['mahasiswaId']);

        $tugas->save();

        // dd($tugas);
    }

    // No 1
    // public function delete(Tugas $tugas)
    // {
    //     $tugas->delete();

    //     return response()->json([
    //         'message' => 'Tugas berhasil dihapus.'
    //     ]);
    // }

    public function delete($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        return response()->json([
            'message' => 'Tugas berhasil dihapus.'
        ]);
    }
}
