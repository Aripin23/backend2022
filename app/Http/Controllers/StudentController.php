<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    # method index - get all resource
    public function index()
    {
        /*
        $user = [
            'nama' => 'Aripin',
            'jurusan' => 'Teknik Informatika'
        ];
        */
        #menggunakan model Student
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        # menggunakan response json laravel
        #
        #
        #
        return response()->json($data, 200);
    }

    #menambahkan resource student
    #methode store
    public function store(Request $request)
    {
        #menangkap resquest
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,

        ];

        #menggunakan Student untuk insert data
        $student =  Student::create($input);

        $data = [
            'message' => 'Data student created successfully',
            'data' => $student,
        ];

        #mengembalikan data json status code 201
        return response()->json($data, 201);

    }
}
