@extends('welcome')
@section('title')
    {{ $service->title }}
@endsection
@section('content')
    <section id="service">
        <div class="row">
            <div class="col-md-12  wow bounce">
                <div class="section-heading text-center text-uppercase  wow bounceInUp">
                    <h2 style="padding-top: 50px;">{{ $service->title }}</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="imageService" style="background-image: url({{asset('/storage/services/'.$service->image)}});"></div>
            <div class="row" style="padding: 30px 40px;">
                {!!$service->page_text!!}
            </div>
        </div>
    </section>
@endsection