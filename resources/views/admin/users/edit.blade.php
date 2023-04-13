@extends('layouts.main')

@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
<div id="kt_content_container" class="container-fluid">
								<!--begin::Contacts App- Edit Contact-->
								<div class="row g-7 justify-content-center">
									<!--begin::Content-->
									<div class="col-xl-8">
										<!--begin::Contacts-->
										<div class="card card-flush h-lg-100" id="kt_contacts_main">
											<!--begin::Card header-->
											<div class="card-header pt-7" id="kt_chat_contacts_header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>{{ $title }}</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<!--begin::Form-->
												<form method="POST" action="{{ url('admin/users/'.$user->id) }}">
													@csrf
													{{ method_field('PUT') }}													
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mt-3">
															<span>Name</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Edit nama"></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" />
														<!--end::Input-->
														@error('name')
                                    					<span class="invalid-feedback" role="alert">
                                       					<strong>{{ $message }}</strong>
                                    					</span>
                               							 @enderror
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mt-3">
															<span>Email</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Edit email."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" />
														<!--end::Input-->
														@error('email')
                                    					<span class="invalid-feedback" role="alert">
                                       					<strong>{{ $message }}</strong>
                                    					</span>
                               							@enderror
													</div>
													<!--end::Input group-->
													<!--begin::Row-->
													<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Role</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Role tidak bisa diganti"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="privilege" value="{{ $user->privilege }}" readonly />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold form-label mt-3">
																	<span>Whatsapp</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Edit nomor whatsapp."></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $user->whatsapp }}" />
																<!--end::Input-->
																@error('whatsapp')
                                    							<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
																</span>
																@enderror
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mt-3">
															<span>Alamat</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Edit alamat disini."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<textarea class="form-control form-control-solid @error('alamat') is-invalid @enderror" name="alamat">{{ $user->alamat }}</textarea>
														<!--end::Input-->
														@error('alamat')
                                    						<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
													<!--end::Input group-->
													<!--begin::Separator-->
													<div class="separator mb-6"></div>
													<!--end::Separator-->
													<!--begin::Action buttons-->
													<div class="d-flex justify-content-end">
														<!--begin::Button-->
														<button type="submit" class="btn btn-primary">
															Save
														</button>
														<!--end::Button-->
													</div>
													<!--end::Action buttons-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Contacts-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Contacts App- Edit Contact-->
							</div>
</div>
    
@endsection