<?php

namespace App\Http\Controllers;

use App\Models\applies;
use App\Models\employees;
use Illuminate\Http\Request;
use App\Models\employers;
use App\User;
use App\Models\jobs;
use  Auth;
use App\Models\wishlistemployers;
use App\Models\wishlistjobs;

class generalController extends Controller
{
    function __contruct()
    {
        $this->middleware('guest');
    }

    function jobDetail($id) {
        $jobData = jobs::getSingleJobbyID($id);
        $checkWLJ = wishlistjobs::checkWishListJob($id);
        $checkAJ = applies::checkWishListApply($id);

//        dd($checkWLJ);
        return view('generalView.jobDetail',compact('jobData','checkWLJ','checkAJ'));
    }
    function getProfilEmployer($id){
        $employers = employers::findOrFail($id);

        $user_id = $employers->user_id;
        $jobCheck = jobs::where('user_id',$user_id )->first();
        $employer_id =  $employers->id;
        $users = User::find($user_id)->first();
        $jobs = jobs::getJobOwnEmployer( $user_id)->paginate(9);
        $checkWL = wishlistemployers::checkWishListUser($employer_id);

//        dd($checkWLJob);exit();
        return view('employer.profileViewDetailEmployer',compact('employers','users','jobs','checkWL'));
    }
}
