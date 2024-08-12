<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xeber extends Model
{
    use HasFactory;

    protected $table ='xebers';

    protected $fillable =[
        'name',
        'status',
    ];
}
