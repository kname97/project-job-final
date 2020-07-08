<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use  App\Models\employers;
use App\Models\wishlistemployers;

class wishlistEmployerController extends Controller
{
    function __construct()
    {
        $this->middleware('employee');
    }

    function index()
    {
        $user_id = Auth::user()->id;
        $wishList = wishlistemployers::WishList($user_id);

//        dd( $wishList); exit();
        return view('employee.wishlistEmployer',compact('wishList'));
    }

    function addWishlistmployer($id)
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);
        $employer_id = employers::find($id)->id;
        if (request()->ajax()) {
            $addWishlistEmployer = new wishlistemployers();
            $addWishlistEmployer->user_id = $user_id;
            $addWishlistEmployer->employer_id = $employer_id;
//            $addWishlistEmployer->added = 1;
            $addWishlistEmployer->save();
            return response()->json(['message' => 'thêm nhà tuyển dụng thành công']);
        }
        return response()->json(['message' => 'thêm nhà tuyển dụng thất bại']);
    }

    function deleteWishListSingle($id)
    {
        if (request()->ajax())
        {
            $wishlish_delete = wishlistemployers::find($id)->delete();
            return response()->json($wishlish_delete);
        }
        return view('errors.404');
    }
    
}
