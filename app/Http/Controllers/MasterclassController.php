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

    public function create()
    {
        return view('pages.masterclass.create');
    }

    public function store(Request $request)
    {
        $data = request()->all();
        return response()->json($data);

    }

}
