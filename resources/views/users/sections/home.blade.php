<section id="home">
    <div class="overlay"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!--Indicator-->
        <ol class="carousel-indicators">
            <?php $i = 0 ?>
            @foreach($homeTexts as $text)
                <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{ $i == 0 ? 'active': '' }}"></li>
                <?php $i++ ?>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php $j = 0 ?>
            @foreach($homeTexts as $text)
                <div class="item {{$j == 0 ? 'active': ''}}">
                    <div class="col-md-12 wow bounceInUp">
                        <div class="home-text text-center">
                            <h1>{{$text->text}}</h1>
                            <h3>{{$text->sub_text}}</h3>
                        </div>
                    </div>
                </div>
                <?php $j++ ?>
            @endforeach
        </div>
    </div>
</section>