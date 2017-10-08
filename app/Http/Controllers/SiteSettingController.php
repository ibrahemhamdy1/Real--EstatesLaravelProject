<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting ;
use Illuminate\Support\Facades\Input;
class SiteSettingController extends Controller
{
    public  function  index(SiteSetting $siteSetting){
        $siteSetting =$siteSetting->all();
        return  view('admin.sitesetting.index',compact('siteSetting'));
    }
   
    public function edit($id)
    {
       // dd();
        $Setting =SiteSetting::find($id);
        return  view('admin.sitesetting.edit',compact('Setting'));
    }

    public function update(Request $requests,$id)
    {
        $input=$requests->all();
        SiteSetting::findOrFail($id)->update($input);
        

        return  redirect ()->back()->withFlashMessage('you  update  a  setting');
    }
}
