<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah_sakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(Rumah_sakit::all());
    }

    public function show($id)
    {
        $rumahSakit = Rumah_sakit::find($id);
        if (!$rumahSakit)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($rumahSakit);
    }

    public function store(Request $request)
    {
        $rumahSakit = Rumah_sakit::create([
            'nama_rumah_sakit' => $request->nama_rumah_sakit,
            'alamat_lengkap'   => $request->alamat_lengkap,
            'no_telepon'       => $request->no_telepon,
            'tipe_rumah_sakit' => $request->tipe_rumah_sakit,
            'latitude'         => $request->latitude,
            'longitude'        => $request->longitude,
        ]);

        return response()->json($rumahSakit, 201);
    }

    public function update(Request $request, $id)
    {
        $rumahSakit = Rumah_sakit::find($id);
        if (!$rumahSakit)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rumahSakit->update($request->all());
        return response()->json($rumahSakit);
    }

    public function destroy($id)
    {
        $rumahSakit = Rumah_sakit::find($id);
        if (!$rumahSakit)
            return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rumahSakit->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
