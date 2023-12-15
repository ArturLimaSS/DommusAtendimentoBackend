<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    protected $fillable = [
        'organization_id',
        'requester_id',
        'title',
        'description',
        'resposible_id',
        'work_team_id',
        'service_id',
        'status_id',
        'category_id',
        'urgency_level'
    ];
}
