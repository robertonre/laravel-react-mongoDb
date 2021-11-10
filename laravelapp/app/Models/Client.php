<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Client extends Model
{
    protected $collection = 'clients';
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
    use HasFactory;
}
