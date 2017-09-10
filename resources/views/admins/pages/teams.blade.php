@extends('admins.layout.app')

@section('title')
    Ավելացնել Նոր Անդամ
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
                    Ավելացնել Նոր Անդամ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url(env('url').'teams')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Անուն Ազգանուն" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="description" placeholder="Նկարագրություն" value="" required/>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-default" >
                                                Նկար <input type="file" name="image" onchange="loadFile(event)" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <img id="output" style="width: 234px; height:217px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="fb" placeholder="fabebook հղում" value="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="youtube" placeholder="youtube հղում" value="" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Ավելացնել</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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