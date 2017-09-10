@extends('admins.layout.app')

@section('title')
    Նկարներ
@endsection

@section('content')
    <div class="row">
        @if ($folders)
            @foreach($folders as $folder)
                <a href="{{url(env('url').'all-images/'.$folder->id)}}">
                    <div class="col-lg-2 folder">
                        <img src="{{asset('/img/folder.png')}}" width="100%" height="80%"/>
                        <p class="folder_name">{{$folder->name}}</p>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
@endsection