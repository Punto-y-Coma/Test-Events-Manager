<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $datos['masterclasses'] = Masterclass::paginate(5);

        if (auth()->user()->is_admin === 1) {
            return view('pages.admin', $datos);
        }
        else {
            // Que queremos hacer:
            // Listar las masterclasses del usuario logueado
            // Recuperar usuario logueado
            // Recuperar eventos de ese usuario
            // Paginarlos
            // Devolver a vista home
            $userEvents['user_events'] = Auth::user()->masterclasses;
            //dd($userEvents);
            
            return view('pages.home', $userEvents);
        }
    }
}