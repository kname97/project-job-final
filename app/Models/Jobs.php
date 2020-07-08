<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use phpDocumentor\Reflection\Types\This;
use Carbon\Carbon;

class jobs extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
        'id',
        'title',
        'jobtype',
        'jobcategory',
        'minsalary',
        'maxsalary',
        'negotiable',
        'desciption',
        'position',
        'exp',
        'startdate',
        'enddate',
        'area',
        'amount',
        'email',
        'phone',
        'status',
        'user_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function getSearch($cate, $area ) {
        return DB::table('jobs as j')->where('j.status','=','1')
            ->Where('j.jobcategory','like','%'.$cate.'%')
            ->Where('j.area','like','%'.$area.'%')
            ->join('employers as er', 'j.user_id', '=', 'er.user_id')
            ->select('j.id', 'j.minsalary', 'j.maxsalary', 'j.area', 'j.negotiable', 'j.title', 'er.avatar', 'er.name',
                'er.id as id_employer')
            ->orderBy('j.updated_at', 'desc');

    }

    public static function getAlljobs($user_id)
    {
        return DB::table('jobs')->where('user_id', $user_id)->orderBy('updated_at', 'desc')->get();
    }
//    public static function getJobByCategory($category) {
//        $data = DB::table('jobs')->where('jobcategory',$category)->orderBy('updated_at','desc')->get();
//    }
    public static function getAllJobinHome()
    {

        return DB::table('jobs as j')->where('j.status','=','1')->where('startdate','<=',Carbon::now('Asia/Ho_Chi_Minh'))
            ->join('employers as er', 'j.user_id', '=', 'er.user_id')
            ->select('j.id', 'j.minsalary', 'j.maxsalary', 'j.area', 'j.negotiable', 'j.title', 'er.avatar', 'er.name','j.startdate','j.enddate'
                ,'er.id as id_employer')
        ->whereDate('j.enddate', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
            ->orderBy('j.updated_at', 'desc')->limit(9);
    }

    public static function getJobOwnEmployer($user_id)
    {
        return DB::table('jobs as j')->where('j.status','=','1')->where('j.user_id',$user_id)->join('employers as er', 'j.user_id', '=', 'er.user_id')
            ->select('j.id', 'j.minsalary', 'j.maxsalary', 'j.area', 'j.negotiable', 'j.title', 'er.avatar', 'j.enddate', 'er.name',
                'er.id as id_employer')
            ->whereDate('j.enddate', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
            ->orderBy('j.updated_at', 'desc');
    }


    public static function getSingleJobbyID ($job_id) {
        return DB::table('jobs as j')->where('j.id',$job_id)
            ->join('users as u', 'j.user_id','=','u.id')
            ->join('employers as er','j.user_id','=','er.user_id')
            ->select('j.id', 'j.minsalary', 'j.maxsalary', 'j.area', 'j.negotiable',
                'j.desciption as jdesciption','j.address as jaddress','j.area','j.startdate','j.enddate','j.jobtype',
                'j.title','j.jobcategory', 'er.avatar', 'er.name','er.city','er.business_sector',
                'er.address','er.district','er.city','er.id as id_employer')->first();
    }


    public static function getJobAdmin()
    {
        return DB::table('jobs as j')
            ->join('employers as er', 'j.user_id', '=', 'er.user_id')
            ->select('j.id', 'j.minsalary', 'j.maxsalary', 'j.area', 'j.jobcategory', 'j.title', 'er.avatar', 'j.startdate',
                'j.enddate', 'er.name','j.jobtype',
                'er.id as id_employer','j.status')

            ->orderBy('j.updated_at', 'desc')->get();
    }
}
