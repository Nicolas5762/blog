<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        return "Bienvenidos a al pagina de cursos";
    }

    public function create()
    {
        return "En esta pagina puedes crear cursos ";
    }
    public function show($curso)
    {
        return "Bienvenidos al curso: $curso";
    }
}
