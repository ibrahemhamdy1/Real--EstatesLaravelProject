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
            	<ol class="breadcrumb" style="background-color: #fff">
	                 <li> <a href="{{url('/')}}">  الرئيسية </a>  </li> 
					 <li> <a href="{{url('/ShowAllBulding')}}">كل  العقارات </a></li>
					 <li> <a href="{{url('/singleBuilding/'.$buInfo->id)}}">{{$buInfo->bu_name}}</a></li>
				</ol>
			       
            </div>
			<div class="profile-content breadcrumb" style="background-color: #fff">
			      	<h1>
			      		الاسم   	 :{{$buInfo->bu_name}}
			      	</h1>
			      	<a href="{{url('/search?bu_square='.$buInfo->bu_square)}}" class="btn btn-default"> 
			      		المساحة   	:{{$buInfo->bu_square}}
			      	</a> 
			      	<a href="{{url('/search?bu_palce='.$buInfo->bu_palce)}}" class="btn btn-default"> 
			      		المنطقة   	:{{bu_palce()[$buInfo->bu_palce]}}
			      	</a>
			      	<a href="{{url('/search?rooms='.$buInfo->rooms)}}" class="btn btn-default"> 
			      		عدد الغرف 	:{{$buInfo->rooms}}
			      	</a>
			      	<a href="{{url('/search?bu_type='.$buInfo->bu_type)}}" class="btn btn-default"> 
			      		نوع العملية  :{{bu_type()[$buInfo->bu_type]}}
			      	</a>
			      	<a href="{{url('/search?bu_rent='.$buInfo->bu_rent)}}" class="btn btn-default"> 
			      		نوع العقار   :{{bu_rent()[$buInfo->bu_rent]}}
			      	</a>   
			      	<p>{!!nl2br($buInfo->bu_large_dis) !!}</p>
			      	<!-- google  maps  API -->
			      	<div id="googleMap" style="width:100%;height:400px;"></div>

			</div>  

			      		@include('website.bu.shearfile',['buAll'=>$same_rent])
		</div>
		@include('website.bu.pages')
		  
	</div>
</div>

<br>



</div>


       

@endsection

@section('footer')
<script>
	function myMap() {
	var mapProp= {
	    center:new google.maps.LatLng({{$buInfo->bu_longitude}},{{$buInfo->bu_latitude}}),
	    zoom:5,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	  var myLatLng = {lat: {{$buInfo->bu_longitude}}, lng: {{$buInfo->bu_latitude}}};

	var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
	}
</script>

     {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyD-x6qHs4hLDXn_Q4Mz1GC9yYsM_yfiJdI&callback=myMap') !!}

@endsection

 