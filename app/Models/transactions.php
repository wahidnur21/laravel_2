<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $primaryKey = 'nota';
    
    protected $KeyType = 'string';

    protected $fillable = [
        'id_user',
        'id_customers',
        'date',
    ];
}
