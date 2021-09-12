@extends('layouts.container')

@section('title')
    @if ($project)
        Edit Project {{ $project->project_name }} - Web Manajemen Migrasi BRI
    @else
        Tambah Project - Web Manajemen Migrasi BRI
    @endif
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/package">Package</a></li>
                <li class="breadcrumb-item"><a href="/package/{{ $package->id }}">{{ $package->ip_server }}</a></li>
                <li class="breadcrumb-item active">
                    <span>{{ $project ? 'Project / Edit / ' . $project->project_name : 'Project / Tambah' }}</span>
                </li>
            </ol>
        </nav>
    </div>
@stop
@section('content')
    <div id="project-form" data-package-id="{{ $package->id }}" data-project-id="{{ $project->id ?? '' }}"></div>
@stop


@section('additional-script')
    <script defer src="/js/project-form.js"></script>
@stop
