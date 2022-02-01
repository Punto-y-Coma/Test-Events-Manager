<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Masterclass;

class MasterclassController extends Controller
{
    public function index(){
        $datos_finalizadas ["masterclasses_out_date"] = Masterclass::where('date', '<', date("Y-m-d"))->paginate(3);
        return view ('welcome', $datos, $datos_finalizadas);
       
    }
}
