@extends('layouts.container')

@section('title')
    {{ $user->name }} - Web Manajemen Migrasi BRI
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/user">User</a></li>
                <li class="breadcrumb-item active"><span>{{ $user->name }}</span></li>
            </ol>
        </nav>
    </div>
@stop

@section('content')
    <div id="detail-user" class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5><strong>Detail User</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="container p-0 border border-1">
                            <div class="row g-0">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Nama Lengkap</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->name }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Nomor Telepon</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->phone }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Tanggal Lahir</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->dob }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Email</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->email }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Role</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->role }}</p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                                    <p class="fw-bold m-0">Status</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                                    <p class="m-0">{{ $user->status }}</p>
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()->role == 'super-admin')
                            <div class="form-group mt-3 text-end">
                                <a href="/user/edit/{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <button data-user-id="{{ $user->id }}" type="button" class="btn btn-danger btn-sm js-btn-delete">Hapus</button>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h5><strong>Aktifitas</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <th>Timestap</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($histories && count($histories) > 0)
                                        @foreach ($histories as $history)
                                            <tr>
                                                <td>{{ $history->description }}</td>
                                                <td>{{ $history->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10" class="text-center">Tidak ada aktifitas</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end">
                                {!! $histories->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
