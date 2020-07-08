<?php

namespace App\Http\Controllers\Employee;

use App\Models\jobs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\applies;
use Yajra\DataTables\DataTables;

class manageAppliesController extends Controller
{
    function __construct()
    {
        $this->middleware('employee');
    }

    function index()
    {
        Carbon::setLocale('vi');
        $user_id = Auth::user()->id;
        $applyJobs = applies::getJobApplied($user_id);
//        dd($applyJobs);
       return view('employee.manageApplies',compact('applyJobs'));
    }

    function applyJob ($id)
    {
        $user_id = Auth::user()->id;
        $job_id = jobs::find($id)->id;
        if (request()->ajax()) {
            $applyJob = new applies();
            $applyJob->user_id = $user_id;
            $applyJob->job_id = $job_id;
            $applyJob->status = 0;
            $applyJob->save();
            return response()->json(['message' => 'ứng tuyển thành công']);
        }
        return response()->json(['message' => 'ứng tuyển thất bại']);
    }
}
