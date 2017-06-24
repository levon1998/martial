@extends('admins.layout.app')

@section('Home text')

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
                    Add home text here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{url(env('url').'home-texts')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="text" placeholder="Text here" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="sub_text" placeholder="Sub text here" required/>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="active" value="1"> Active
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Add text</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($texts) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All texts
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Text</th>
                                    <th>Sub text</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($texts as $text)
                                        <tr>
                                            <td>{{$text->id}}</td>
                                            <td>{{$text->text}}</td>
                                            <td>{{$text->sub_text}}</td>
                                            <td>{{$text->active}}</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit" style="display: inline-block;"><button class="btn btn-primary btn-xs editBtn" data-title="Edit" data-toggle="modal" data-target="#edit" data-id="{{$text->id}}" data-text="{{$text->text}}" data-sub_text="{{$text->sub_text}}" data-active="{{$text->active}}"><span class="glyphicon glyphicon-pencil"></span></button></p>
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


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <form action="{{url(env('url').'home-texts-edit')}}" method="post">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" id="updateText" name="text" placeholder="Text here" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="updateSubText" name="sub_text" placeholder="Sub text here" required>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="UpdateActive" name="active" value="1"> Active
                            </label>
                        </div>
                    </div>
                    <input type="hidden" id="updateId" name="id" value=""/>
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
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
    <script src="/js/admin/home.js"></script>
@endsection
