<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
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
