@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">List categories</h4>
                    <a class="btn btn-success btn-sm btn-round ml-auto" href="{{ url('admin/categories/create') }}">
                        <i class="fas fa-plus"></i>
                        Add category
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Dibuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $e => $ctg)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td>{{ $ctg->categoryName }}</td>
                                    <td>{{ $ctg->created_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <p><a class="btn btn-success btn-xs"
                                                href="{{ url('admin/categories/' . $ctg->id . '/edit') }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-delete-category btn-xs"
                                                data-id="{{ $ctg->id }}"
                                                data-url="{{ url('admin/categories/' . $ctg->id) }}">
                                                <i class="fas fa-trash-alt"></i></button>
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
