@extends('layouts.admin')
@section('title' , ' تعديل الضبط العام')
@section('min_title' , 'قائمة الضبط')
@section('min_title_name' , ' تعديل الضبط العام  ')
@section('min_title_subname' , 'تعديل')

@section('content')
    <section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header"  >
            <h3 class="card-title card_title_center"> تحديث بيانات الضبط العام </h3>
        </div>
        @if(@isset($data) and !@empty($data))
        <div class="card-body">
            <table  class="table table-bordered table-hover" style="width:100% ">
                <form action="{{route('general_settings_update')}}" method="POST">
                @csrf
                    <tr class="">
                        <th class="w-30 p-4">اسم الشركة</th>
                        <th class="w-70">
                            <input name="name" class="form-control mt-2" type="text"  value="{{$data->name}}">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>


                    <tr>
                        <th class="w-30 p-4">هاتف الشركة</th>
                        <th class="w-70">
                            <input  name="phones" class="form-control mt-2  " type="tel"  value="{{$data->phones}}">
                            @error('phones') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>

                    <tr>
                        <th class="w-30 p-4">عنوان الشركة</th>
                        <th class="w-70">
                            <input name="address" class="form-control mt-2" type="tel"  value="{{$data->address}}">
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">ايميل الشركة</th>
                        <th class="w-70">
                            <input name="email" class="form-control mt-2" type="tel"  value="{{$data->email}}">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم دقيقة تحسب تاخير الحضور</th>
                        <th class="w-70">
                            <input name="after_minute_calculate_delay" class="form-control mt-2" type="tel"  value="{{$data->after_minute_calculate_delay}}">
                            @error('after_minute_calculate_delay') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم تحسب الانصراف المبكر</th>
                        <th class="w-70">
                            <input name="after_minute_calculate_early_departure" class="form-control mt-2" type="tel"  value="{{$data->after_minute_calculate_early_departure}}">
                            @error('after_minute_calculate_early_departure') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم دقيقة مجموع انصراف مبكر او حضور متاخر نخصم ربع يوم</th>
                        <th class="w-70">
                            <input name="after_minute_quarterday" class="form-control mt-2" type="tel"  value="{{$data->after_minute_quarterday}}">
                            @error('after_minute_quarterday') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم مرة انصراف مبكر او حضور متاخر نخصم نصف يوم</th>
                        <th class="w-70">
                            <input name="after_time_half_daycut" class="form-control mt-2" type="tel"  value="{{$data->after_time_half_daycut}}">
                            @error('after_time_half_daycut') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4"> بعد كم مرة انصراف مبكر او حضور متاخر نخصم  يوم كامل</th>
                        <th class="w-70">
                            <input name="after_time_allday_daycut" class="form-control mt-2" type="tel"  value="{{$data->after_time_allday_daycut}}">
                            @error('after_time_allday_daycut') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">رصيد اجازات الموضف الشهري</th>
                        <th class="w-70">
                            <input name="mounthly_vacation_blance" class="form-control mt-2" type="tel"  value="{{$data->mounthly_vacation_blance}}">
                            @error('mounthly_vacation_blance') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم يوم ينزل للموضف رصيد اجازات</th>
                        <th class="w-70">
                            <input name="after_days_begin_vacation" class="form-control mt-2" type="tel"  value="{{$data->after_days_begin_vacation}}">
                            @error('after_days_begin_vacation') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">عدد الاجازات للموضف مثل نزول عشرة ايام ونص بغد ستة شهور للموضف</th>
                        <th class="w-70">
                            <input name="first_balance_begin_vication" class="form-control mt-2" type="tel"  value="{{$data->first_balance_begin_vication}}">
                            @error('first_balance_begin_vication') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">بعد كم يوم ينزل للموضف رصيد اجازات </th>
                        <th class="w-70">
                            <input name="after_day_begin_vaction" class="form-control mt-2" type="tel"  value="{{$data->after_day_begin_vaction}}">
                            @error('after_day_begin_vaction') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">قيمة خصم ايام بعد اول مرة عياب بدون ادن</th>
                        <th class="w-70">
                            <input name="sanctions_value_first_abcence" class="form-control mt-2" type="tel"  value="{{$data->sanctions_value_first_abcence}}">
                            @error('sanctions_value_first_abcence') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">قيمة خصم ايام بعد ثاني مرة عياب بدون ادن</th>
                        <th class="w-70">
                            <input name="sanctions_value_second_abcence" class="form-control mt-2" type="tel"  value="{{$data->sanctions_value_second_abcence}}">
                            @error('sanctions_value_second_abcence') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">قيمة خصم ايام بعد ثالث مرة عياب بدون ادن</th>
                        <th class="w-70">
                            <input name="sanctions_value_thaird_abcence" class="form-control mt-2" type="tel"  value="{{$data->sanctions_value_thaird_abcence}}">
                            @error('sanctions_value_thaird_abcence') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>

                    <tr>
                        <th class="w-30 p-4">قيمة خصم ايام بعد رابع مرة عياب بدون ادن</th>
                        <th class="w-70">
                            <input name="sanctions_value_fourth_abcence" class="form-control mt-2" type="tel"  value="{{$data->sanctions_value_fourth_abcence}}">
                            @error('sanctions_value_fourth_abcence') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>

                    <tr >
                        <th colspan="2" class="text-center">
                            <input  type="submit"  class="btn btn-success  my-2 ms-auto px-4" value=" تحديث اليبانات">
                        </th>
                    </tr>
                </form>
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
