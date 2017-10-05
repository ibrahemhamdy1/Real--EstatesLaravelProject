@extends('admin.layouts.layout')
@section('title')
تعديل  اعدادات الموقع
@endsection
@section('header')
{{--  {!! Html::style('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}  --}}
@endsection




@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 style="margin: 30px;">
تعديل {{$Setting->namesetting}} 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li class="active"><a href="{{url('/adminpanel/sitesetting')}}"> تعديل  </a></li>
      </ol>
</section>

<section class="content  ">
<div class="row">
  <div class="col-xs-12">
    <div class="box" style="text-align: center; margin-top: 100px;">
      <div class="box-header">
      {!!Form::model($Setting,array('method'=>'PATCH','action'=>['SiteSettingController@update',$Setting->id]))!!}
                            <div class="clearfix">
                            
                        </div>
                         <h3 class="text-center">{{$Setting->namesetting}}</h3>
                        <div class="col-md-10 col-ms-10  col-xs-12 pull-right text-center" style="margin-top: 5px;">
                         {!!Form::text('value', null, array('class' => 'form-control '));!!}

                        </div>
                            <div class="col-md-2 col-xs-12  pull-left text-center " style="margin-top: 5px;">

                                <button type="submit" class="btn btn-primary ">
                                        تنفيذ 
                                </button>
                            </div>
                            <div class="clearfix">
                        </div>
                        {!! Form::close() !!}
      </div>
    </div>    
  </div>      
</div>
</section>
@endsection


 






