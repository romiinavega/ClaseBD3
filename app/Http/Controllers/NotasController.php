<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index() {
        $notas =Notas::all(); // $notas = DB::table('notas')->get();
    
        return view('notas', ['notas' => $notas]);
    }
}
