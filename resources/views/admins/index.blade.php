@extends('admins.layout.app')

@section('title')
    Admin panel
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-newspaper-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$news}}</div>
                        <div>Նորություներ</div>
                    </div>
                </div>
            </div>
            <a href="{{url(env('url').'all-news')}}">
                <div class="panel-footer">
                    <span class="pull-left">Դիտել ամբողջը</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-picture-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$images}}</div>
                        <div>Նկարներ</div>
                    </div>
                </div>
            </div>
            <a href="{{url(env('url').'all-folders')}}">
                <div class="panel-footer">
                    <span class="pull-left">Դիտել ամբողջը</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-usd fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$price}}</div>
                        <div>Գներ</div>
                    </div>
                </div>
            </div>
            <a href="{{url(env('url').'all-prices')}}">
                <div class="panel-footer">
                    <span class="pull-left">Դիտել ամբողջը</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-server fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$services}}</div>
                        <div>Ծառայություներ</div>
                    </div>
                </div>
            </div>
            <a href="{{url(env('url').'all-services')}}">
                <div class="panel-footer">
                    <span class="pull-left">Դիտել ամբողջը</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">

</div>
@endsection