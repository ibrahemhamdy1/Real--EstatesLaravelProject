@extends('layouts.app')
@section('title')
اهلا بيك  فى  الموقع 
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                {!!Form::open(['url'=>'findUser','method'=>'get'])!!}

                        {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
                    {!!Form::submit("ابحث",['class','banner_btn','style'=>'margin:5px ;'])!!}

                {!!Form::close()!!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('footer')
<script>
   $(document).ready(function() {
    src = "{{ url('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 1,
       
    });
});
</script>
@endsection