<?php 

use  \App\SiteSetting;
function getString($sitename="Sitename")
{
    return  SiteSetting::where('namesetting',$sitename)->get()[0]->value;
}
?>