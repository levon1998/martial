<section id="price">
    <div class="container">
        <div class="section-heading text-center text-uppercase">
            <h2>OUR <span>price</span></h2>
        </div>
        <div class="row">
            @if ($prices)
                @foreach($prices as $price)
                    <div class="col-sm-3">
                        <div class="single-price text-center wow swing">
                            <div class="price-top">
                                <h3>{{ $price->service->title }}</h3>

                                <h1><sup>&#36;</sup>{{$price->price}}<sub>/month</sub></h1>
                            </div>
                            <div class="price-bottom">
                                {!! $price->text !!}
                                <a href="#contact" class="btn text-uppercase smooth-scroll">SUBSCRIBE NOW</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>