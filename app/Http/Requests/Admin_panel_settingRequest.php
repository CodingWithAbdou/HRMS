<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin_panel_settingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'phones' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'after_minute_calculate_delay' => ['required'],
            'after_minute_calculate_early_departure' => ['required'],
            'after_minute_quarterday' => ['required'],
            'after_time_half_daycut' => ['required'],
            'after_time_allday_daycut' => ['required'],
            'mounthly_vacation_blance' => ['required'],
            'after_days_begin_vacation' => ['required'],
            'first_balance_begin_vication' => ['required'],
            'after_day_begin_vaction' => ['required'],
            'sanctions_value_first_abcence' => ['required'],
            'sanctions_value_second_abcence' => ['required'],
            'sanctions_value_thaird_abcence' => ['required'],
            'sanctions_value_fourth_abcence' => ['required'],
        ];
    }
}
