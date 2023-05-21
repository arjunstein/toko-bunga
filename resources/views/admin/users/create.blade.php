@extends('layouts.main')

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
	<div id="kt_content_container" class="container-xxl">
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
			<div class="row g-7 justify-content-center">									
				<div class="col-xl-10">
					<form action="{{ url('admin/users') }}" method="POST">
            	    @csrf
                		<div class="card card-flush py-4">
							<div class="card-body pt-0">
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
									<div class="col">
							            <div class="mb-7 fv-row">
                                            <label class="required form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="John Doe" />
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Email</label>
                                            <input type="email" name="email" class="form-control mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="johndoe@gmail.com" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
									<div class="col">
							            <div class="mb-7 fv-row">
                                            <label class="required form-label">Role</label>
                                                <select class="form-select form-select-solid @error('privilege') is-invalid @enderror" name="privilege" data-control="select2" data-hide-search="true" data-placeholder="Select a layout">
                                                    <option></option>
                                                    <option disabled selected="selected">Pilih Roles</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="pelanggan">Pelanggan</option>
                                                </select>
                                            @error('privilege')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-7 fv-row">
                                            <label class="required form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control form-control-solid mb-3 mb-lg-0 @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
											@error('alamat')
											    <span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Whatsapp</label>
                                            <input type="number" name="whatsapp" class="form-control mb-2 @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp') }}" placeholder="0812131415xx" />
                                            @error('whatsapp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
								<a href="{{ url('admin/users') }}" class="btn btn-secondary me-5">Cancel</a>
								<button type="submit" class="btn btn-primary">
									<span class="indicator-label">Save</span>
								</button>
							</div>
			          </div>								
            		</form>							            
            	</div>
			</div>
		</div>
    </div>
</div>
    
@endsection