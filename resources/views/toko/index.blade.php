@extends('layouts.main')

@section('content')
    <div class="col-md-12">
        <div class="row">
            @foreach ($products as $prod)
                <div class="col-md-3 col-6">
                    <div class="card card-post card-round">
                        <img class="card-img-top" src="{{ asset('storage/products/' . $prod->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-category text-info">
                                <b>
                                    <h5>Rp. {{ number_format($prod->harga) }}</h5>
                                </b>
                            <h4>{{ $prod->namaProduk }}</h4>
                            </p>
                            <p class="card-text">{{ Str::limit($prod->deskripsi, 10, ' ...') }}</p>
                            <a href="#" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-shopping-cart">
                                    Beli</i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
