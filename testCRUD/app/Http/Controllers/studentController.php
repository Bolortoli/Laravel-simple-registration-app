<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public $students = array(
        array("B180910003", "Student1", 19, "Male", "Address"),
        array("B180910004", "Student2", 19, "Male", "Address"),
        array("B180910005", "Student3", 19, "Male", "Address"));
    public function list_student() {
        $studentsList = $this->students;
        return view('student', compact('studentsList'));
    }

    public function get_student($id) {
        $studentsList = $this->students;
        foreach($this->students as $student) {
            if ($student[0] == $id)
                return $student;
        }
        return view('student', compact('studentsList'));
    }
    public function search() {
        return view('student_search');
    }
    public function search_by_id(Request $request) {

        $validated = $request->validate([
            'id' => 'required | alpha_num'
        ]);
        
        $result = array();
        foreach($this->students as $student) {
            if ($student[0] == $request->id) {
                $result = $student;
                break;
            }
        }
        return view('student_search', compact('result'));
    }
}
    
