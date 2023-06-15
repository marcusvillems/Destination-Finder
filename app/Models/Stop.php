<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stop extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function routes(): BelongsToMany
    {
        return $this->belongsToMany(Route::class);
    }
}