<?php

namespace App\Http\Controllers\Admin;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\User;

class DefineAdminController extends Controller
{
   function __contruct()
   {
       $this->middleware('checkAdmin');
   }
   function getAccounts()
   {
       return view('admin.pagesAdmin.accountsAdmin');
   }
   function getListAcounts(){
       Carbon::setLocale('vi');
       $users = User::select(['id','username','email','level','created_at','updated_at'])->where('level', '!=', 0);
       if (request()->ajax()) {
           return DataTables::of($users)
               ->editColumn('created_at', function ($user){
               return $user->created_at ? with(new Carbon($user->created_at))->diffForHumans() : '';
               })
               ->editColumn('updated_at', function ($user){
               return $user->updated_at ? with(new Carbon($user->updated_at))->diffForHumans() : '';
                })
               ->editColumn('level', function ($user){
                   if($user->level == 1)
                       return $user->level = 'Người tìm việc';
                   if ($user->level == 2)
                       return $user->level = 'Nhà tuyển dụng';
               })
               ->addColumn('action', function ($user) {
                   $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $user->id . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="' . $user->id . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                   return $buttons;
               })
               ->rawColumns(['action'])
               ->make(true);
       }
       return view('errors.404');
   }
   //delete account
   function deleteAccount($id){
       if (request()->ajax()) {
           $findAccount = User::find($id)->delete();
           return response()->json($findAccount);
       }
       return view('errors.404');
   }
   // edit account
    function  editAccount($id){
       $where = array('id'=>$id);
       $editAccount = User::where($where)->first();
       return response()->json($editAccount);
    }
    function saveAccount(Request $request){
       if($request->ajax()){
           $id = $request->input('user_id');
           $username = $request->input('editusername');
           $email = $request->input('editemail');
           $level = $request->input('editlevel');
           if(isset($id)){
               if($username == null || $email == null){
                   return response()->json(['message'=> 'Bạn chưa nhập đủ thông tin'],400);
               }
               $users = User::updateOrCreate(
                   ['id' => $id],
                   ['username' => $username],
                   ['email' => $email],
                   ['level' => $level]
               );
               return response()->json($users);
           }
           $users = new  User();
           $users->username = $username;
           $users->email = $email;
           $users->level = $level;
           $users->save();
       }
        return view('errors.404');
    }
   function getApplies()
   {
       return view('admin.pagesAdmin.appliesAdmin');
   }
   function getReviews()
   {
       return view('admin.pagesAdmin.reviewsAdmin');
   }
   function getRanks()
   {
       return view('admin.pagesAdmin.ranksAdmin');
   }
}
