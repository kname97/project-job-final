<?php

namespace App\Http\Controllers\Employee;

use App\Models\wishlistemployers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\jobs;
use Auth;
use App\Models\wishlistjobs;
class wishlistJobController extends Controller
{
    function __construct()
    {
        $this->middleware('employee');
    }

    function index()
    {
        $user_id = Auth::user()->id;
        $wishList = wishlistjobs::WishList($user_id);
        return view('employee.wishlistJob',compact('wishList'));
    }

    function addWishlistJob($id)
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);
        $job_id = jobs::findOrFail($id)->id;
        if (request()->ajax()) {
            $addWishlistJob = new wishlistjobs();
            $addWishlistJob->user_id = $user_id;
            $addWishlistJob->job_id = $job_id;
//            $addWishlistJob->added = 1;
            $addWishlistJob->save();
            return response()->json(['message' => 'thêm tin tuyển dụng thành công']);
        }
        return response()->json(['message' => 'thêm tin tuyển dụng thất bại']);
    }

    function deleteWishListSingle($id)
    {
        if (request()->ajax())
        {
            $wishlish_delete = wishlistjobs::find($id)->delete();
            return response()->json();
        }
        return view('errors.404');
    }
}
