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
                        <div class="container p-0 border border-2">
                            <div class="row g-0">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border-end border-end-2 bg-light">
                                    <p class="font-weight-bold m-0">IP Server</p>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-2">
                                    <p class="font-weight-bold m-0">{{ $package->ip_server }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
