<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MENU extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable =[
        'name','status','link',
    ];
}
