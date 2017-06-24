@extends('admins.layout.app')

@section('title')
    All Subscribes
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>
                All Subscribes
            </h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Subscribes
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Call Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($datas)
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->number}}</td>
                                            <td><p id="MassegeButton" style="background: green; color: #fff; display: inline-block; padding: 5px 5px; border-radius: 10px;" data-title="Delete" data-toggle="modal" data-target="#message" data-message="{{$data->messege}}">Click for read message</p></td>
                                            <td>{{($data->call == 1) ? 'ok' : 'call'}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">:D</h4>
                    </div>
                    <div class="modal-body">
                        <p id="messageText"></p>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <script src="/js/admin/index.js"></script>
@endsection