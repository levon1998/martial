@extends('admins.layout.app')

@section('title')
    Նկարներ
@endsection

@section('content')
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/bootstrap.min.css"/>

        <div class="row">
            <div class="col-md-12">
                <h1>Նկարները</h1>
                <div class="drag">
                    @if($images)
                        <?php $i = 0 ?>
                        @foreach($images as $image)
                            <div style="display: inline-block; width: 200px; height: 200px; margin-left: 5px;">
                                <?php $i++ ?>
                                <span class="glyphicon glyphicon-remove-circle remove_image" style="cursor: pointer; float:right;" data-id="{{$image->id}}"></span>
                                <img rel="{{$i}}" data-id="{{$image->id}}" src="{{asset('/storage/images/'.$image->image )}}" class="img-thumbnail">
                            </div>
                        @endforeach
                    @endif
                </div>
                <p id="output"></p>
            </div>
        </div>
        <input value="{{$id}}" type="hidden" id="folder_id"/>


    <script>
        $('.remove_image').on('click', function () {
            var id = $(this).data('id');
            $(this).parent().remove();
            $.ajax({
                'url': '/adminchik/delete-image',
                'method': 'post',
                'data': {id: id},
                'success': function (data) {
                    var notification = alertify.notify('Նկարը հաջողությամբ ջնջված է', 'success', function(){  console.log('dismissed'); });
                }
            });
        });
    </script>
@endsection