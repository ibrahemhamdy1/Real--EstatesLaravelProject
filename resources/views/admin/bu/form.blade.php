    {{ csrf_field() }}
     <!-- bu_name -->

        <div class="{{ $errors->has('bu_name') ? ' has-error' : '' }}">
             <div class="col-md-10">
                {!! Form::text("bu_name",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_name') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> اسم العقار </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_name  -->


     <!-- rooms-->
        <div class="{{ $errors->has('rooms') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("rooms",null,['class'=>'form-control']) !!}

                         @if ($errors->has('rooms'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rooms') }}</strong>
                            </span>
                         @endif
            </div>
            <label class="col-md-2">  عدد الغرف </label>
        </div>
        <div class="clearfix"></div>
        <br>

     <!-- end  rooms  -->
     <!-- bu_price -->
        <div class="{{ $errors->has('bu_price') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_price",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_price') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> سعر العقار </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_price  -->
     <!-- bu_rent -->
        <div class="{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::select("bu_rent",bu_rent(),['class'=>'form-control']) !!}

                         @if ($errors->has('bu_rent'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_rent') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> نوع العملية  </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_rent  -->
     <!-- bu_square -->
        <div class="{{ $errors->has('bu_square') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_square",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_square'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_square') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> المساحة  العقار </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  square  -->
     <!-- bu_type -->
        <div class="{{ $errors->has('bu_type') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::select("bu_type",bu_type(),['class'=>'form-control']) !!}

                         @if ($errors->has('bu_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_type') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> نوع  العقار </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_type  -->
     <!-- bu_status -->
        <div class="{{ $errors->has('bu_status') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::select("bu_status",status(),null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_status') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> الحالة  العقار</label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_status  -->
     <!-- bu_meta -->
        <div class="{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_meta",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_meta') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> الكلمات الدلالية  </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_meta  -->
     <!-- bu_small_dis -->
        <div class="{{ $errors->has('bu_small_dis') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_small_dis",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_small_dis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_small_dis') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2">نص  قصير  للعقار  </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_small_dis  -->
     <!-- bu_large_dis  -->
        <div class="{{ $errors->has('bu_large_dis ') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::textarea("bu_large_dis",null,['class'=>'form-control','rows'=>'4']) !!}

                         @if ($errors->has('bu_large_dis '))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_large_dis') }}</strong>
                            </span>
                         @endif
                         <div class="alert alert-warning">لا يمكن ادخال  اكثر  من  160 حرف على حسب  معيار  جوجول</div>
             </div>
            <label class="col-md-2">نص  مطول  للعقار  </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_large_dis  -->
     <!-- bu_longitude -->
        <div class="{{ $errors->has('bu_longitude') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_longitude",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_longitude'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_longitude') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> خط  الطول </label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_longitude  -->
     <!-- bu_latitude -->
        <div class="{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!! Form::text("bu_latitude",null,['class'=>'form-control']) !!}

                         @if ($errors->has('bu_latitude'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_latitude') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> خط  االعرض</label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_latitude  -->

     <!-- bu_palce -->
        <div class="{{ $errors->has('bu_palce') ? ' has-error' : '' }}">
            
             <div class="col-md-10">
                {!!Form::select("bu_palce",bu_palce(),null,['class'=>'form-control select2']) !!}

                         @if ($errors->has('bu_palce'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bu_palce') }}</strong>
                            </span>
                         @endif
             </div>
            <label class="col-md-2"> مكان العقار</label>
        </div>
        <div class="clearfix"></div>
        <br>
     <!-- end  bu_palce  -->
    <div class="text2">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary ">
اضلفة            </button>
        </div>
    </div>
