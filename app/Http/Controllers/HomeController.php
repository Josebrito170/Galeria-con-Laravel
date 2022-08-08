<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\imagenes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $imagen = imagenes::paginate(10);
        return view('home', compact('imagen'));
    }
}
