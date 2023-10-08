<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Finance_calenders_Request;
use App\Models\Finance_calender;
use App\Models\Finance_cln_period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Finance_cln_periodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Finance_calender::select('*')->orderby('FINANCE_YR' , "DESC")->paginate(PAGINATION_COUNT);
        return view('admin.Finance_calender.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Finance_calender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Finance_calenders_Request $request)
    {
        try {
            DB::beginTransaction();
            $data['FINANCE_YR'] = $request->FINANCE_YR ;
            $data['FINANCE_YR_DESC'] = $request->FINANCE_YR_DESC;
            $data['start_date'] = $request->start_date;
            $data['end_date'] = $request->end_date;
            $data['added_by'] = auth()->user()->id;
            $data['com_code'] = auth()->user()->com_code;
            $flage = Finance_calender::insert($data);
            DB::commit();
            return redirect()->route('finance.index')->with(['success' =>'تم ادخال يسنات السنة الجديدة بنجاح']);

        }catch(\Exception $ex) {
            DB::rollBack();
            // DB::rollBack();
            return redirect()->back()->with(['error' => 'عفوا حدث خطا ' . $ex->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data =  Finance_cln_period::find($id);
        return view('admin.Finance_calender.show' , compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
