<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Course $department_id){

 

     $courses = Course::leftJoin('departments', 'departments.id', '=', 'courses.department_id')

                    ->select('courses.course_code', 'courses.course_name' )
                    ->where( 'courses.department_id', '=', $department_id)
                    ->where( 'courses.level_id', '=', 1)

                    ->get();
                        
    $courses2 = Course::leftJoin('departments', 'departments.id', '=', 'courses.department_id')

                    ->select('courses.course_code', 'courses.course_name' )
                    ->where( 'courses.department_id', '=', 1)
                    ->where( 'courses.level_id', '=', 2)

                    ->get();

    $courses3 = Course::leftJoin('departments', 'departments.id', '=', 'courses.department_id')

                    ->select('courses.course_code', 'courses.course_name' )
                    ->where( 'courses.department_id', '=', 1)
                    ->where( 'courses.level_id', '=', 3)

                    ->get();
                        

// if ('courses.level_id', '=', 1) {
//   # code...
// } else {
//   # code...
// }


    return view('courses.index', compact('courses', 'courses2', 'courses3'));

  }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
