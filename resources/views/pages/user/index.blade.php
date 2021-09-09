@extends('layouts.container')

@section('title') List User @stop

@section('breadcrumb')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>List user</span></li>
            </ol>
        </nav>
    </div>
@stop


@section('content')
    <div id="list-user" class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5><strong>List User</strong></h5>
                    </div>
                    <div class=" card-body">
                        <div class="form-group mb-3">
                            <a href="/user/add" class="btn btn-primary">Tambah</a>
                        </div>
                        <div>
                            <table id="user-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users)
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td data-email="{{ $user->email }}">{{ $user->email }}</td>
                                                <td data-status="{{ $user->status }}">{{ $user->status }}</td>
                                                <td width="50">
                                                    <button data-user-id="{{ $user->id }}"
                                                        class="btn btn-primary btn-sm btn-detail" type="button"
                                                        data-coreui-toggle="modal"
                                                        data-coreui-target="#modaldetail">Detail</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center">No Data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $users->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modaldetail" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1"
        aria-labelledby="modaldetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaldetailLabel">Detail</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td width="150">Nama</td>
                                <td data-detail-name></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td data-detail-email></td>
                            </tr>
                            <tr>
                                <td>No.HP</td>
                                <td data-detail-phone></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td data-detail-dob></td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td data-detail-role></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td data-detail-status></td>
                            </tr>
                            <tr>
                                <td>Aksi</td>
                                <td>
                                    <div>
                                        <a href="/user/edit/" class="btn btn-sm btn-primary btn-edit">Edit</a>
                                        <button type="button" class="btn btn-sm btn-danger btn-delete">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
@stop
