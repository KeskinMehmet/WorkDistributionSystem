<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'job',
        'level',
        'estimated_duration',
        'dev_id',
    ];

}
