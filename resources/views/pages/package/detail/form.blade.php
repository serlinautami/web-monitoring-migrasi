@extends('layouts.container')

@section('title') Form Project @stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item"><span>Package</span></li>
                <li class="breadcrumb-item active"><span>Form Project</span></li>
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
                        <h5><strong>Form Project</strong></h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Project Name</label>
                                        <input type="text" name="project_name" placeholder="project name"
                                            class="form-control" />
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
