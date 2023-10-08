@extends('layouts.admin')
@section('title' , 'الضبط العام')
@section('min_title' , 'الرئيسية')
@section('min_title_name' , 'البيانات ')
@section('min_title_subname' , 'اضافة  ')

@section('content')
<section class="pt-4 col-12">
    <div class="card" >
        <div class="card-header row"  >
            <h3 class="card-title d-flex align-items-center justify-content-center "><span class="me-2">اضافة السنوات المالية </span></h3>
        </div>
        <div class="card-body">
            <table  class="table table-bordered " style="width:100% ">
                <form action="{{ route('finance.store') }}" method="POST">
                    <tr class="table-primary ">
                        <th> السنة المالية</th>
                        <th> وصف السنة المالية </th>
                        <th>تاريخ البداية</th>
                        <th>تاريخ النهاية</th>
                        <th> حالة السنة </th>
                    </tr>

                    <tr >
                        <th><input name="FINANCE_YR" type="text" class="form-control" placeholder="ادخل السنة المالية"></th>
                        <th><textarea name="FINANCE_YR_DESC" type="text" class="form-control" rows="1" placeholder="ادخل وصف السنة المالية"></textarea></th>
                        <th><input name="start_date" type="date" class="form-control" placeholder="ادخل تاريخ بداية السنة"></th>
                        <th><input name="end_date" type="date" class="form-control" placeholder="ادخل تاريخ نهاية السنة"></th>
                        <th>
                            <select name="is_open" class="form-select">
                                <option value="1" selected>مفعل</option>
                                <option value="0">غير مفعل</option>
                            </select>
                        </th>
                        {{-- <th><input type="text" placeholder=" "></th> --}}
                    </tr>
                    <tr>
                        <th colspan="5" class="text-center ">  <input class="btn btn-success  text-white my-2" value="حفظ"></th>
                    </tr>
            </form>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endsection
