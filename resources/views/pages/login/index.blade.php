@extends('layouts.authcontainer')
@section('title')
    Login - Web Manajemen Migrasi BRI
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <form method="POST" action="/login" class="card-body">
                            @csrf
                            <img src="assets/brand/logo.png" width="140" alt="Bank BRI" />
                            <p class="text-medium-emphasis">Manajemen Migrasi</p>
                            @if ($errors->any())
                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                            @endif
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="icons/sprites/free.svg#cil-user"></use>
                                    </svg></span>
                                <input name="email" class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="input-group mb-4"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="icons/sprites/free.svg#cil-lock-locked"></use>
                                    </svg></span>
                                <input name="password" class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
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
