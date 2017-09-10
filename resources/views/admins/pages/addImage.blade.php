@extends('admins.layout.app')

@section('title')
    Ավելացնել Նկարներ
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
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ավելացնել Նկարներ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{url(env('url').'add-image')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <select class="form-control" name="folder_id">
                                            <option value="">Ընտերել Տիրույթը</option>
                                            @if($folder)
                                                @foreach($folder as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="btn btn-default btn-file">
                                        Ընտրել նկարներ <input name="filesToUpload[]" id="filesToUpload" type="file" multiple="" style="display: none;"/>
                                    </label>
                                </div>
                                <div><ul id="fileList" class="list-group"></ul></div>
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
        var input = document.getElementById('filesToUpload');
        var list = $('#fileList');
        $('#filesToUpload').on('change', function(event){
            $('#fileList').children('li').remove();
            $.each(input.files ,function(key,val){
                list.append("<li class='list-group-item'><img id='img_"+key+"' src='' width='40' height='20'/> " + val.name +"<p class='pull-right delete_img_list' data-id='"+key+"' style='cursor:pointer'>x</p></li>");
                var reader = new FileReader();
                reader.onload = function(){
                    var output = document.getElementById('img_'+key);
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[key]);
            });
        });


    </script>
@endsection