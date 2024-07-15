<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'nationality'];

    public function tracks(){

        return $this->belongsToMany(Track::class);
        
    }

    public function albums(){

        return $this->hasMany(Album::class);
    }
}
