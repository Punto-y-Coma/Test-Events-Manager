<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterclassController extends Controller
{
    public function index()
{
    $masterclasses = Masterclass::all();
    return $masterclasses;
}

public function destroy(Masterclass $masterclasses)
{
    if($masterclasses->delete()){
        return true;
    }
}
}
