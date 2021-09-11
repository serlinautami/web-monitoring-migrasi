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
    <div id="project-form" data-package-id={{ $package->id }}></div>
@stop


@section('additional-script')
    <script defer src="/js/project-form.js"></script>
@stop
