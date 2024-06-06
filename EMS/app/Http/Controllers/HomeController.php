<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;  
use DB;   

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
       // $records =Employee::all();
        $records = DB::table('employees')->get(); 
        return view('home', ['records' => $records]);
       // return view('home');
    }
}