<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobStep extends Model
{
    use HasFactory;

    protected $table = 'job_steps';

    protected $fillable = [
        'id',
        'job_id',
        'job_step_name',
        'keterangan'
    ];

        
    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
}
