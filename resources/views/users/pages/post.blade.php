@extends('welcome')

@section('title')
    {{ $data->title }}
@endsection

@section('content')
    <section id="news" style="background:#000;">
        <div class="row">
            <div class="col-md-12  wow bounce">
                <div class="section-heading text-center text-uppercase  wow bounceInUp">
                    <h2 style="padding-top: 50px;">{{ $data->title }}</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="imageService" style="background-image: url({{asset('/storage/news/'.$data->image)}});"></div>
            <div class="row" style="padding: 30px 40px; color: #fff;">
                {!!$data->description . '.'!!}
            </div>
        </div>
    </section>
@endsection