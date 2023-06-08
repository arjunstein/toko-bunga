@extends('layouts.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <iframe
                            src="http://192.168.189.41:3000/d-solo/LyX-A_nnk/mikrotik-monitoring?orgId=1&refresh=1s&panelId=1239"
                            width="100%" height="500" frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
