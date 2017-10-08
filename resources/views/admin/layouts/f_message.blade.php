@if(Session::has('flash_message'))
<script type="text/javascript" >
	
	swal({title:"{{Session::get('flash_message')}}",text:"سوف  يتم الاختفاء  بعد  5  ثوانى",timer:2000,showConfirmButton:false});
</script>
@endif
