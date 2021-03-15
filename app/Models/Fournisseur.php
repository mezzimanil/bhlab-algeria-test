<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{

    public function familles()
    {
        return $this->belongsToMany(' App\Models\Famille');
    }
    use HasFactory;
}
