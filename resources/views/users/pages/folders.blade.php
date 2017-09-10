@extends('welcome')

@section('title')
    All Images
@endsection

@section('content')
    <section id="news" style="background:#000;">
        <div class="row">
            <ul class="thumbnails">
                @if ($folders)
                    @foreach ($folders as $folder)

                        <li class="col-sm-3" style="list-style: none;">
                            <a href="{{url('/image/'.$folder->id)}}">
                                <div class="fff" style="padding-top: 50px; ">
                                    <div class="thumbnail">
                                        <img src="{{asset('/storage/images/'.$folders[0]['image']->image)}}" alt="">
                                    </div>
                                    <div class="caption" style="background: #fff; border-radius: 5px;">
                                        <h4 style="color: #000; padding:10px">{{$folder->name}}</h4>
                                        <p style="color: #000; padding:10px">{{$folder->description}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>
@endsection