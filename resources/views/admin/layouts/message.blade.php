@if(Session::has('flash_message'))
<div class=" alert alert-danger" id="mes"> {{Session::get('flash_message')}}
</div>
@endif