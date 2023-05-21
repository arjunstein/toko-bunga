@extends('layouts.main')

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
	<div id="kt_content_container" class="container-xxl">
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
			<div class="row g-7 justify-content-center">									
				<div class="col-xl-10">
					<form action="{{ url('admin/categories') }}" method="POST">
            	    @csrf
                		<div class="card card-flush py-4">
							<div class="card-body pt-0">
								<div class="mb-10 fv-row">
									<label class="required form-label">Kategori Bunga</label>
									<input type="text" name="categoryName" class="form-control mb-2 @error('categoryName') is-invalid @enderror" placeholder="Nama Kategori" />
									@error('categoryName')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
                                </div>
								<a href="{{ url('admin/categories') }}" class="btn btn-secondary me-5">Cancel</a>
								<button type="submit" class="btn btn-primary">
									<span class="indicator-label">Save</span>
								</button>
							</div>
			          </div>								
            		</form>							            
            		<div class="d-flex justify-content-end">											
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection