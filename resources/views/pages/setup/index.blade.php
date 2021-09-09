@extends('layouts.authcontainer')
@section('title')
    Login
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <form method="POST" action="/setup" class="card-body">
                            @csrf
                            <img src="assets/brand/logo.png" width="140" alt="Bank BRI" />
                            <p class="text-medium-emphasis">Setup Managemen Migrasi</p>
                            @if ($errors->any())
                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                            @else
                                <div class="alert alert-info">Selamat datang di Managemen Migrasi, Setup awal hanya satu kali
                                    untuk
                                    menentukan Super Admin</div>
                            @endif
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="icons/sprites/free.svg#cil-user"></use>
                                    </svg></span>
                                <input name="email" class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="icons/sprites/free.svg#cil-lock-locked"></use>
                                    </svg></span>
                                <input name="password" class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="input-group mb-4"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="icons/sprites/free.svg#cil-lock-locked"></use>
                                    </svg></span>
                                <input name="password_confirmation" class="form-control" type="password"
                                    placeholder="Konfirmasi Password">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block w-100 px-4" type="submit">Mulai</button>
                                </div>
                                {{-- <div class="col-6 text-end">
                                    <a class="btn btn-link px-0" type="submit">Forgot password?</button>
                                </div> --}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
