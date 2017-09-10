@extends('admins.layout.app')

@section('title')
    Կոնտակտներ
@endsection

@section('content')
    <br>
    @if(count($data) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Նորություներ
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Անուն</th>
                                    <th>E mail</th>
                                    <th>Հեռախոս</th>
                                    <th>Նամակ</th>
                                    <th>Կարգավիճակ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $text)
                                    <tr>
                                        <td>{{$text->name}}</td>
                                        <td>{{$text->email}}</td>
                                        <td>{{$text->number}}</td>
                                        <td>{{$text->messege}}</td>
                                        <td>{!! ($text->call == 0) ? '<i class="fa fa-phone faa-wrench animated changeStatus" style="font-size: 26px; color:red;" data-id="'.$text->id.'" data-status="call" aria-hidden="true"></i>' : '<i class="fa fa-check-circle-o changeStatus" data-id="'.$text->id.'" data-status="notcall" style="font-size: 26px; color:green;" aria-hidden="true"></i>' !!}</td>
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
        <script>
            $(document).ready(function(){
               $('.changeStatus').on('click', function(){
                    var id = $(this).data('id');
                    var status = $(this).data('status');
                    $.ajax({
                        url: '/adminchik/contact-user',
                        method: 'post',
                        data: {id: id, status: status},
                        success: function(data){
                            if (data == 'call') {
                                $('.changeStatus').removeClass('fa-phone').removeClass('faa-wrench').removeClass('animated').addClass('fa-check-circle-o').css('color', 'green').data('status', 'notcall');
                            } else {
                                $('.changeStatus').removeClass('fa-check-circle-o').addClass('fa-phone').addClass('faa-wrench').addClass('animated').css('color', 'red').data('status', 'call');
                            }
                        }
                    })
               });
            });
        </script>
    @endif
@endsection