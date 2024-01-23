<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Apuesta6DolaresController extends Controller
{
    public function seisDOLARES(){
        return view('6DOLARES');
    }
}
