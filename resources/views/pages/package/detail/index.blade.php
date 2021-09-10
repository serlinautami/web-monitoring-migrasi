@extends('layouts.container')

@section('title') Package @stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item"><span>Package</span></li>
                <li class="breadcrumb-item active"><span>Detail</span></li>
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
                                    <p class="m-0">{{ $package->keterangan }}</p>
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
                        <div class="form-group mb-3">
                            <a href="/package/{{ $package->id }}/project/add" class="btn btn-primary">Tambah Project</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Job Name</th>
                                        <th>Notes</th>
                                        <th>Staging</th>
                                        <th>Status Upload</th>
                                        <th>Status Running</th>
                                        <th>Status Import</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($projects && count($projects) > 0)
                                        @foreach ($projects as $project)
                                            <tr>
                                                <th>{{ $project->project_name }}</th>
                                                <th>{{ $project->job_name }}</th>
                                                <th>{{ $project->notes }}</th>
                                                <th>{{ $project->staging }}</th>
                                                <th>{{ $project->status_upload }}</th>
                                                <th>{{ $project->status_running }}</th>
                                                <th>{{ $project->status_import }}</th>
                                                <th>
                                                    <a href="/package/{{ $package->id }}/project/edit/{{ $project->id }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                </th>
                                            </tr>
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
