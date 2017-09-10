@extends('admins.layout.app')

@section('title')
    Գներ
@endsection

@section('content')
    @if(count($prices) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Գներ
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Գին</th>
                                    <th>Ծառայություն</th>
                                    <th>Գործողություն</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prices as $text)
                                    <tr>
                                        <td>{{$text->id}}</td>
                                        <td>{{$text->price}}</td>
                                        <td>{{$text->service->title}}</td>
                                        <td>
                                            <a href="{{url(env('url').'edit-price/'. $text->id)}}" data-placement="top" data-toggle="tooltip" title="Edit" style="display: inline-block;"><button class="btn btn-primary btn-xs editBtn" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></a>
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
                    <h4 class="modal-title custom_align" id="Heading">Ջնջել այս գինը</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Դուք իսկապես ցանկանում եք ջնջել այս գինը</div>

                </div>
                <div class="modal-footer ">
                    <a href="" class="btn btn-success approveDelete"><span class="glyphicon glyphicon-ok-sign"></span> Այո</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ոչ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script src="/js/admin/price.js"></script>
@endsection