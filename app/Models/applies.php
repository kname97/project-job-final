<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class applies extends Model
{
    //

    protected $table = 'applies';
    protected $fillable = [
        'id','user_id','job_id','status'
    ];

    public static function checkWishListApply($job_id) {
        return DB::table('applies')->where('job_id',$job_id)->first();
    }

    public  static  function  getJobApplied($user_id) {
        return DB::table('applies as a')->where('a.user_id',$user_id)
            ->join('jobs as j', 'a.job_id','=','j.id')
            ->select('a.id as apply_id','a.status','j.id','j.title','j.minsalary','j.maxsalary',
                'j.amount','j.jobtype','j.jobcategory',  'j.area','j.phone', 'j.negotiable','j.startdate','j.enddate' )
            ->orderBy('apply_id','asc')
            ->get();
    }

    public static function getApplied ($user_id) {
        return DB::table('jobs as j')->where('j.user_id',$user_id)
            ->join('applies as a','j.id','=','a.job_id')
            ->select('a.id as apply_id','j.title','j.startdate','j.enddate','a.user_id','a.status','j.id','j.user_id as user_id_employer')
            ->get();
    }

    public static function getApplíeAll()
    {
        return DB::table('jobs as j')
            ->join('applies as a','j.id','=','a.job_id')
            ->select('a.id as apply_id','j.title','a.user_id','a.status','j.id',
                'j.user_id as user_id_employer','j.startdate','j.enddate')
            ->get();
    }
}
