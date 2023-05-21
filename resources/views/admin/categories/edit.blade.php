@extends('layouts.main')

@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
	<div id="kt_content_container" class="container-xxl">
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="row g-7 justify-content-center">									
				<div class="col-xl-10">
					<form action="{{ url('admin/categories/'.$category->id) }}" method="POST">
					@csrf
					@method('PUT')
                		<div class="card card-flush py-4">
							<div class="card-body pt-0">
								<div class="mb-10 fv-row">
									<label class="required form-label">Kategori Bunga</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="categoryName" class="form-control mb-2 @error('categoryName') is-invalid @enderror" value="{{ $category->categoryName }}" placeholder="Nama Kategori" />
													<!--end::Input-->
												@error('categoryName')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
                                                </div>
												<!--end::Input group-->
                                                <!--begin::Button-->
											<a href="{{ url('admin/categories') }}" class="btn btn-secondary me-5">Cancel</a>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="submit" class="btn btn-primary">
												<span class="indicator-label">Save Changes</span>
											</button>
											<!--end::Button-->
												</div>
											<!--end::Card header-->
                                        </div>
										<!--end::General options-->
										
            </form>							            
                </div>
            </div>
		</div>
    </div>
</div>
    
@endsection