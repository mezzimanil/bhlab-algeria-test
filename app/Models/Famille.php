<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{

    public function fournisseur()
    {
        return $this->belongsToMany(' App\Models\Fournisseur');
    }
    use HasFactory;
}
