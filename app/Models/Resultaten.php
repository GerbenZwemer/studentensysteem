<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultaten extends Model
{
    use HasFactory;

    protected $table = 'resultatens';

    protected $fillable = [
        'vak_id',
        'resultaat',
        'student_id'
    ];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'id');
    }

    public function vak()
    {
        return $this->belongsTo('App\Models\Vak');
    }
}
