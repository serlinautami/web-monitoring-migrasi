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

    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function job_steps() {
        return $this->hasMany(JobStep::class, 'job_id', 'id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($job) { // before delete() method call this
             $job->job_steps()->each(function($job_step) {
                $job_step->delete(); // <-- direct deletion
             });
             // do the rest of the cleanup...
        });
    }
    
}
