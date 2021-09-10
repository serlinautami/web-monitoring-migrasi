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
                </div>
            </div>
        </div>
    </div>
@stop
