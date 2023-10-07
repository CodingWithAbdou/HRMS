@extends('layouts.admin')
@section('title' , 'الضبط العام')
@section('min_title' , 'الرئيسية')
@section('min_title_name' , 'الضبط العام ')
@section('min_title_subname' , 'العرض')

<style>
    .w-30 {
        width: 30%;
    }
    .w-70 {
        width: 70%;
    }
</style>
@section('content')
<section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header"  >
            <h3 class="card-title card_title_center">بيانات الضبط العام</h3>
        </div>
        @if(@isset($data) and !@empty($data))
        <div class="card-body">
            <table  class="table table-bordered table-hover" style="width:100% ">
                <tr class="jsgrid-header-row">
                    <th class="w-30">اسم الشركة</th>
                    <th class="w-70">{{$data->name}}</th>
                </tr>

                <tr>
                    <th class="w-30">حالة التفعيل</th>
                    <th class="w-70">{{$data->system_status == 1 ? "مفعل" : "غير مفعلة"}}</th>
                </tr>

                <tr>
                    <th class="w-30">هاتف الشركة</th>
                    <th class="w-70">{{$data->phones}}</th>
                </tr>

                <tr>
                    <th class="w-30">عنوان الشركة</th>
                    <th class="w-70">{{$data->address}}</th>
                </tr>

                <tr>
                    <th class="w-30">ايميل الشركة</th>
                    <th class="w-70">{{$data->email}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم دقيقة تحسب تاخير الحضور</th>
                    <th class="w-70">{{$data->after_minute_calculate_delay}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم تحسب الانصراف المبكر</th>
                    <th class="w-70">{{$data->after_minute_calculate_early_departure}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم دقيقة مجموع انصراف مبكر او حضور متاخر نخصم ربع يوم</th>
                    <th class="w-70">{{$data->after_minute_quarterday}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم مرة انصراف مبكر او حضور متاخر نخصم نصف يوم</th>
                    <th class="w-70">{{$data->after_time_half_daycut}}</th>
                </tr>

                <tr>
                    <th class="w-30"> بعد كم مرة انصراف مبكر او حضور متاخر نخصم  يوم كامل</th>
                    <th class="w-70">{{$data->after_time_allday_daycut}}</th>
                </tr>

                <tr>
                    <th class="w-30">رصيد اجازات الموضف الشهري</th>
                    <th class="w-70">{{$data->mounthly_vacation_blance}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم يوم ينزل للموضف رصيد اجازات</th>
                    <th class="w-70">{{$data->after_days_begin_vacation}}</th>
                </tr>

                <tr>
                    <th class="w-30">عدد الاجازات للموضف مثل نزول عشرة ايام ونص بغد ستة شهور للموضف</th>
                    <th class="w-70">{{$data->first_balance_begin_vication}}</th>
                </tr>

                <tr>
                    <th class="w-30">بعد كم يوم ينزل للموضف رصيد اجازات </th>
                    <th class="w-70">{{$data->first_balance_begin_vication}}</th>
                </tr>

                <tr>
                    <th class="w-30">قيمة خصم ايام بعد اول مرة عياب بدون ادن</th>
                    <th class="w-70">{{$data->sanctions_value_first_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30">قيمة خصم ايام بعد ثاني مرة عياب بدون ادن</th>
                    <th class="w-70">{{$data->sanctions_value_second_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30">قيمة خصم ايام بعد ثالث مرة عياب بدون ادن</th>
                    <th class="w-70">{{$data->sanctions_value_thaird_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30">قيمة خصم ايام بعد رابع مرة عياب بدون ادن</th>
                    <th class="w-70">{{$data->sanctions_value_fourth_abcence}}</th>
                </tr>

                <tr >
                    <th colspan="2" class="text-center">
                        <a  href="{{route('general_settings_edit')}}" class="btn btn-danger rounded-4 my-2 ms-auto">
                            تعديل اليبانات
                        </a>
                    </th>
                </tr>

            </table>
        @else
        <div class="alert alert-danger ">لاتوجد بيانات لعرضها</div>
        @endif
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endsection
