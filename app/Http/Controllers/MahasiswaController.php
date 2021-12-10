<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    // API GET
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }


    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }

    // API POST
    public function create(Request $request)
    {
        $this->validate($request, [
            'npm' => 'required|string',
            'nama' => 'required|string',
            'semester' => 'required|string',
        ]);

        $data = $request->all();
        $mahasiswa = Mahasiswa::create($data);

        return response()->json($mahasiswa);
    }
}
