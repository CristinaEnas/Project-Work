<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'album_id'];

    public function album(){

        return $this->belongsTo(Album::class);
    }

    public function artists(){

        return $this->belongsToMany(Artist::class);
    }

    public function genres(){

        return $this->belongsToMany(Genre::class);
    }
}
