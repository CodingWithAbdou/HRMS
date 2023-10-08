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
            <table  class="table table-bordered table-hover " style="width:100% ">
                <form action="{{ route('finance.store') }}" method="POST">
                    @csrf
                    <tr class=" ">
                        <th> السنة المالية</th>
                        <th>
                            <input name="FINANCE_YR" type="text" class="form-control" placeholder="ادخل السنة المالية" value="{{old('FINANCE_YR')}}">
                            @error('FINANCE_YR') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>

                    <tr >
                        <th> وصف السنة المالية </th>
                        <th>
                            <textarea name="FINANCE_YR_DESC" type="text" class="form-control" rows="1" placeholder="ادخل وصف السنة المالية"  >{{old('FINANCE_YR_DESC')}}</textarea>
                            @error('FINANCE_YR_DESC') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>

                    <tr >
                        <th>تاريخ البداية</th>
                        <th>
                            <input name="start_date" type="date" class="form-control" placeholder="ادخل تاريخ بداية السنة" value="{{old('start_date')}}">
                            @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>

                    </tr>
                    <tr >
                        <th>تاريخ النهاية</th>
                        <th>
                            <input name="end_date" type="date" class="form-control" placeholder="ادخل تاريخ نهاية السنة" value="{{old('end_date')}}">
                            @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-center ">  <input type="submit" class="btn btn-success  text-white my-2" value="اضف السنة"></th>
                    </tr>
            </form>
            </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endsection
