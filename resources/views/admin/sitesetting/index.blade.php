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
تعديل  اعدادات الموقع  
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li class="active"><a href="{{url('/adminpanel/sitesetting')}}">تعديل  اعدادات الموقع  </a></li>
      </ol>
</section>


<!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <div class="box-body ">

                        <div class="panel-body ">
                            <table class="table table-bordered table-striped table-hover table-responsive text-center row" >
                                <thead>
                                    <tr >
                                    <th>id</th>
                                    <th>slug</th>
                                    <th>namesetting</th>
                                    <th>value</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siteSetting as $Setting)
                                        <tr>
                                        <td>{{$Setting->id}}</td>
                                        <td>{{$Setting->slug}}</td>
                                        <td>{{$Setting->namesetting}}</td>
                                        <td>{{ $Setting->value }}</td>
                                        <td>{{ $Setting->created_at }}</td>
                                        <td>{{ $Setting->updated_at }}</td>

                                        <td>
                                        
                                        
                                        </td>
                                        <td>
                                        <a href="{{ url('/adminpanel/sitesetting/'.$Setting->id.'/edit')}}"><span class="glyphicon glyphicon-edit"></span></a>
                                        
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                       

                    </div>
                </div>
            </div>
        </div>    
    </section>
        
@endsection









