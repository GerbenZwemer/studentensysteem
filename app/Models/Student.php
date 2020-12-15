<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'roepnaam',
        'voorvoegsel',
        'achternaam',
        'voorletters',
        'officielenaam',
        'postcode',
        'straat',
        'huisnummer',
        'toevoeging',
        'woonplaats',
        'opleiding',
        'klas'
    ];

    public function resultaten()
    {
        return $this->hasMany('App\Models\Resultaten');
    }
}
