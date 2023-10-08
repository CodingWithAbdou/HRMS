@extends('layouts.admin')
@section('title' , 'الضبط العام')
@section('min_title' , 'الرئيسية')
@section('min_title_name' , 'البيانات ')
@section('min_title_subname' , 'السنوات المالية')

@section('content')
<section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header row"  >
            <h3 class="card-title d-flex align-items-center justify-content-center "><span class="me-2">قائمة السنوات المالية </span><a class="btn btn-outline-success btn-sm"  href="{{route('finance.create')}}" >اضافة سنة مالية</a></h3>

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
                    <th>المزيد من التفاصيل</th>
                </tr>

                <tr >
                    <th>{{ $data->FINANCE_YR }}</th>
                    <th>{{ $data->FINANCE_YR_DESC }}</th>
                    <th>{{ $data->start_date }}</th>
                    <th>{{ $data->end_date }}</th>
                    <th>{{ $data->is_open == 0 ? 'مغلق' : 'مفتوح'}}</th>
                    <th><a class="btn btn-info btn-sm text-white" href="{{ route('finance.show' , $data->id)  }}">تفاصيل</a></th>
                </tr>

            </table>
        @else
            <div class="alert alert-danger mt-2 mx-2">لاتوجد بيانات لعرضها</div>
        @endif
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endsection
