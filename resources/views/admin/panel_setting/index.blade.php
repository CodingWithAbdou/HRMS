@extends('layouts.admin')
@section('title' , 'الضبط العام')
@section('min_title' , 'الرئيسية')
@section('min_title_name' , 'الضبط العام ')
@section('min_title_subname' , 'العرض')

@section('content')
<section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header"  >
            <h3 class="card-title card_title_center py-2 fw-bold">بيانات الضبط العام</h3>
        </div>
        @if(@isset($data) and !@empty($data))
        <div class="card-body">
            <table  class="table table-bordered table-hover" style="width:100% ">
                <tr class="jsgrid-header-row">
                    <th class="w-30 p-2">اسم الشركة</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->name}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">حالة التفعيل</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->system_status == 1 ? "مفعل" : "غير مفعلة"}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">هاتف الشركة</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->phones}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">عنوان الشركة</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->address}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">ايميل الشركة</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->email}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم دقيقة تحسب تاخير الحضور</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_minute_calculate_delay}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم تحسب الانصراف المبكر</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_minute_calculate_early_departure}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم دقيقة مجموع انصراف مبكر او حضور متاخر نخصم ربع يوم</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_minute_quarterday}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم مرة انصراف مبكر او حضور متاخر نخصم نصف يوم</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_time_half_daycut}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2"> بعد كم مرة انصراف مبكر او حضور متاخر نخصم  يوم كامل</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_time_allday_daycut}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">رصيد اجازات الموضف الشهري</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->mounthly_vacation_blance}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم يوم ينزل للموضف رصيد اجازات</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->after_days_begin_vacation}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">عدد الاجازات للموضف مثل نزول عشرة ايام ونص بغد ستة شهور للموضف</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->first_balance_begin_vication}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">بعد كم يوم ينزل للموضف رصيد اجازات </th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->first_balance_begin_vication}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">قيمة خصم ايام بعد اول مرة عياب بدون ادن</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->sanctions_value_first_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">قيمة خصم ايام بعد ثاني مرة عياب بدون ادن</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->sanctions_value_second_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">قيمة خصم ايام بعد ثالث مرة عياب بدون ادن</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->sanctions_value_thaird_abcence}}</th>
                </tr>

                <tr>
                    <th class="w-30 p-2">قيمة خصم ايام بعد رابع مرة عياب بدون ادن</th>
                    <th class="w-70 p-2 text-secondary-emphasis fw-normal">{{$data->sanctions_value_fourth_abcence}}</th>
                </tr>

                <tr >
                    <th colspan="2" class="text-center">
                        <a  href="{{route('general_settings_edit')}}" class="btn btn-danger  my-2 ms-auto px-4">
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
