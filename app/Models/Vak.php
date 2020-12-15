<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    use HasFactory;

    protected $table = 'vaks';

    protected $fillable = [
        'vak_naam'
    ];

    public function resultaat()
    {
        return $this->hasMany('App\Models\Resultaten', 'vak_id');
    }
}
