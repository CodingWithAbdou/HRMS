<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
class Finance_calender extends Model
{
    use HasFactory;
    protected $fillable = [
        "FINANCE_YR",
        "FINANCE_YR_DESC",
        "start_date",
        "end_date",
        "com_code",
        "added_by",
        "updated_by",
    ];
    public function who_add()
    {
        return $this->belongsTo(Admin::class , 'added_by');
    }

    public function who_update()
    {
        return $this->belongsTo(Admin::class , 'updated_by');
    }
}
