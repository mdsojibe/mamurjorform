<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodayWorkForm;

class TodayWorkFormController extends Controller
{
    public function mainhome(){
        return view('mainHome');
    }
    public function index(){
        return view('todayworkform.form');
    }
    public function create(){
        $work_value=TodayWorkForm::orderBy('id','desc')->get();
        return view('todayworkform.table',compact('work_value'));
    }
    public function store(Request $request){
        TodayWorkForm::create([
            'name'               => $request->name,
            'designation'        => $request->designation,
            'date'               => $request->date,
            'morning_work'       => $request->morning_work,
            'lunch_work'         => $request->lunch_work,
            'afternoon_work'     => $request->afternoon_work,
            'evening_work'       => $request->evening_work,
            'over_time'          => $request->over_time,
            'signature_personal' => $request->signature_personal,
            'signature_office'   => $request->signature_office,
            'weekly_comment'     => $request->weekly_comment,
            'status'             => $request->status,
        ]);
        return redirect()->route('today.create');
    }
    public function edit($id){
        $data=TodayWorkForm::find($id);
        return view('todayworkform.edit',compact('data'));
    }
    public function update(Request $request, $id){
        $data=TodayWorkForm::find($id);
        $data->update([
            'name'               => $request->name,
            'designation'        => $request->designation,
            'date'               => $request->date,
            'morning_work'       => $request->morning_work,
            'lunch_work'         => $request->lunch_work,
            'afternoon_work'     => $request->afternoon_work,
            'evening_work'       => $request->evening_work,
            'over_time'          => $request->over_time,
            'signature_personal' => $request->signature_personal,
            'signature_office'   => $request->signature_office,
            'weekly_comment'     => $request->weekly_comment,
            'status'             => $request->status,
        ]);
        return redirect()->route('today.create');
    }
    public function delete($id){
        $data=TodayWorkForm::find($id);
        $data->delete();
        return redirect()->back();
    }
}
