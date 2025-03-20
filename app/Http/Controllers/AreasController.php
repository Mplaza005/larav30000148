<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\clear;

class AreasController extends Controller
{
    //
    public function areaCirculo($radio){

        $area=3.1416*($radio*$radio);
        return $area;

    }


    public function areaTriangulo($base,$altura){

        $area=($base*$altura)/2;

        return $area;

    }


    public function  cuadratica($a,$b,$c){

       if($a!=0){



       }

    }





}
