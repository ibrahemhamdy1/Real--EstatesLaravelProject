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
            	<ol class="breadcrumb">
                 <li> <a href="{{url('/')}}">  الرئيسية </a>  </li> 

				  @if(isset($array)&&!empty($array))

				  		@foreach($array as $key=> $value)
				  			<li> <a href="{{url('/search?'.$key.'='.$value)}}"> {{searchnameFiled()[$key]}} ->
				  			@if($key =='bu_type')
				  				{{bu_type()[$value]}}
				  			@elseif($key =='bu_rent')
				  				{{bu_rent()[$value]}}
				  			@elseif($key =='bu_palce')
				  				{{bu_palce()[$value]}}
				  			@else
				  				{{$value}} 	

				  			@endif
				  		</a></il>
				  		@endforeach
				  @endif
				  
				</ol>
			        @include('website.bu.shearfile')
			        
            </div>

			        	
		</div>
		<div class="col-md-3">


		<div>

				<div class="profile-sidebar text-center" style="background-color: #fff;margin-bottom: 10px;padding: 10px;">
		 					<h1>بحث  متقدم</h1>
						<div class="profile-usermenu">
							{!!Form::open(['url'=>'search','method'=>'get'])!!}
								<ul class="nav" style="padding-right:0">
									<li class="active">
									<li>
										{!!Form::text("bu_price_from",null,['class'=>'form-control','placeholder'=>'سعر العقار  من  ','style'=>'margin:5px'])!!}
									</li>
									<li>
										{!!Form::text("bu_price_to",null,['class'=>'form-control','placeholder'=>'س سعر العقار  الى','style'=>'margin:5px'])!!}
									</li>
									
									<li> 
               						 {!!Form::select("bu_palce",bu_palce(),null,['class'=>'form-control select2','style'=>'margin:5px'])!!}
									</li>
									<li>
										{!!Form::select("rooms",roomnumber(),null,['class'=>'form-control','placeholder'=>'عدد الغرف','style'=>'margin:5px '])!!}
									</li>
									<li>
										{!!Form::select("bu_type",bu_type(),null,['class'=>'form-control','placeholder'=>'نوع العقار','style'=>'margin:5px'])!!}

									</li>

									<li>
										{!!Form::select("bu_rent",bu_rent(),null,['class'=>'form-control','placeholder'=>'نوع العملية','style'=>'margin:5px'])!!}

									</li>
									<li>
										{!!Form::text("bu_square",null,['class'=>'form-control','placeholder'=>'مساحة','style'=>'margin:5px'])!!}

									</li>
									
									
									<li> 
										{!!Form::submit("ابحث",['class','banner-btn'])!!}

									</li>

								</ul>
							{!!Form::close()!!}
						</div>
						<!-- END MENU -->
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="profile-sidebar text-center" style=" background-color: #fff;">
	 					<h1>اقسام الموقع</h1>
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
		@if(!isset($search))
			<div class="text-center">
			 {{$buAll->appends(Request::except('page'))->render()}}
			</div>	
		@endif	        
	</div>
</div>

<br>
<br>



</div>


       

@endsection

@section('footer')

@endsection

 