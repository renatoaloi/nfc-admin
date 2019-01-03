<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;

class CompraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $compras = Compra::all();
      return view('compra.index')->with('compras', $compras);
    }

    
}
