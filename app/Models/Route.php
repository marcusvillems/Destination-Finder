<?php

namespace App\Models;

use App\Models\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Route extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function stops()
    {
        return $this->belongsToMany(Stop::class);
    }
}