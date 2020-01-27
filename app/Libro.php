<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable=['titulo','sinopsis','pvp','stock','isbn'];

    //Query scopes
    public function scopeTitulo($query, $text){
        return $query->where('titulo','like',"%text%");
    }
    public function scopeSinopsis($query, $text){
        return $query->where('sinopsis','like',"%text%");
    }
}
