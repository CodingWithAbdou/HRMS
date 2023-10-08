@extends('layouts.admin')
@section('title' , 'الضبط العام')
@section('min_title' , 'الرئيسية')
@section('min_title_name' , 'البيانات ')
@section('min_title_subname' , 'السنوات المالية')

@section('content')
<section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header row"  >
            <h3 class="card-title d-flex align-items-center justify-content-center "><span class="me-2">قائمة السنوات المالية </span><a class="btn btn-success btn-sm"  href="{{route('finance.create')}}" >اضافة سنة مالية</a></h3>

        </div>
        @if(@isset($data) and !@empty($data))
        <div class="card-body">
            <table  class="table table-bordered " style="width:100% ">
                <tr class="table-primary ">
                    <th> السنة المالية</th>
                    <th> وصف السنة المالية </th>
                    <th>تاريخ البداية</th>
                    <th>تاريخ النهاية</th>
                    <th>مفتوح ام معلق</th>
                    <th>تمت الاضافة بواسطة</th>
                    <th>تم التحديث بواسطة </th>
                    <th>المزيد</th>
                </tr>

                @foreach ($data as $year)
                <tr >
                    <th>{{ $year->FINANCE_YR }}</th>
                    <th>{{ $year->FINANCE_YR_DESC }}</th>
                    <th>{{ $year->start_date }}</th>
                    <th>{{ $year->end_date }}</th>
                    <th>{{ $year->is_open == 0 ? 'مغلق' : 'مفتوح'}}</th>
                    <th>{{ $year->who_add->name }}</th>
                    <th>{{ $year->updated_by > 0  ? $year->who_update->name  : 'لم يتم التحديث' }}</th>
                    <th>
                        <a class="btn btn-outline-info btn-sm " href="{{ route('finance.show' , $year->id)  }}">تفاصيل</a>
                        <a class="btn btn-outline-danger btn-sm " href="{{ route('finance.destroy' , $year->id)  }}">حذف</a>
                    </th>
                </tr>
                @endforeach
            </table>
            {{ $data->links() }}
        @else
            <div class="alert alert-danger mt-2 mx-2">لاتوجد بيانات لعرضها</div>
        @endif
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endsection
