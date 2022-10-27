<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        echo "Menampilkan data Animals";
    }

    public function store(Request $request)
    {
        echo "Menambahkan data Animals";
        echo "Nama hewan: $request->nama";
    }

    public function update(Request $request, $id)
    {
        echo "Mengupdate data Animals id $id - ";
        echo "Nama hewan: $request->nama";
    }

    public function destroy($id)
    {
        echo "Menghapus data Animals id $id";
    }
}
