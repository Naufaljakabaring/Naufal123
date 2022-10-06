@extends('index')

@section('content')
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">album</h1>
            
            <div class="row portfolio-container">
            @foreach($galeri as $glr)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="/image/{{$glr->image}}" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="/image/{{$glr->image}}" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="margin-left:470px;">{{ $galeri->links() }}</div>
        </div>
    </div>
@endsection