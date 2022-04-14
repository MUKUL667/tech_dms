<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SUBMENU extends Model
{
    use HasFactory;
    protected $table = 'submenu';
    protected $fillable =[
        'name','menu_id','status','link'
    ];
}
