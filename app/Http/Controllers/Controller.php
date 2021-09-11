<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //
    public function readStatus($status) {
        switch($status){
            case 'onprogress':
                return 'On Progress';
            case 'done':
                return 'Done';
            case 'blocked':
                return 'Blocked';
            case 'done-upload':
                return 'Sudah Upload';
            case 'job-disable':
                return 'Job Disable';
            case 'done-deploy':
                return 'Sudah Deploy';
            case 'rollback':
                return 'Rollback';
            default:
                return 'Tidak ada';
        }
    }
}
