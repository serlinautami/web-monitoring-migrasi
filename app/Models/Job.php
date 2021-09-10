<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'id',
        'project_id',
        'job_name',
        'keterangan'
    ];

        
    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
}
