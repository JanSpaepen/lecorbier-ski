<?php

namespace App\Http\Controllers;
use App\Unit;
use App\Piste;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth'); Dit kan ook in de routes file. Kijk daar
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pistes = Piste::latest()->get();
        $units = Unit::latest()->get();
        return view('dashboard', ['pistes' => $pistes, 'units' =>$units] );
    }
}
