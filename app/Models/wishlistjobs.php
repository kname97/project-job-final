<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class wishlistjobs extends Model
{
    //
    public $timestamps = false;
    protected $table = 'wishlistjobs';
    protected $fillable = [
        'id','user_id','job_id'
    ];
    public static function checkWishListJob($job_id) {
        return DB::table('wishlistjobs')->where('job_id',$job_id)->first();
    }

    public static function WishList($user_id) {
        return DB::table('wishlistjobs as wlj')->where('wlj.user_id',$user_id)
            ->join('jobs as j' ,'wlj.job_id','=','j.id')
            ->select('wlj.id as wl_id','j.id','j.title','j.minsalary','j.amount', 'j.maxsalary', 'j.area','j.phone', 'j.negotiable',
                'j.jobtype','j.jobcategory','wlj.job_id','wlj.user_id')
            ->orderBy('j.title','asc')
            ->get();
    }
}
