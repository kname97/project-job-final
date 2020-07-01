<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use phpDocumentor\Reflection\Types\This;

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
        'user_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function getAlljobs($user_id)
    {
        return DB::table('jobs')->where('user_id', $user_id)->orderBy('updated_at', 'desc')->get();
    }
//    public static function getJobByCategory($category) {
//        $data = DB::table('jobs')->where('jobcategory',$category)->orderBy('updated_at','desc')->get();
//    }
    public  static  function getAllJobinHome()
    {
        return DB::table('jobs')->orderBy('updated_at', 'desc')->get();
    }
}
