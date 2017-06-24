@extends('admins.layout.app')
@section('title')
    Add News
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
                    Add News
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url(env('url').'news')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="title" placeholder="Add title required" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="Short description" placeholder="Add short description required" value="" required/>
                                </div>
                                <div class="form-group">
                                    <textarea name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-default" >
                                                Upload File&hellip; <input type="file" name="image" onchange="loadFile(event)" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <img id="output" style="width: 300px; height: 150px;"/>
                                    </div>

                                </div>
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
    <script>
        CKEDITOR.replace( 'description' );
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endsection