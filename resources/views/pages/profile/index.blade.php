@extends('layouts.container')
@section('title')
    Profile - Web Manajemen Migrasi BRI
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                <li class="breadcrumb-item active"><span>Profile</span></li>
            </ol>
        </nav>
    </div>
@stop


@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="/profile">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header">
                            <span><strong>Profile</strong></span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Nama</label>
                                        <input name="name" required placeholder="Nama Lengkap" type="text"
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

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Role</label>
                                        <select disabled name="role" type="text" class="form-select">
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
                                        <select disabled name="status" type="text" class="form-select">
                                            <option {{ $user && $user->status == 'nonactive' ? 'selected' : '' }}
                                                value="nonactive">Tidak Aktif</option>
                                            <option {{ $user && $user->status == 'active' ? 'selected' : '' }}
                                                value="active">Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <span><strong>Ubah Password</strong></span>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label class="form-label">Password lama</label>
                                <input type="password" name="old_password" class="form-control" placeholder="********" />
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password baru</label>
                                <input type="password" name="password" class="form-control" placeholder="********" />
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Konfirmasi Password baru</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="********" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
