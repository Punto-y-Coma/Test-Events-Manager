<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterclass;

class MasterclassController extends Controller
{
    public function index()
    {
        $datos['masterclasses'] = Masterclass::paginate(5);

        return view('pages.home', $datos);
    }
}
