<?php

namespace App\Http\Controllers\Employer;

use App\Models\employers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use  DB;
use App\Models\jobs;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class employerController extends Controller
{
    function __construct()
    {
        $this->middleware('employer');
    }

    function getProfile()
    {

        return view('employer.profileEmployer');
    }

    function getViewPostJob()
    {

        return view('employer.postJob');

    }

    function getviewInforEmployer()
    {
        return view('employer.manageInfor');
    }

    function getViewManageJobs()
    {
        return view('employer.manageJob');
    }

    function getdataManageJobs()
    {
        Carbon::setLocale('vi');
        $user_id = Auth::user()->id;
        $dataJobs = jobs::getAlljobs($user_id);
//        $dataJobs = jobs::select([
//            'id',
//            'title',
//            'jobtype',
//            'jobcategory',
//            'minsalary',
//            'maxsalary',
//            'negotiable',
//            'startdate',
//            'enddate',
//            'area',
//            'created_at',
//            'updated_at'
//        ])->where('user_id', $user_id);

        if (request()->ajax()) {
            return DataTables::of($dataJobs)
                ->editColumn('created_at', function ($user){
                    return $user->created_at ? with(new Carbon($user->created_at))->diffForHumans() : '';
                })
                ->editColumn('updated_at', function ($user){
                    return $user->updated_at ? with(new Carbon($user->updated_at))->diffForHumans() : '';
                })
                ->addColumn('action', function ($dataJob) {
                return '<a href="javascript:void(0)" data-toggle="tooltip" id="edit-job" data-id="' . $dataJob->id . '" 
                        data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete-job"  data-id="' . $dataJob->id . '"
                         data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
            })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');

    }
    function deletelJob($id) {
        if(request()->ajax()) {
            $findJob = jobs::find($id)->delete();
            return response()->json($findJob);
        }
    }
    // edit job
    function  editJob($id){
        $where = array('id'=>$id);
        $editJob = jobs::where($where)->first();
        return response()->json($editJob);
    }
}
