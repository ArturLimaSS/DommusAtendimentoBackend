<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanban extends Model
{
    use HasFactory;

    protected $table = 'kanban';

    protected $fillable = [
       'status',
       'name',
       'area_id'
    ];
}
