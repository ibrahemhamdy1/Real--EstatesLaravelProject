@extends('admin.layouts.layout')
@section('title')
اضافة الاعضاء 
@endsection


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1 style="margin: 30px;">
            اضاف عضو 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li ><a href="{{url('/adminpanel/users')}}">التحكم فى الاعضاء</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/create')}}">اضافة عضو  جديد</a></li>

      </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    اضف  عضو  جديد 
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/adminpanel/users') }}">

                        @include('admin.user.form')

                    </form>
                </div>
            </div>            
        </div>        
    </div>
</section>            

@endsection








@section('footer')
{!! Html::script('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}

{!! Html::script('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

<script>
  
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

