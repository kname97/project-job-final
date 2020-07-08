<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class employers extends Model
{
    //
    protected $table = 'employers';
    protected $fillable = [
        'id',
        'name',
        'avatar',
        'business_sector',
        'description',
        'phone',
        'skype',
        'address',
        'city',
        'district',
        'user_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function getEmployerandCountJob() {
        return DB::table('employers as er')
            ->join('users as u', 'er.user_id', '=','u.id')
            ->select('er.id','er.address','er.district','er.name','er.city','er.avatar','er.user_id',
                DB::raw('(SELECT COUNT(user_id) FROM jobs j WHERE j.user_id= u.id AND j.status = 1 ) as sumJob'))
            ->orderBy('sumJob','desc');
    }
}
