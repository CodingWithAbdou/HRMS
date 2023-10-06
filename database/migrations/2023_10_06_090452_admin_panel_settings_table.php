<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->tinyInteger('system_status')->comment('one active zero desactive');
            $table->string('iamge' , 255)->nullable();
            $table->string('phones' , 255);
            $table->string('address' , 255);
            $table->string('email' , 255);
            $table->integer('added_by');
            $table->integer('updated_by')->nullable();
            $table->integer('com_code');
            $table->decimal('after_minute_calculate_delay' , 10 , 2)->default(0)->comment('بعد كم دقيقة تحسب تاخير الحضور');
            $table->decimal('after_minute_calculate_early_departure' , 10 , 2)->default(0)->comment('بعد كم تحسب الانصراف المبكر');
            $table->decimal('after_minute_quarterday' , 10 , 2)->default(0)->comment('بعد كم دقيقة مجموع انصراف مبكر او حضور متاخر نخصم ربع يوم');
            $table->decimal('after_time_half_daycut' , 10 , 2)->default(0)->comment('بعد كم مرة انصراف مبكر او حضور متاخر نخصم نصف يوم');
            $table->decimal('after_time_allday_daycut' , 10 , 2)->default(0)->comment(' بعد كم مرة انصراف مبكر او حضور متاخر نخصم  يوم كامل' );
            $table->decimal('mounthly_vacation_blance' , 10 , 2)->default(0)->comment('رصيد اجازات الموضف الشهري');
            $table->decimal('after_days_begin_vacation' , 10 , 2)->default(0)->comment('بعد كم يوم ينزل للموضف رصيد اجازات');
            $table->decimal('first_balance_begin_vication' , 10 , 2)->default(0)->comment('عدد الاجازات للموضف مثل نزول عشرة ايام ونص بغد ستة شهور للموضف');
            $table->decimal('after_day_begin_vaction' , 10 , 2)->default(0)->comment('بعد كم يوم ينزل للموضف رصيد اجازات ');
            $table->decimal('sanctions_value_first_abcence' , 10 , 2)->default(0)->comment('قيمة خصم ايام بعد اول مرة عياب بدون ادن');
            $table->decimal('sanctions_value_second_abcence' , 10 , 2)->default(0)->comment('قيمة خصم ايام بعد ثاني مرة عياب بدون ادن');
            $table->decimal('sanctions_value_thaird_abcence' , 10 , 2)->default(0)->comment('قيمة خصم ايام بعد ثالث مرة عياب بدون ادن');
            $table->decimal('sanctions_value_fourth_abcence' , 10 , 2)->default(0)->comment('قيمة خصم ايام بعد رابع مرة عياب بدون ادن');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
