@extends('layouts.main')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form {{ $title }}</div>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/categories/' . $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email2">Category Name <span class="text-danger">*</span></label>
                                <input type="text" name="categoryName"
                                    class="form-control @error('categoryName') is-invalid @enderror" id="email2"
                                    placeholder="Masukan category" value="{{ $category->categoryName }}">
                                @error('categoryName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/admin/categories" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
