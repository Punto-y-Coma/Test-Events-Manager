<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Masterclass;

use Carbon\Carbon;


class MasterclassController extends Controller
{
    public function index()
    {
        $datos['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(5);

        return view('welcome', $datos);
    }
}
