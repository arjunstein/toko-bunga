@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">List user</h4>
                    <a class="btn btn-success btn-sm btn-round ml-auto" href="#">
                        <i class="far fa-file-pdf"></i>
                        Export user
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Whatsapp</th>
                                <th>Tgl Daftar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $e => $usr)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->privilege }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->whatsapp }}</td>
                                    <td>{{ $usr->created_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <p><a class="btn btn-success btn-xs"
                                                href="{{ url('admin/users/' . $usr->id . '/edit') }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-delete btn-xs" data-id="{{ $usr->id }}"
                                                data-url="{{ url('admin/users/' . $usr->id) }}"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
