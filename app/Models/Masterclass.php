<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Masterclass extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'date',
        'time',
        'vacants',
        'description',
        'image',
        'featured',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    static function addToPivotTable($masterclass)
    {
        $masterclass->users()->attach(Auth::user());
    }


}
