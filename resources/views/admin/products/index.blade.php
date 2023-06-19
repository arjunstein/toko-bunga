@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">List products</h4>
                    <a class="btn btn-primary btn-md btn-round ml-auto" href="{{ url('admin/products/create') }}">
                        <i class="fa fa-plus"> Add product</i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Gambar</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Harga</th>
                                <th>Dibuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $e => $prod)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td><img src="{{ asset('storage/products/' . $prod->gambar) }}" alt="..."
                                            height="40px"></td>
                                    <td>{{ $prod->namaProduk }}</td>
                                    <td>{{ $prod->category->categoryName }}</td>
                                    <td>Rp. {{ number_format($prod->harga) }}</td>
                                    <td>{{ $prod->created_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <p><a class="btn btn-success btn-xs"
                                                href="{{ url('admin/products/' . $prod->id . '/edit') }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-delete-product btn-xs"
                                                data-id="{{ $prod->id }}"
                                                data-url="{{ url('admin/products/' . $prod->id) }}"><i
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
