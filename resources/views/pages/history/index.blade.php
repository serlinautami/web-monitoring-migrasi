@extends('layouts.container')

@section('title')
    History - Web Manajemen Migrasi BRI
@stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item active">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <span>History</span>
                </li>
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
                        <h5><strong>History</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Deskripsi</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($histories && count($histories) > 0)
                                        @foreach ($histories as $history)
                                            <tr>
                                                <td>{{ $history->user->name }}</td>
                                                <td>{{ $history->description }}</td>
                                                <td>{{ $history->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">Tidak ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $histories->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
