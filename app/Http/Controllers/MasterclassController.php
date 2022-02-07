<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Masterclass;
use Illuminate\Support\Facades\Auth;

class MasterclassController extends Controller
{
    public function index()
    {
        $datos['masterclasses'] = Masterclass::where('date', '>', date("Y-m-d"))->paginate(6, ['*'], 'masterclasses');
        $datos2['masterclasses_out_date'] = Masterclass::where('date', '<', date("Y-m-d"))->paginate(3, ['*'], 'masterclasses_out_date');
        //$datos3['featured_masterclasses'] = Masterclass::all();
        $datos3['featured_masterclasses'] = Masterclass::where('date', '<', date("Y-m-d"))->paginate(3, ['*'], 'masterclasses_out_date');
        return view('welcome', $datos, $datos2, $datos3);

    }

    public function create()
    {
        return view('pages.masterclass.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if (count($data) == 7)
        {
            $data['featured'] = 0;
        }
    
        /* d/m/Y  ->  Y-m-d */
        $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        $newData = Masterclass::create($data);
        return $this->index();
    }

    public function subscribe($id)
    {
        $masterclass = Masterclass::find($id);

        Masterclass::addToPivotTable($masterclass);

        return redirect('home');

        //status 302
    }

    public function destroy($id)
    {
        $masterclass = Masterclass::where('id', $id)->delete();

        return redirect('home');
    }

}
