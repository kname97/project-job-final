<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  DB;
class wishlistemployers extends Model
{
    //
    public $timestamps = false;
    protected $table = 'wishlistemployers';
    protected $fillable = [
      'id','user_id','employer_id'
    ];
    public static function checkWishListUser($employer_id) {
        return DB::table('wishlistemployers')->where('employer_id',$employer_id)->first();
    }
    public static function WishList($user_id) {
        return DB::table('wishlistemployers as wler')->where('wler.user_id',$user_id)
            ->join('employers as er' ,'wler.employer_id','=','er.id')
            ->select('wler.id as wl_id','er.id','er.name','er.address','er.district','er.city','wler.employer_id','wler.user_id')
            ->orderBy('er.name','asc')
            ->get();
    }
    public  static  function WishListShow($user_id) {
        return DB::table('wishlistemployers as wler')->where('wler.user_id', $user_id)
            ->join('employers as er','wler.employer_id', '=','er.id')
            ->select('er.*','wler.*')->get();
    }

    public static function getRankbyWishListEmployer () {
        return DB::table('wishlistemployers as wler')
            ->join('employers as er', 'wler.employer_id', '=', 'er.id')
            ->select('er.name','er.city','er.avatar', 'wler.employer_id','er.address','er.district',
                DB::raw('(SELECT COUNT(employer_id) FROM wishlistemployers wler WHERE wler.employer_id=er.id) as sumWL'))
            ->groupBy('sumWL','er.name','er.city','er.avatar','wler.employer_id','er.address','er.district')
            ->orderBy('sumWL','desc')->get();
    }

//    public static  function  getRankbyWishListEmployer() {
//        return DB::table('employers as er')->w
//            ->join('wishlistemployers as wler' ,'er.id','=','wler.employer_id' )
//            ->select('er.name','er.city','er.avatar', 'er.user_id',
//                DB::raw('(SELECT COUNT(employer_id) FROM wishlistemployers wler WHERE wler.employer_id=er.id) as sumWL'))
//            ->orderBy('sumWL','desc')->get();
//    }

}
