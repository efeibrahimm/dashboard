<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){
        $settings = GeneralSetting::find(1);
        $data = [
            "title" => "General Settings",
            "description" =>$settings->description,
            "keyword" =>$settings->keyword,
            "logo" =>$settings->logo,
            "favicon" =>$settings->favicon,
            "auth" =>$settings->auth
        ];
        return view('dashboard.general_settings',$data);
    }
    public function update(Request $request){



        $logo =  $request->logo->store('images', 'public');
        $favicon =  $request->logo->store('images', 'public');


        $settings = GeneralSetting::find(1);
        $settings->description = $request->description;
        $settings->keyword = $request->keyword;
        $settings->auth = $request->auth;
        $settings->logo = $logo;
        $settings->favicon = $favicon;

        $settings->save();
        return back();

    }
}
