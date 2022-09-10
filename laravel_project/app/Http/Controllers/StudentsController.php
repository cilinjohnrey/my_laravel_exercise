<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index(){
        // $data = Student::all();
        // $data = Student::where('age', '>=', 19)
        //     ->orderBy('age', 'desc')
        //     ->limit(20)
        //     ->get();
        // $data = DB::table('students')
        //     ->select(DB::raw('count(*) as total_gender, gender'))
        //     ->groupBy('gender')
        //     ->get();
        $data = Student::where('id', 100)
            ->firstOrFail()
            ->get();

        return view('student.index', ['students' => $data]);
    }

    public function show($id){
        $data = Student::findOrFail($id);
        dd($data);
        return view('student.index', ['students' => $data]);
    }
}
