<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Masterclass;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\Subscribemail;
use Illuminate\Support\Facades\Mail;

class MasterclassController extends Controller
{
    public function index()
    {
        $masterclasses = Masterclass::where('date', '>', date("Y-m-d"))->orderBy('date')->paginate(6, ['*'], 'masterclasses');
        $masterclasses_out_date = Masterclass::where('date', '<', date("Y-m-d"))->orderBy('date', 'desc')->paginate(3, ['*'], 'masterclasses_out_date');
        $masterclasses_featured = Masterclass::where('featured', 1)->get();
        return view('welcome', compact('masterclasses', 'masterclasses_out_date', 'masterclasses_featured'));
    }

    public function create()
    {
        return view('pages.masterclass.create');
    }

    public function store(Request $request)
    {
        /* d/m/Y  ->  Y-m-d */

        $data = $request->all();

        if (count($data) == 7) {
            $data['featured'] = 0;
        }

        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('uploads','public');
        }
    
        /* d/m/Y  ->  Y-m-d */
        $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        Masterclass::create($data);
        return redirect('home');
    }

    public function subscribe($id)
    {
        $masterclass = Masterclass::find($id);
        Masterclass::addToPivotTable($masterclass);
        
        foreach ($masterclass->users as $table_users) { 
            $table_users = $table_users->pivot->user_id;
        } 
        
        $user_email = User::find($table_users)->email;
        $user_name = User::find($table_users)->name;
        $class_name = $masterclass->name;
        
        $mail = new Subscribemail($class_name, $user_name);
        Mail::to($user_email)->send($mail);

        return redirect('home');
    }


    public function destroy($id)
    {
        Masterclass::destroy($id);

        return redirect('home');
    }

    public function edit($id)
    {
        $data = Masterclass::findOrFail($id);

        return view('pages.masterclass.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        //dd(count($data));

        //dd($data['featured']);

        if ((count($data) == 5) || (count($data) == 6 && $request->hasFile('image'))) {
            $data['featured'] = 0;
        }

      /*   if((count($data) == 6) && !($request->hasFile('image'))) {
             $data['featured'] = 1;
             echo "Está featured y no tiene imagen";
        }  */      

        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('uploads','public');
        }
        
        $actual = Masterclass::find($id);

        /* d/m/Y  ->  Y-m-d */
        if($data['date'] != $actual->date) {
            $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        }

        Masterclass::where('id', $id)->update($data);

        return redirect('home');
    }
}