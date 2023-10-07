<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin_panel_settingRequest;

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

    public function edit()
    {
        $data = Admin_panel_setting::where('com_code' , auth()->user()->com_code)->first();
        return view('admin.panel_setting.edit', compact('data'));
    }

    public function update(Admin_panel_settingRequest $request)
    {
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['phones'] = $request->phones;
        $data['address'] = $request->address;
        $data['email'] = $request->email;
        $data['after_minute_calculate_delay'] = $request->after_minute_calculate_delay;
        $data['after_minute_calculate_early_departure'] = $request->after_minute_calculate_early_departure;
        $data['after_minute_quarterday'] = $request->after_minute_quarterday;
        $data['after_time_half_daycut'] = $request->after_time_half_daycut;
        $data['after_time_allday_daycut'] = $request->after_time_allday_daycut;
        $data['mounthly_vacation_blance'] = $request->mounthly_vacation_blance;
        $data['after_days_begin_vacation'] = $request->after_days_begin_vacation;
        $data['first_balance_begin_vication'] = $request->first_balance_begin_vication;
        $data['after_day_begin_vaction'] = $request->after_day_begin_vaction;
        $data['sanctions_value_first_abcence'] = $request->sanctions_value_first_abcence;
        $data['sanctions_value_second_abcence'] = $request->sanctions_value_second_abcence;
        $data['sanctions_value_thaird_abcence'] = $request->sanctions_value_thaird_abcence;
        $data['sanctions_value_fourth_abcence'] = $request->sanctions_value_fourth_abcence;
        $data['updated_by'] = auth()->user()->id;

        // dd($request);
        Admin_panel_setting::where('com_code' , auth()->user()->com_code)->update($data);
        return redirect()->route('general_settings_view');
    }
}
