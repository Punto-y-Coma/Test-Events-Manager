<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Masterclass;

class MasterclassController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
