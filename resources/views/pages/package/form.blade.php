@extends('layouts.container')

@section('title')
    @if ($package)
        Edit Package {{ $package->ip_server }} - Web Manajemen Migrasi BRI
    @else
        Tambah Package - Web Manajemen Migrasi BRI
    @endif
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/package">Package</a></li>
                <li class="breadcrumb-item active"><span>{{ $package ? 'Edit / ' . $package->ip_server : 'Tambah' }}</span>
                </li>
            </ol>
        </nav>
    </div>
@stop


@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5><strong>Form Package</strong></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="@if ($package) /package/edit/{{ $package->id }} @else /package/add @endif">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">IP Server</label>
                                        <input name="ip_server" type="text" class="form-control"
                                            placeholder="eg: 192.xxx.xxx" value="{{ $package->ip_server ?? '' }}"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Status migrasi</label>
                                        <select name="status_migrasi" class="form-select">
                                            <option value="">Tidak Ada</option>
                                            <option
                                                {{ $package && $package->status_migrasi == 'onprogress' ? 'selected' : '' }}
                                                value="onprogress">Onprogress</option>
                                            <option {{ $package && $package->status_migrasi == 'done' ? 'selected' : '' }}
                                                value="done">Done</option>
                                            <option
                                                {{ $package && $package->status_migrasi == 'blocked' ? 'selected' : '' }}
                                                value="blocked">Blocked</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Status upload</label>
                                        <select name="status_upload" class="form-select" placeholder="status upload">
                                            <option value="">Tidak Ada</option>
                                            <option
                                                {{ $package && $package->status_upload == 'onprogress' ? 'selected' : '' }}
                                                value="onprogress">Onprogress</option>
                                            <option
                                                {{ $package && $package->status_upload == 'done-upload' ? 'selected' : '' }}
                                                value="done-upload">Sudah Upload</option>
                                            <option
                                                {{ $package && $package->status_upload == 'job-disable' ? 'selected' : '' }}
                                                value="job-disable">Job disable</option>
                                            <option
                                                {{ $package && $package->status_upload == 'done-deploy' ? 'selected' : '' }}
                                                value="done-deploy">Sudah Deploy</option>
                                            <option
                                                {{ $package && $package->status_upload == 'rollback' ? 'selected' : '' }}
                                                value="rollback">Rollback</option>
                                            <option
                                                {{ $package && $package->status_upload == 'blocked' ? 'selected' : '' }}
                                                value="blocked">Blocked</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Status running</label>
                                        <select name="status_running" class="form-select" placeholder="status running">
                                            <option value="">Tidak Ada</option>
                                            <option
                                                {{ $package && $package->status_running == 'running' ? 'selected' : '' }}
                                                value="running">Running</option>
                                            <option
                                                {{ $package && $package->status_running == 'pending' ? 'selected' : '' }}
                                                value="pending">Pending</option>
                                            <option
                                                {{ $package && $package->status_running == 'fail' ? 'selected' : '' }}
                                                value="fail">Gagal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Jumlah job SSIS</label>
                                        <input name="jumlah_job_ssis" type="number" class="form-control" placeholder="0"
                                            value="{{ $package->jumlah_job_ssis ?? '' }}" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">0000_staging ?</label>
                                        <select name="staging" class="form-select" placeholder="staging">
                                            <option {{ $package && $package->staging == 'no' ? 'selected' : '' }}
                                                value="no">Tidak Ada</option>
                                            <option {{ $package && $package->staging == 'yes' ? 'selected' : '' }}
                                                value="yes">Ada</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Total connect 40.160</label>
                                        <input name="total_connect" type="number" class="form-control" placeholder="0"
                                            value="{{ $package->total_connect ?? '' }}" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" placeholder="tulis keterangan"
                                            row="3">{{ $package->keterangan ?? '' }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group d-flex justify-content-between w-100">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        @if ($package)
                                            <a href="/package/delete/{{ $package->id }}" class="btn btn-danger">Hapus</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
