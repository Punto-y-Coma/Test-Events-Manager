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
        $masterclasses_out_date = Masterclass::where('date', '<', date("Y-m-d"))->orderBy('date', 'desc')->paginate(4, ['*'], 'masterclasses_out_date');
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
        return $this->index();
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
}