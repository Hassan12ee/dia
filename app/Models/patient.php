<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = 'patients';

    protected $fillable = [
        'name',
        'email',
        'age',
    ];
    protected $hidden = [
        'password',
    ];


}
