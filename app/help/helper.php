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
?>