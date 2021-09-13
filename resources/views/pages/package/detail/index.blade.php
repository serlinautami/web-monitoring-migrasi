@extends('layouts.container')

@section('title')
    Package {{ $package->ip_server }} - Web Manajemen Migrasi BRI
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/package">Package</a></li>
                <li class="breadcrumb-item active"><span>{{ $package->ip_server }}</span></li>
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
                        <h5><strong>Detail Package</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="container p-0 border border-1">
                            <div class="row g-0">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">IP Server</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->ip_server }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Migrasi</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->status_migrasi }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Upload</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->status_upload }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status Running</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->status_running }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Jumlah Job SSIS</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->jumlah_job_ssis }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Staging</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->staging }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Total connect 40.160</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $package->total_connect }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Keterangan</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{!! $package->keterangan !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h5><strong>Project list</strong></h5>
                    </div>
                    <div class="card-body">
                        @if (Auth::user()->role == 'super-admin' || Auth::user()->role == 'contributor')
                            <div class="form-group mb-3">
                                <a href="/package/{{ $package->id }}/project/add" class="btn btn-primary">Tambah
                                    Project</a>
                            </div>
                        @endif


                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th style="min-width:250px">Nama Project</th>
                                        <th style="min-width:400px">Nama Job</th>
                                        <th style="min-width:150px">Status Migrasi</th>
                                        <th style="min-width:100px">0000_Staging?</th>
                                        <th style="min-width:150px">Status Upload</th>
                                        <th style="min-width:150px">Status Running</th>
                                        <th style="min-width:150px">Status Import</th>
                                        <th style="min-width:300px">Path asli SSIS</th>
                                        <th style="min-width:400px">Keterangan</th>
                                        <th style="min-width:130px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($projects && count($projects) > 0)
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->project_name }}</td>
                                                <td>
                                                    @if ($project->jobs && count($project->jobs) > 0)
                                                        <ul class="ps-3">
                                                            @foreach ($project->jobs as $job)
                                                                <li>
                                                                    <span>{{ $job->job_name }}<span>
                                                                            @if ($job->job_steps && count($job->job_steps))
                                                                                <ul class="ps-2">
                                                                                    @foreach ($job->job_steps as $job_step)
                                                                                        <li>{{ $job_step->job_step_name }}
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                </li>
                                                            @endforeach
                                                            <ul>
                                                    @endif
                                                </td>
                                                <td>{{ $project->status_migrasi }}</td>
                                                <td>{{ $project->staging }}</td>
                                                <td>{{ $project->status_upload }}</td>
                                                <td>{{ $project->status_running }}</td>
                                                <td>{{ $project->status_import }}</td>
                                                <td>{{ $project->original_path }}</td>
                                                <td>{!! nl2br($project->keterangan) !!}</td>
                                                <td class="text-center">
                                                    @if (Auth::user()->role == 'super-admin' || Auth::user()->role == 'contributor')
                                                        <a href="/package/{{ $package->id }}/project/edit/{{ $project->id }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                    @endif
                                                    <a href="/package/{{ $package->id }}/project/{{ $project->id }}"
                                                        class="btn btn-primary btn-sm">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    @else
                                        <tr>
                                            <td colspan="10" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end">
                                {!! $projects->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
