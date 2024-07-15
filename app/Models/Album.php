<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'year', 'poster'];

    public function tracks(){

        return $this->belongsToMany(Track::class);
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
