@if(count($buAll)>0)

	@foreach($buAll as $b)
		<div class="col-md-3 col-sm-6 text-center pull-right">
            <span class="thumbnail">
                <img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" alt="...">
                <div> 
                    <h1>{{$b->bu_name}}</h1>
                                    
                    <p>الوصف :{{str_limit($b->bu_small_dis,10)}} </p>
                    
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
                     <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" >  <button class="btn btn-info right" > BUY ITEM</button></a>
                    </div>
                    
                </div>
            </span>
        </div>
    @endforeach   

    @else
    	<div class="alert alert-danger"> لايوجد اى عقارات  </div>
@endif
