<?php

namespace App\Http\Controllers;

use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $offers = DB::select("SELECT * FROM offers");
        return view('home', ['offers' => $offers]);
    }

    public function reset()
    {
        return view("auth.reset");
    }
}