@extends('layouts.app')
@section('title') 
صفحة  تسجيل عضوية جديدة  
@endsection
@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="text-center">تسجيل الدخول</div>

                <div class="text-center">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input placeholder="الاسم" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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

                        <div class="text2{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input placeholder="الاميل " id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">

</div>
<br>
@endsection
