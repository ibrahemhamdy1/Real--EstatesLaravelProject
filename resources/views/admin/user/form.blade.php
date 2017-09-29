    {{ csrf_field() }}

    <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
         <div class="col-md-12">
        {!! Form::text("name",null,['class'=>'form-control']) !!}

                 @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>
    </div>
    <div class="clearfix">

    </div>
    <br>
    
    <div class="{{ $errors->has('admin') ? ' has-error' : '' }}">
         <div class="col-md-12">
        {!! Form::select("admin",['0'=>'user','1'=>'admin'],null,['class'=>'form-control']) !!}

                 @if ($errors->has('admin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('admin') }}</strong>
                    </span>
                @endif
        </div>
    </div>
    <div class="clearfix">

    </div>
    <br>

    <div class="text2{{ $errors->has('email') ? ' has-error' : '' }}">

        <div class="col-md-12">
        {!! Form::text("email",null,['class'=>'form-control']) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                 </span>
            @endif
        </div>
    </div>
    <div class="clearfix">
  
    </div>
    <br>
    @if(!isset($user))
        <div class="text2{{ $errors->has('password') ? ' has-error' : '' }}">

            <div class="col-md-12 ">
                <input placeholder="الرقم السرى  " id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clearfix">

        </div>
        <br>    
    
    <div class="text2">

        <div class="col-md-12">
             <input  placeholder="تاكيد الرقم  السرى "  id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
    <div class="clearfix">

    </div>
    <br>
    <div class="text2">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary ">
                تنفيذ 
            </button>
        </div>
    </div>
@endif