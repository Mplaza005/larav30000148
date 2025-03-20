<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function listar(){

        $cursos = Course::all();
        return view('courses.list',compact('cursos'));

    }



    public function create(){

        return view('courses.create');


    }

    public function store(Request $request){


        $curso = new Course();

        $curso->numero_ficha=$request->numero_ficha;
        $curso->programa=$request->programa;
        $curso->numero_estudiantes=$request->numero_estudiantes;
        $curso->save();

        return $curso;

    }

    public function show($id){


        $curso=Course::find($id);

        return view('courses.show',compact('curso'));

    }



}


// $table->string('numero_ficha');
// $table->string('programa');
// $table->integer('numero_estudiantes');
