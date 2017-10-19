@if(count($buAll)>0)
	@foreach($buAll as $b)
		<div class="col-md-3 col-sm-6 text-center pull-right  " style="max-height: 400px">
            <span class="thumbnail" >

                @if($b->image!="")
                <img  src="{{Request::root().'/'.$b->image}}" alt="..." width="100px" height="100px">
                @else
                    <img  src="{{Request::root().'/website/images/default.png'}}" alt="..." width="100px" height="100px">
                @endif
                                

                <div > 
                    <h3 style="max-height: 4px">{{$b->bu_name}}</h3>
                                    
                    <p style="margin:20px">الوصف :{{str_limit($b->bu_small_dis,10)}} </p>
                    
                </div>
                 

                <hr class="line">
                <div class="row ">
                    <div class="row text-center" style="margin: 4px;"> 
                        <p class="col-md-6">النوع:{{ bu_type()[$b->bu_type]}} </p>
                         <p class="col-md-6">عدد الغرف:{{ $b->rooms}}</p> 

                       
                    </div>
                     <hr class="line">

                    <div class="col-md-6 col-sm-6">
                        <p class="price">{{$b->bu_price}}</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                     <a href="{{url('/singleBuilding/'.$b->id)}}" target="_blank" >  <button class="btn btn-info right" > BUY ITEM</button></a>
                    </div>
                    
                </div>
            </span>
        </div>
    @endforeach   
    @else
    	<div class="alert alert-danger"> لايوجد اى عقارات  </div>
@endif
