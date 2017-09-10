@extends('admins.layout.app')

@section('title')
    Ավելացնել  Տիրույթ
@endsection

@section('content')
    <br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ավելացնել  Տիրույթ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url(env('url').'add-folder')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Տիրույթի անվանումը" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description" placeholder="Նկարագրություն" required/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Ավելացնել  Տիրույթ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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