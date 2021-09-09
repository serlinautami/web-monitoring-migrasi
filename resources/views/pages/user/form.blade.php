@extends('layouts.container')
@section('title')
    Form User
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item"><span>Home</span></li>
                <li class="breadcrumb-item"><span>List user</span></li>
                <li class="breadcrumb-item active"><span>Form User</span></li>
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
                        <h5><strong>Form User</strong></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="@if ($user) /user/edit/{{ $user->id }} @else /user/add @endif">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Nama</label>
                                        <input name="name" required placeholder="eg: Serlina Utami" type="text"
                                            value="{{ $user->name ?? '' }}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input name="phone" placeholder="eg: 08xx-xxxx-xxxx" type="text"
                                            class="form-control" value="{{ $user->phone ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input name="dob" type="date" class="form-control"
                                            value="{{ $user->dob ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" required placeholder="eg: example@mail.com" type="email"
                                            class="form-control" value="{{ $user->email ?? '' }}" />
                                    </div>
                                </div>

                                @if (!$user)
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" required placeholder="********" type="password"
                                                class="form-control" />
                                            <div class="form-text">Password minimal 8 karakter</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <input name="password_confirmation" required placeholder="********"
                                                type="password" class="form-control" />
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Role</label>
                                        <select name="role" required type="text" class="form-select">
                                            <option {{ $user && $user->role == 'contributor' ? 'selected' : '' }}
                                                value="contributor">Kontributor</option>
                                            <option {{ $user && $user->role == 'admin' ? 'selected' : '' }} value="admin">
                                                Admin</option>
                                            <option {{ $user && $user->role == 'super-admin' ? 'selected' : '' }}
                                                value="super-admin">Super Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="form-label">Status</label>
                                        <select name="status" required type="text" class="form-select">
                                            <option {{ $user && $user->status == 'nonactive' ? 'selected' : '' }}
                                                value="nonactive">Tidak Aktif</option>
                                            <option {{ $user && $user->status == 'active' ? 'selected' : '' }}
                                                value="active">Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group3">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @stop
