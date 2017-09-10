<section id="news">
    <div class="section-heading news-heading text-center text-uppercase wow swing">
        <h2><span>Նորություներ</span></h2>
    </div>
    <div class="container">
        <div class="row no-gutter">
            <div class="col-md-11 col-md-offset-1">

                <div class="latest-news">

                    <h3>Latest News</h3>

                    @foreach($news as $new)
                        <a href="{{url('/news/'.$new->id)}}">
                            <div class="news-content">
                                <img src="{{asset('/storage/news/'.$new->image)}}" class="news-date">
                                <div class="news-text">
                                    <h4>{{$new->title}}</h4>

                                    <p>{{$new->short_description}}</p>
                                    <i class="fa fa-eye"></i> <span></span>{{$new->view}}
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>