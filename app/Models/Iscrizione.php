<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Iscrizione extends Model
{
    use HasFactory;

    protected $hidden = ['idCorso', 'idUtente'];
    protected $table = 'iscrizione';

    /*protected function setKeysForSaveQuery(Builder $query){

        return $query->where('idCorso', $this->getAttribute('idCorso'))
            ->where('idUtente', $this->getAttribute('idUtente'));
    }*/
   
}

