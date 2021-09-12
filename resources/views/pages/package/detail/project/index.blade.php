@extends('layouts.container')

@section('title')
    Project {{ $project->project_name }} - Web Manajemen Migrasi BRI
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/package">Package</a></li>
                <li class="breadcrumb-item"><a href="/package/{{ $package->id }}">{{ $package->ip_server }}</a></li>
                <li class="breadcrumb-item active"><span>Project</span></li>
                <li class="breadcrumb-item active"><span>{{ $project->project_name }}</span></li>
            </ol>
        </nav>
    </div>
@stop

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5><strong>Detail Project</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="container p-0 border border-1">
                            <div class="row g-0">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Nama Project</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->project_name }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Migrasi</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->status_migrasi }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Upload</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->status_upload }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Running</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->status_running }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Import</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->status_import }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Staging</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->staging }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Path asli SSIS</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $project->original_path }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Keterangan</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <div class="m-0">{!! nl2br($project->keterangan) !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h5><strong>Job List</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th style="min-width:250px">Nama Job</th>
                                        <th style="min-width:400px">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($project->jobs && count($project->jobs) > 0)
                                        @foreach ($project->jobs as $job)
                                            <tr>
                                                <td>{{ $job->job_name }}</td>
                                                <td>{!! nl2br($job->keterangan) !!}</td>
                                            </tr>
                                            @if ($job->job_steps && count($job->job_steps) > 0)
                                                <tr>
                                                    <td colspan="2">
                                                        <table class="table table-bordered table-hover table-striped m-0">
                                                            <thead>
                                                                <tr>
                                                                    <th style="min-width:250px">Nama Job Step</th>
                                                                    <th style="min-width:400px">Keterangan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($job->job_steps as $job_step)
                                                                    <tr>
                                                                        <td>{{ $job_step->job_step_name }}</td>
                                                                        <td>{!! nl2br($job_step->keterangan) !!}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
