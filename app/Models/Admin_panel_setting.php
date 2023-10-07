<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_panel_setting extends Model
{
    use HasFactory;
    protected $table="admin_panel_settings";

    protected $fillable = [
        'name',
        'system_status',
        'image',
        'phones',
        'address',
        'email',
        'added_by',
        'updated_by',
        'com_code',
        'after_minute_calculate_delay',
        'after_minute_calculate_early_departure',
        'after_minute_quarterday',
        'after_time_half_daycut',
        'after_time_allday_daycut',
        'mounthly_vacation_blance',
        'after_days_begin_vacation',
        'first_balance_begin_vication',
        'after_day_begin_vaction',
        'sanctions_value_first_abcence',
        'sanctions_value_second_abcence',
        'sanctions_value_thaird_abcence',
        'sanctions_value_fourth_abcence',
    ];
}
