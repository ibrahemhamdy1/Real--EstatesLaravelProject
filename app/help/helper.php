<?php 

use  \App\SiteSetting;
function getString($sitename="Sitename")
{
    return  SiteSetting::where('namesetting',$sitename)->get()[0]->value;
}

 

function bu_type()
{
	$array=['شقة','فيلا','شالية'];
	return  $array;
}

function bu_rent()
{
	$array=['تمليك','ايجار'];
	return  $array;
}
function status()
{
	$array=[0=>'غير  مفعل',1=>'مفعل'];
	return  $array;
}
function roomnumber()
{
	$array=[];
	for ($i=0; $i<40 ; $i++) { 
		$array[]=$i;
	}
	return $array;
}

function searchnameFiled()
{
	return  ['bu_price'=>'سعر العقار',
			 'bu_palce'=>'مكان العقار',
			 'rooms'=>'عدد الغرف',
			 'bu_type'=>'نوع العقار ',
			 'bu_rent'=>'نوع العملية ',
			 'bu_square'=>'المساحة',
			 'bu_price_to'=>'السعر الى ',
			 'bu_price_from'=>'السعر من',];
}
function bu_palce()
{

	return  ['0'=>'القاهرة' ,'1'=>'المنصورة '];
}
?>
  

