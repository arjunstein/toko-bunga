@extends('layouts.main')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Edit User</div>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/users/' . $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-5 col-lg-6">
                            <div class="form-group">
                                <label for="email2">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="email2"
                                    placeholder="Masukan Nama" value="{{ $user->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email2"
                                    placeholder="Masukan Email" value="{{ $user->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Whatsapp <span class="text-danger">*</span></label>
                                <input type="text" name="whatsapp"
                                    class="form-control @error('whatsapp') is-invalid @enderror" id="email2"
                                    placeholder="Masukan Whatsapp" value="{{ $user->whatsapp }}">
                                @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="form-group">
                                <label for="comment">Alamat <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="comment" rows="3">{{ $user->alamat }}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Role <small class="text-warning"><i>tidak dapat
                                            diubah</i></small></label>
                                <select type="text" name="privilege"
                                    class="form-control @error('privilege') is-invalid @enderror" id="email2"
                                    placeholder="Enter Email" readonly>
                                    <option value="{{ $user->privilege }}">{{ $user->privilege }}</option>
                                </select>
                                @error('privilege')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email2">Password <small class="text-danger"><i>(Hanya untuk reset
                                            password)</i></small></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="email2" placeholder="Reset password" disabled>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="/admin/users" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
