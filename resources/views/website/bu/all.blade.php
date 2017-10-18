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
				@include('website.bu.pages')

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

 