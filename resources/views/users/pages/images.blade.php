@extends('welcome')

@section('title')
    All Images
@endsection

@section('content')
    <link href="/css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="/js/ninja-slider.js" type="text/javascript"></script>
    <script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                var ninjaSldr = document.getElementById("ninja-slider");
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>
    <style>
        body {font: normal 0.9em Arial;margin:0;background:#f5f5f5;}
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
        header {display:block;padding:60px 0 10px;background-color:#191919;text-align:center;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #4d5256;
            text-decoration:none;
            transition: color 0.7s;
        }
        header a.active {
            font-weight:bold;
            width: 24px;
            height: 24px;
            padding: 4px;
            text-align: center;
            display:inline-block;
            border-radius: 50%;
            background: #4d5256;
            color: #191919;
        }
        .gallery img{
            width:179px;
            cursor:pointer;
        }
    </style>

    <section id="news" style="background:#000;">
        <div class="container">
            <div style="display:none;">
                <div id="ninja-slider">
                    <div class="slider-inner">
                        <ul>
                            @if ($images)
                                @foreach ($images as $image)
                                    <li>
                                        <a class="ns-img" href="/storage/images/{{$image->image}}"></a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
            </div>
            @if ($images)
                <?php $i = 0; ?>
                <div style="max-width:1300px;margin:90px auto;">
                    <div class="gallery">
                        @foreach ($images as $image)
                            <img src="{{asset('/storage/images/'.$image->image)}}" onclick="lightbox({{$i}})" height="200" alt="" />
                            <?php $i++ ?>
                        @endforeach
                    </div>
                </div>
            @endif
            {{--<div style="max-width:700px;margin:90px auto;">--}}

                {{--<div class="gallery">--}}
                    {{--<img src="img/abc.jpg" onclick="lightbox(0)" style="width:auto; height:140px;" />--}}
                    {{--<img src="img/a_s.jpg" onclick="lightbox(1)" style="width:auto; height:140px;" /><br />--}}
                    {{--<img src="img/b_s.jpg" onclick="lightbox(2)" />--}}
                    {{--<img src="img/c_s.jpg" onclick="lightbox(3)" />--}}
                    {{--<img src="img/d_s.jpg" onclick="lightbox(4)" />--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </section>
@endsection