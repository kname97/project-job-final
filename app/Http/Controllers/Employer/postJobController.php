<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobcategories;
use DB;
use App\Models\jobs;
use App\Http\Requests\createJob;

class postJobController extends Controller
{
    function __construct()
    {
        $this->middleware('employer');
    }

//  store jobs
    function jobStore(createJob $request)
    {
        $job = new jobs();
        $job->title = $request->txttitle;
        $job->desciption = $request->txtdescription;
        $job->jobtype = $request->typejob;
        $job->jobcategory = $request->txtcategoryJob;
        $job->minsalary = $request->minsalary;
        $job->maxsalary = $request->maxsalary;
        $job->negotiable = $request->negotiable;
        $job->position = $request->position;
        $job->exp = $request->exp;
        $job->startdate = $request->startdate;
        $job->enddate = $request->enddate;
        $job->area = $request->location;
        $job->amount = $request->amount;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->user_id = $request->user_id;
        $job->address = $request->address;
        $checkJobpost = $job->save();
        if($checkJobpost){
            toastr()->Success('Đăng tin tuyển dụng thành công, vui lòng đợi nhà quản trị duyệt đơn');
        }
        else {
            toastr()->Error('Đăng tin tuyển dụng thất bại, vui lòng xem lại các thông tin');
        }
        return redirect()->back();
    }

}
