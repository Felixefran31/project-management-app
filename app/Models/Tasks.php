<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Work(){
        return $this->belongsToMany(Work::class);
    }
}
