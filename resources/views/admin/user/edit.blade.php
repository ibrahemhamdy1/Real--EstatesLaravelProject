@extends('admin.layouts.layout')
@section('title')
تعديل عضو
{{$user->name}}
@endsection


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1 style="margin: 30px;">
تعديل عضو
{{$user->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسة </a></li>
        <li ><a href="{{url('/adminpanel/users')}}">التحكم فى الاعضاء</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/'.$user->id.'edit')}}">تعديل العضو

        
        
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
                        {!!Form::model($user,array('method'=>'PATCH','action'=>['UsersController@update',$user->id]))!!}
                            @include('admin.user.form')
                            <div class="clearfix">
                        </div>
                            <div class="col-md-2 ">
                                <button type="submit" class="btn btn-primary ">
                                        تنفيذ 
                                </button>
                            </div>
                            <div class="clearfix">
                        </div>
                        {!! Form::close() !!}

                        
                    </form>
                </div>
            </div>            
        </div>        
    </div>

               
</section>



{{-- Start the pass word  section  --}}

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                            تعديل كلمة  مرور  العضو                
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                        {!!Form::open(['url'=>'/adminpanel/users/changePassword','method'=>'post'])!!}
                           <input type="hidden" value="{{$user->id}}" name="user_id">
                           <div class="text2{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-10 ">
                                <input placeholder="الرقم السرى  " id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2 ">
                                <button type="submit" class="btn btn-primary ">
                                        تغير البسورد 
                                </button>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <br>    
                        
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

