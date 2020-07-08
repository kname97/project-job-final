<?php

namespace App\Http\Controllers\Employer;

use App\Http\Requests\createAvatar;
use App\Http\Requests\createEmployer;
use App\Models\applies;
use App\Models\employers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use  DB;
use App\Models\jobs;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\Models\wishlistjobs;
use App\Models\employees;
class employerController extends Controller
{
    function __construct()
    {
        $this->middleware('employer');
    }
    function getProfileEmployee($user_id)
    {
        $employee = employees::where('user_id',$user_id)->first();
        $user = User::where('id',$user_id)->first();
        return view('employee.profileViewDetailEmployee',compact('employee','user'));

    }
    function getProfile()
    {
        $user_id = Auth::user()->id;
        $employers = User::findOrFail($user_id);
        $profileEmployers = employers::where('user_id',$user_id)->first();
//        dd($user_id );
        return view('employer.profileEmployer',compact('employers','profileEmployers'));
    }


    function profilUpdate(createEmployer $request) {
        $user_id = Auth::user()->id;
        $check_id = User::find($user_id)->id;
        $employerUpdate = employers::where('user_id',$check_id)->first();
        $employerUpdate->name = $request->txtname;
        $employerUpdate->business_sector = $request->business_sector;
        $employerUpdate->description = $request->description;
        $employerUpdate->skype = $request->txtskype;
        $employerUpdate->phone = $request->txtphone;
        $employerUpdate->address = $request->txtaddress;
        $employerUpdate->city = $request->txtcity;
        $employerUpdate->district = $request->txtdistrict;
//        $employerUpdate->hobby = $request->txthobby;
        $checkUpdate = $employerUpdate->save();
        toastr()->success('Cập nhật thông tin thành công');
        return redirect()->back();
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
    function getApplied () {
        $user_id = Auth::user()->id;
        $emmployer = employers::where('user_id',$user_id)->first();
        $jobs = jobs::getJobOwnEmployer($user_id)->where('id', $user_id);
        $applied = applies::getApplied($user_id);


        return view('employer.applies',compact('applied'));
    }
    function Applied (Request $request){
        $apply_id = $request->apply_id;
        $apply = applies::find($apply_id);
        $apply->status = 1;
        if( $apply->save())
            toastr()->success('chấp nhận thành công');
        else
            toastr()->error('chấp nhận thất bại');

        return redirect()->back();
    }

    function getdataManageJobs()
    {
        Carbon::setLocale('vi');
        $user_id = Auth::user()->id;
        $dataJobs = jobs::getAlljobs($user_id);
//        dd()
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
                ->editColumn('startdate', function ($dataJob){
                    return  date('d-m-Y', strtotime($dataJob->startdate)) ;
                })
                ->editColumn('enddate', function ($dataJob){
                    return  date('d-m-Y', strtotime($dataJob->enddate)) ;
                })
                ->editColumn('status', function ($dataJob){
                    if($dataJob->status == 1)
                        return $dataJob->status =" tin đã được duyệt";
                    else
                        return $dataJob->status =" tin chưa được duyệt";
                })
                ->addColumn('action', function ($dataJob) {
                return '
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
            $wishListJob = wishlistjobs::where('job_id',$id)->delete();
            return response()->json($findJob);
        }
    }
    // edit job
    function  editJob($id){
        $where = array('id'=>$id);
        $editJob = jobs::where($where)->first();
        return response()->json($editJob);
    }

//    upload avatar employer
    function updateAvatar(createAvatar $request)
    {
        $user_id = Auth::user()->id;
        $check_id = User::find($user_id)->id;

        $employerUpdateAvatar = employers::where('user_id', $check_id)->first();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $nameavatar = time().'employee'.'.'.$avatar->getClientOriginalExtension();
            $locationavatar = public_path('images/employer');
            $avatar->move($locationavatar, $nameavatar);
            $saveName = 'images/employer/' . $nameavatar;
            $employerUpdateAvatar->avatar = $saveName;
        }
        $employerUpdateAvatar->save();
        return response()->json([
            'data'=> $saveName,
        ]);
    }
}
