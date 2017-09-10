<section id="team">
    <div class="container">
        <div class="section-heading text-center text-uppercase wow  wow bounceInRight">
            <h2><span>Թիմ</span></h2>
        </div>
        <div class="row  wow bounceInLeft">

            @foreach($teams as $team)
                <div class="col-sm-6 col-md-3">
                    <div class="single-team">
                        <img src="/storage/teams/{{$team->image}}" alt="">

                        <h3>{{$team->name}}</h3>

                        <p>{{$team->description}}</p>

                        <div class="member-social-icon text-center">
                            @if ($team->fb)
                                <a href="{{$team->fb}}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if ($team->youtube)
                                <a href="{{$team->youtube}}"><i class="fa fa-twitter"></i></a>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>