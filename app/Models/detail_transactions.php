<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transactions extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';

    protected $primaryKey = 'id';
    
    protected $KeyType = 'string';

    protected $fillable = [
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
    ];
}
