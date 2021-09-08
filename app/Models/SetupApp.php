<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupApp extends Model
{
    use HasFactory;

    protected $table = 'setup_app';
    protected $fillable = [
        'status'
    ];
}
