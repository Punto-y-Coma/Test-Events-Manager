<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Masterclass;

class MasterclassController extends Controller
{
    public function index()
    {
        $datos['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(6, ['*'], 'masterclasses');
        $datos2['masterclasses_out_date'] = Masterclass::where('date', '<', date("Y-m-d"))->paginate(3, ['*'], 'masterclasses_out_date');
        return view('welcome', $datos, $datos2);
    }

    public function create()
    {
        return view('pages.masterclass.create');
    }

    public function store(Request $request)
    {

        /* d/m/Y  ->  Y-m-d */
        $data = $request->all();
        $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        $newData = Masterclass::create($data);
        return $this->index();

    }

 /*    public function store(Request $request)
{
    $data = $request->all();
    $data['transaction_date'] = Carbon::createFromFormat('m/d/Y', $request->transaction_date)->format('Y-m-d');
    $transaction = Transaction::create($data);
} */

}
