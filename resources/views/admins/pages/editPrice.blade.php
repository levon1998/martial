@extends('admins.layout.app')

@section('title')
    Edit Price
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
                            <form action="{{url(env('url').'edit-price/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="price" placeholder="Add price required" value="{{$data->price}}" type="number" required/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="service_id">
                                        @if ($services)
                                            <option value="">Select secvice</option>
                                            @foreach($services as $service)
                                                <option value="{{$service->id}}" {{ ($data->service_id == $service->id) ? 'selected' : '' }}>{{$service->title}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="text">{!! $data->text !!}</textarea>
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
        CKEDITOR.replace( 'text' );
    </script>
@endsection