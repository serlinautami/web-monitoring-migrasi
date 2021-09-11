<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'id',
        'project_name',
        'keterangan',
        'staging',
        'status_upload',
        'status_running',
        'status_import'
    ];

    
    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;

    public function jobs() {
        return $this->hasMany(Job::class, 'project_id', 'id');
    }
}
