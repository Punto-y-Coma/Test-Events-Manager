<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function masterclasses()
    {
        return $this->belongsToMany(Masterclass::class);
    }

}
