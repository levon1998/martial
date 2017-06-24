@extends('admins.layout.app')

@section('title')
    All Services
@endsection

@section('content')
    @if(count($services) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Services
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $text)
                                    <tr>
                                        <td>{{$text->id}}</td>
                                        <td>{{$text->title}}</td>
                                        <td>{{$text->text}}</td>
                                        <td><img src="{{asset('storage/services/'.$text->image)}}" width="100" height="50"/></td>
                                        <td>
                                            <a href="{{url(env('url').'edit-service/'. $text->id)}}" data-placement="top" data-toggle="tooltip" title="Edit" style="display: inline-block;"><button class="btn btn-primary btn-xs editBtn" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></a>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete" style="display: inline-block;"><button class="btn btn-danger btn-xs deleteBtn" data-title="Delete" data-toggle="modal" data-target="#delete" data-id="{{$text->id}}" ><span class="glyphicon glyphicon-trash"></span></button></p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    @endif

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this Service</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <a href="" class="btn btn-success approveDelete"><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script src="/js/admin/services.js"></script>
@endsection