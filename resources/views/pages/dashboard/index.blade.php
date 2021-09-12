@extends('layouts.container')

@section('title')
    Dashboard
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item active">
                    <span>Home</span>
                </li>
            </ol>
        </nav>
    </div>
@stop


@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-12">

                <div class="row mb-3">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="bg-primary text-white p-3 me-3">
                                    <svg class="icon icon-xl">
                                        <use xlink:href="/icons/sprites/free.svg#cil-storage"></use>
                                    </svg>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">{{ $packageCount }}</div>
                                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Package</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="bg-primary text-white p-3 me-3">
                                    <svg class="icon icon-xl">
                                        <use xlink:href="/icons/sprites/free.svg#cil-description"></use>
                                    </svg>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">{{ $projectCount }}</div>
                                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Project</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="bg-primary text-white p-3 me-3">
                                    <svg class="icon icon-xl">
                                        <use xlink:href="/icons/sprites/free.svg#cil-list-rich"></use>
                                    </svg>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">{{ $jobCount }}</div>
                                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Jobs</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="bg-primary text-white p-3 me-3">
                                    <svg class="icon icon-xl">
                                        <use xlink:href="/icons/sprites/free.svg#cil-people"></use>
                                    </svg>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">{{ $userCount }}</div>
                                    <div class="text-medium-emphasis text-uppercase fw-semibold small">User</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <span><strong>Aktifitas Terakhir</strong></span>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-sm table-bordered table-hover table-striped table-hovered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Deskripsi</th>
                                                <th>Timestamp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($lastActivities && count($lastActivities) > 0)
                                                @foreach ($lastActivities as $activity)
                                                    <tr>
                                                        <td>{{ $activity->user->name }}</td>
                                                        <td>{{ $activity->description }}</td>
                                                        <td>{{ $activity->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="3" class="text-center">Tidak ada aktifitas</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
