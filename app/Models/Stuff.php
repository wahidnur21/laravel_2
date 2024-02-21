<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;

    protected $table = 'stuff';

    protected $primaryKey = 'id';
    
    protected $KeyType = 'string';

    protected $fillable = [
        'name',
        'price',
        'unit',
        'status',
        'id_categories',
    ];
}
