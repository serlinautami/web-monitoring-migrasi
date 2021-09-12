@extends('layouts.container')

@section('title') Package List - Web Manajemen Migrasi BRI @stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <span>Package</span>
                </li>
            </ol>
        </nav>
    </div>
@stop


@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5><strong>Package List</strong></h5>
                    </div>
                    <div class="card-body">
                        @if (Auth::user()->role == 'super-admin' || Auth::user()->role == 'admin')
                            <div class="form-group mb-3">
                                <a href="/package/add" class="btn btn-primary">Tambah</a>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="min-width:150px">IP Server</th>
                                        <th style="min-width:150px">Status migrasi</th>
                                        <th style="min-width:150px">Status upload</th>
                                        <th style="min-width:150px">Status running</th>
                                        <th style="min-width:150px">Jumlah job SSIS</th>
                                        <th style="min-width:200px">0000_staging?</th>
                                        <th style="min-width:200px">Total connect 40.160</th>
                                        <th style="min-width:300px">Keterangan</th>
                                        <th style="min-width:150px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($packages && count($packages) > 0)
                                        @foreach ($packages as $package)
                                            <tr>
                                                <td>{{ $package->ip_server }}</td>
                                                <td>{{ $package->status_migrasi }}</td>
                                                <td>{{ $package->status_upload }}</td>
                                                <td>{{ $package->status_running }}</td>
                                                <td>{{ $package->jumlah_job_ssis }}</td>
                                                <td>{{ $package->staging }}</td>
                                                <td>{{ $package->total_connect }}</td>
                                                <td>{{ $package->keterangan }}</td>
                                                <td>
                                                    @if (Auth::user()->role == 'super-admin' || Auth::user()->role == 'admin')
                                                        <a href="/package/edit/{{ $package->id }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                    @endif
                                                    <a href="/package/{{ $package->id }}"
                                                        class="btn btn-primary btn-sm">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $packages->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
