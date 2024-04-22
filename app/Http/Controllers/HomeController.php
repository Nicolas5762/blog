<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class HomeController extends Controller
{

    public function __invoke()
    {
      return "Bienvenidos a la pagina de cursos";

 
    }

}
