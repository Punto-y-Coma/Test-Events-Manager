<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       

               
    }

/* 
    https://stackoverflow.com/questions/34680911/how-to-check-user-is-admin-or-not-in-laravel-blade-view

    public function isAdmin(){
        return $this->roles()->where('role_id', 1)->first();
    }

    EN <HOME class="BLADE"></HOME>

    @if (auth()->check())
        @if (auth()->user()->isAdmin())
            Hello Admin
        @else
            Hello standard user
        @endif
    @endif 
    
*/
 




}
