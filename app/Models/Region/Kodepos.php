<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    use HasFactory;
    protected $table = 'reg_kodepos';

    protected $fillable = [
        'id',
        'zipcode',
        'province',
        'city',
        'district',
        'village',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
