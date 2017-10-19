@extends('admin.layouts.layout')
@section('title')
    تعديل  العقار

    {{$bu->bu_name}}
@endsection

@section('header')

 {!! Html::style('cus/css/select2.min.css') !!}

@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1 style="margin: 30px;">
            تعديل  العقار
            {{$bu->bu_name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li ><a href="{{url('/adminpanel/bu')}}">التحكم فى الاعضاء</a></li>
        <li class="active"><a href="{{url('/adminpanel/bu/'.$bu->id.'edit')}}">تعديل العضو

        
        
           </a></li>

      </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                            تعديل العضو                
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!!Form::model($bu,array('method'=>'PATCH','files'=>'true','action'=>['BuildingController@update',$bu->id]))!!}
                            @include('admin.bu.form')
                            <div class="clearfix">
                        </div>
                            
                            <div class="clearfix">
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>            
        </div>        
    </div>

               
</section>




{{-- end the pass word  section  --}}

@endsection


 





@section('footer')
{!! Html::script('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}

{!! Html::script('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
 {!! Html::script('cus/js/select2.min.js') !!}

<script>
   $(document).ready(function() {
   $('.select2').select2({

          dir:"rtl"
        });
}); 
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });
</script>
@endsection

