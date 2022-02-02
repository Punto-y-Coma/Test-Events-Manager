<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterclass;
use Carbon\Carbon;

class MasterclassController extends Controller
{
    public function index()
    {
        $data1['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(2, ['*'], 'masterclasses');

        $data2['masterclasses2'] = Masterclass::where('date', '<', date("Y-m-d"))->paginate(2, ['*'], 'masterclasses2');

        return view('welcome', $data1, $data2);
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
