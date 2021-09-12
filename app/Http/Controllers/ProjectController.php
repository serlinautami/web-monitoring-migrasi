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
            'package' => $package,
            'project' => NULL
        ]);
    }

    public function edit_project_page($packageId, $id) {

        $package = Package::find($packageId);

        if(!$package) {
            return abort(404);
        }

        $project = Project::with(['jobs.job_steps'])->where('package_id', $packageId)->where('id', $id)->first();

        if(!$project) {
            return abort(404);
        }

        return view('pages.package.detail.form', [
            'package' => $package,
            'project' => $project
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
    public function edit_project(Request $request, $packageId, $id){
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

        $project = Project::with(['jobs.job_steps'])->find($id);

        if(!$package) {
            return response()->json([
                'status' => 0,
                'message' => 'Project tidak ditemukan!'
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
        if($existingProjectByName && $existingProjectByName->project_name != $project->project_name) {
            return response()->json([
                'status' => 0,
                'message' => "Nama Project ini sudah ada pada $package->name"
            ], 400);
        }
        

        $isUpdated= $project->update([
            'project_name' => $request->project_name,
            'status_migrasi' => $request->status_migrasi,
            'staging' => $request->staging,
            'status_upload' => $request->status_upload,
            'status_running' => $request->status_running,
            'status_import' => $request->status_import,
            'original_path' => $request->original_path,
            'keterangan' => $request->keterangan,
        ]);

        if(!$isUpdated) {
            return response()->json([
                'status' => 0,
                'message' => "Server Error!"
            ], 500);
        }

        if($request->jobs && count($request->jobs) > 0) {
            $jobs = [];

            for($i = 0; $i < count($request->jobs); $i++) {

                $existing_job = Job::find($request->jobs[$i]['id']);

                if($existing_job) {
                    // update
                    if($existing_job->job_name != $request->jobs[$i]['job_name']) {
                        $existing_job->job_name = $request->jobs[$i]['job_name'];
                    }
                    if($existing_job->keterangan != $request->jobs[$i]['keterangan']) {
                        $existing_job->keterangan = $request->jobs[$i]['keterangan'];
                    }

                    if($existing_job->job_name == $request->jobs[$i]['job_name'] || $existing_job->keterangan == $request->jobs[$i]['keterangan']) {
                        $existing_job->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                        $existing_job->save();
                    }
                } else {
                    // add new
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
            }

            if(count($jobs) > 0) {
                Job::insert($jobs);
            }

            for($i = 0; $i < count($request->jobs); $i++) {
                $job = $request->jobs[$i];
    
                if($job['job_steps'] && count($job['job_steps']) > 0) {
                    $job_steps = [];
                    for($j = 0; $j < count($job['job_steps']); $j++) {

                        $existing_job_step = JobStep::find($job['job_steps'][$j]['id']);

                        if($existing_job_step) {
                            if($existing_job_step->job_step_name != $job['job_steps'][$j]['job_step_name']) {
                                $existing_job_step->job_step_name = $job['job_steps'][$j]['job_step_name'];
                            }
                            if($existing_job_step->keterangan != $job['job_steps'][$j]['keterangan']) {
                                $existing_job_step->keterangan = $job['job_steps'][$j]['keterangan'];
                            }
        
                            if($existing_job_step->job_step_name == $job['job_steps'][$j]['job_step_name'] || $existing_job_step->keterangan == $job['job_steps'][$j]['keterangan']) {
                                $existing_job_step->updated_at = Carbon::now()->format('Y-m-d H:i:s');
                                $existing_job_step->save();
                            }
                        } else {
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
                    }

                    if(count($job_steps) > 0) {
                        JobStep::insert($job_steps);
                    }
                }
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

    public function detail_project(Request $request, $packageId, $id) {
        $requestType = NULL;

        if($request->has('content')) {
            $requestType = $request->get('content');
        }

        if($requestType == 'json') {
            $package = Package::find($packageId);
            if(!$package) {
                return response()->json([
                    'status' => 0,
                    'message' => 'Package tidak ditemukan!'
                ], 404);
            }

            $project = Project::with(['jobs.job_steps'])
                                ->where('package_id', $package->id)
                                ->where('id', $id)
                                ->first();
            if(!$project) {
                return response()->json([
                    'status' => 0,
                    'message' => 'Project tidak ditemukan!'
                ], 404);
            }


            return response()->json([
                'status' => 1,
                'message' => 'Berhasil',
                'data' => $project
            ], 200);
        } else {
            $package = Package::find($packageId);
            if(!$package) {
                return abort(404);
            }

            $project = Project::with(['jobs.job_steps'])
                                ->where('package_id', $package->id)
                                ->where('id', $id)
                                ->first();
            if(!$project) {
                return abort(404);
            }

            if($project->staging == 'yes') {
                $project->staging = 'Ada 0000_staging';
            } else if($project->staging == 'no') {
                $project->staging = 'Tidak Ada 0000_staging';
            } else {
                $project->staging = 'Tidak ada';
            }

            $project->status_migrasi = $this->readStatus($project->status_migrasi);
            $project->status_upload = $this->readStatus($project->status_upload);
            $project->status_running = $this->readStatus($project->status_running);
            $project->status_import = $this->readStatus($project->status_import);

            return view('pages.package.detail.project.index', [
                'package' => $package,
                'project' => $project,
            ]);
        }
    }

    public function delete_project($packageId, $id) {
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

        $project = Project::with(['jobs.job_steps'])->find($id);

        if(!$package) {
            return response()->json([
                'status' => 0,
                'message' => 'Project tidak ditemukan!'
            ], 404);
        }


        $isDelete = $project->delete();
        
        if(!$isDelete) {
            return response()->json([
                'status' => 0,
                'message' => 'Server Error!'
            ], 500);
        }

        return response()->json([
            'status' => 1,
            'message' => 'Berhasil menghapus project!'
        ], 200);
    }
}
