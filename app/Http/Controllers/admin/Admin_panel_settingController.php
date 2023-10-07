<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin_panel_setting;
use Illuminate\Http\Request;

class Admin_panel_settingController extends Controller
{
    public function index()
    {
        $data = Admin_panel_setting::where('com_code' , auth()->user()->com_code)->first();
        // dd($data);
        return view('admin.panel_setting.index', compact('data'));
    }
}
