@extends('layouts.app')
@section('title')
كل العقارات 
@endsection
@section('header')
{!! Html::style('cus/buall.css')!!}
@endsection
@section('content')
 

<div>

<div class="container" style="margin-top: 20px">
    <div class="row profile">
    	<div class="col-md-9">
            <div class="profile-content">
			        @include('website.bu.shearfile')
			        <div class="text-center">
			        	{{$buAll->appends(Request::except('page'))->render()}}

			        </div>
			        	
            </div>
		</div>
		<div class="col-md-3">
			<div class="profile-sidebar text-center" style=" background-color: #fff;">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->

				<div class="profile-usermenu">
					<ul class="nav" style="padding-right:0">
						<li class="active">
							<a href="{{ url('/ShowAllBulding')}}">
							<i class="glyphicon glyphicon-home"></i>
							كل العقارات</a>
						</li>
						<li>
						<li class="active">
							<a href="{{ url('/ForBuy')}}">
							<i class="glyphicon glyphicon-home"></i>
							للبيع</a>
						</li>
						<li>
							<a href="{{ url('/ForRent')}}">
							<i class="glyphicon glyphicon-user"></i>
							للايجار</a>
						</li>
						


							<li>
							<a href="{{ url('/type/0/')}}">
							<i class="glyphicon glyphicon-user"></i>
							الشقق</a>
						</li>

						<li>
							<a href="{{ url('/type/1/')}}">
							<i class="glyphicon glyphicon-user"></i>
							فيلا</a>
						</li>

						<li>
							<a href="{{ url('/type/2/')}}">
							<i class="glyphicon glyphicon-user"></i>
							شاليهات</a>
						</li>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		
	</div>
</div>

<br>
<br>



</div>


       

@endsection
