@extends('admins.layout.app')

@section('title')
    Edit About Text
@endsection

@section('content')
    <script src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    About text
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url(env('url').'about-texts')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="title" placeholder="Text here" value="{{ $vals->title }}" required/>
                                </div>
                                <div class="form-group">
                                    <textarea name="text">{{ $vals->text }}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'text' );
                                    </script>
                                </div>
                                <input type="hidden" name="id" value="{{ $vals->id }}" />
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

