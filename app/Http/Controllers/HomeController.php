<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterclass;
use App\Models\User;

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
        $datos['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(6, ['*'], 'masterclasses');

        if (auth()->user()->is_admin === 1) {
            return view('pages.admin', $datos);
        }
        else {
            return view('pages.home', $datos);
        }
    }
}