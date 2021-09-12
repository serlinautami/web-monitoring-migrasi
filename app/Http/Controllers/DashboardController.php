<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;
use App\Models\Project;
use App\Models\Job;
use App\Models\User;
use App\Models\History;

class DashboardController extends Controller
{
    //
    public function dashboard() {
        $packageCount = Package::count();
        $projectCount = Project::count();
        $jobCount = Job::count();
        $userCount = User::whereIn('status', ['active', 'nonactive'])->count();
        $lastActivities = History::with(['user'])->orderBy('created_at', 'desc')->limit(5)->get();



        return view('pages.dashboard.index', [
            'packageCount' => $packageCount,
            'projectCount' => $projectCount,
            'jobCount' => $jobCount,
            'userCount' => $userCount,
            'lastActivities' => $lastActivities
        ]);
    }
}
