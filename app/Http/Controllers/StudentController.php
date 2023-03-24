<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:80'],
            'faculty' => ['required', 'max:100'],
            'major' => ['required', 'max:50'],
        ]);

        DB::table('students')->insert(array(
            'name' => $request->name,
            'faculty' => $request->faculty,
            'major' => $request->major,
            'created_at' => now(),
            'updated_at' => now(),
        ));

        return redirect()->route('students.index')->with('success', 'Data Berhasil Di Simpan');
    }

    public function edit($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        DB::table('students')->where('id', $id)->limit(1)->update(array(
            'name' => $request->name,
            'faculty' => $request->faculty,
            'major' => $request->major,
            'updated_at' => now(),
        ));

        return redirect()->route('students.index')->with('success', 'Data Berhasil Di Update');
    }

    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->limit(1)->delete();

        return response()->json(['success' => 'Data Berhasil Dihapus'], 200);
    }
}
