<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Project;
use App\Models\Job;
use App\Models\JobStep;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ProjectController extends Controller
{
    //
    public function add_project_page($packageId) {
        $package = Package::find($packageId);

        if(!$package) {
            return abort(404);
        }
        
        return view('pages.package.detail.form', [
            'package' => $package
        ]);
    }

    public function edit_project_page($packageId, $id) {

        $package = Package::find($packageId);

        if(!$package) {
            return abort(404);
        }

        return view('pages.package.edit.form', [
            'package' => $package
        ]);
    }

    public function add_project(Request $request, $packageId){
        if(!Auth::check()) {
            return response()->json([
                'status' => 0,
                'message' => 'Akses ditolak!',
            ], 401);
        }

        $package = Package::find($packageId);

        if(!$package) {
            return response()->json([
                'status' => 0,
                'message' => 'Package tidak ditemukan!'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'project_name' => 'required',
            'jobs' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 0,
                'message' => 'Validasi Error!',
                'errors' => $validator
            ], 400);
        }


        $existingProjectByName = Project::where('package_id', $package->id)
                                            ->where('project_name', $request->project_name)
                                            ->first();
        if($existingProjectByName) {
            return response()->json([
                'status' => 0,
                'message' => "Nama Project ini sudah ada pada $package->name"
            ], 400);
        }
        

        $project = Project::create([
            'id' => Str::uuid(),
            'project_name' => $request->project_name,
            'status_migrasi' => $request->status_migrasi,
            'staging' => $request->staging,
            'status_upload' => $request->status_upload,
            'status_running' => $request->status_running,
            'status_import' => $request->status_import,
            'original_path' => $request->original_path,
            'keterangan' => $request->keterangan,
            'package_id' => $package->id,
        ]);

        if(!$project) {
            return response()->json([
                'status' => 0,
                'message' => "Server Error!"
            ], 500);
        }

        $jobs = [];

        for($i = 0; $i < count($request->jobs); $i++) {
            $job = [
                'id' => $request->jobs[$i]['id'],
                'project_id' => $project->id,
                'job_name' => $request->jobs[$i]['job_name'],
                'keterangan' => $request->jobs[$i]['keterangan'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
            array_push($jobs, $job);
        }

        Job::insert($jobs);

        for($i = 0; $i < count($request->jobs); $i++) {
            $job = $request->jobs[$i];

            if($job['job_steps'] && count($job['job_steps']) > 0) {
                $job_steps = [];
                for($j = 0; $j < count($job['job_steps']); $j++) {
                    $job_step = [
                        'id' => $job['job_steps'][$j]['id'],
                        'job_id' => $job['id'],
                        'job_step_name' => $job['job_steps'][$j]['job_step_name'],
                        'keterangan' => $job['job_steps'][$j]['keterangan'],
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ];

                    array_push($job_steps, $job_step);
                }
                JobStep::insert($job_steps);
            }
        }

        return response()->json([
            'status' => 1,
            'message' => 'Berhasil menyimpan data',
            'data' => [
                'package_id' => $package->id,
                'project_id' => $project->id
            ]
        ], 200);
    }
    public function edit_project(){
        
    }
    public function delete_project(){
        
    }
}
