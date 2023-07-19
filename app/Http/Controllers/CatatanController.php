<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'hari' => 'required|date',
            'kegiatan' => 'required|string|max:255',
        ]);

        $catatan = Auth::user()->catatans()->create([
            'hari' => $validatedData['hari'],
            'kegiatan' => $validatedData['kegiatan'],
        ]);

        $catatan->save();

        // Redirect ke halaman yang sesuai setelah menyimpan catatan
        return redirect()->route('home')->with('success', 'Catatan harian berhasil disimpan.');
    }

    // No 1
    // public function destroy($id)
    // {
    //     $catatan = Catatan::findOrFail($id);
    //     $catatan->delete();

    //     return response()->json([
    //         'message' => 'Catatan berhasil dihapus.'
    //     ]);
    // }

    // No 2
    public function destroy($id)
    {
        $catatan = Catatan::findOrFail($id);
        $catatan->tugas()->delete(); // Menghapus tugas yang terkait dengan catatan
        $catatan->delete(); // Menghapus catatan

        return response()->json([
            'message' => 'Catatan berhasil dihapus beserta tugas yang terkait.'
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'hari' => 'required|date',
            'kegiatan' => 'required|string|max:255',
        ]);

        $catatan = Catatan::findOrFail($id); // Mengambil data catatan berdasarkan ID

        // Memperbarui data catatan dengan data yang baru
        $catatan->hari = $validatedData['hari'];
        $catatan->kegiatan = $validatedData['kegiatan'];
        $catatan->save();

        // Redirect ke halaman yang sesuai setelah mengupdate catatan
        return redirect()->route('home')->with('success', 'Catatan harian berhasil diperbarui.');
    }
}
