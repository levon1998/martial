<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12  wow bounce">
                <div class="section-heading text-center text-uppercase  wow bounceInUp">
                    <h2>OUR <span>SERVICES</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-sm-6 col-md-3  wow bounceIn">
                    <div class="single-item text-center">
                        <h3 class="text-uppercase serviceTitle">{{ $service->title }}</h3>
                        <p>{{ $service->text }}</p>
                        <a href="{{url('/service/'.$service->id)}}" class="btn btn-red text-uppercase">more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>