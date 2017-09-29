@extends('admin.layouts.layout')
@section('title')

التحكم  فى  الاعضاء     
@endsection
@section('header')
{!! Html::style('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection




@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1 style="margin: 30px;">
          التحكم فى الاعضاء
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li class="active"><a href="{{url('/adminpanel/users')}}">التحكم فى الاعضاء</a></li>
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
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover text-center">
                <thead>
                <tr >
                  <th>#</th>
                  <th>اسم  المستخدم</th>
                  <th>البريد الاكترونى </th>
                  <th>تاريخ الانشاء</th>
                  <th>الصلاحيات</th>
                  <th>التحكم</th>

                </tr>
                </thead>
                <tbody>
                
                @foreach($user as $userinfo)
                  <tr>
                    <td>{{ $userinfo->id }}</td>
                    <td>{{ $userinfo->name }}</td>
                    <td>{{ $userinfo->email }}</td>
                    <td>{{ $userinfo->create_at}}</td>
                    <td>{{$userinfo->admin ==1 ?'مدير':'عضو'}}</td>
                    <td><a href="{{url('adminpanel/users/'.$userinfo->id.'/edit')}}"> تعديل</a></td>
                    <td><a href="{{url('adminpanel/users/'.$userinfo->id.'/delete')}}">حذف</a></td>

                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr >
                  <th>#</th>
                  <th>اسم  المستخدم</th>
                  <th>البريد الاكترونى </th>
                  <th>تاريخ الانشاء</th>
                  <th>الصلاحيات</th>
                  <th>التحكم</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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

