<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'id',
        'ip_server',
        'status_migrasi',
        'status_upload',
        'status_running',
        'jumlah_job_ssis',
        'staging',
        'total_connect',
        'keterangan',
        'package_id'
    ];

    protected $casts = [
        'id' => 'string'
    ];
    
    public $incrementing = false;

    public function projects() {
        return $this->hasMany(Project::class, 'package_id', 'id');
    }
}
