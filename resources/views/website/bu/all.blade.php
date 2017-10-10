@extends('layouts.app')
@section('title')
كل العقارات 
@endsection
@section('header')
{!! Html::style('cus/buall.css')!!}
@endsection
@section('content')

        <div class="container">
            <h4>NEW COLLECTION</h4>
            <div class="row">
    
        <!-- BEGIN PRODUCTS -->
        @include('website.bu.shearfile')
        

        <!-- END PRODUCTS -->
            </div>
    </div><!-------container----->

@endsection
