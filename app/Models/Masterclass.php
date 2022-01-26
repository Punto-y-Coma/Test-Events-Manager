<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterclass extends Model
{
    use HasFactory;

    public function masterclasses()
    {
        return $this->belongsToMany(Masterclass::class);
    }

}
