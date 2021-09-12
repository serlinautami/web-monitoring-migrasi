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
        'status_import',
        'status_migrasi',
        'original_path',
        'package_id'
    ];

    
    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;

    public function package(){
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function jobs() {
        return $this->hasMany(Job::class, 'project_id', 'id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($project) { // before delete() method call this
             $project->jobs()->each(function($job) {
                $job->delete(); // <-- direct deletion
             });
             // do the rest of the cleanup...
        });
    }
}
