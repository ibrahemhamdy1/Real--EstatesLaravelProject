@if(count($buAll)>0)

	@foreach($buAll as $b)
		<div class="col-md-3 col-sm-6 text-center pull-right">
            <span class="thumbnail">
                <img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" alt="...">
                <h4>{{$b->bu_name}}</h4>
                
                <p>{{str_limit($b->bu_small_dis,10)}} </p>
                <hr class="line">
                <div class="row ">
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
