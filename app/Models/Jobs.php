<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Jobs
 *
 * @property int $id
 * @property string $title
 * @property string $desciption
 * @property string $jobtype
 * @property string $minsalary
 * @property string $maxsalary
 * @property int $ negotiable
 * @property int $amount
 * @property string $position
 * @property int $exp
 * @property string $startdate
 * @property string $contact
 * @property string $email
 * @property string $phone
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereDesciption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereJobtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereMaxsalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereMinsalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereNegotiable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereStartdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Jobs whereUserId($value)
 * @mixin \Eloquent
 */
class Jobs extends Model
{
    protected  $table = 'jobs';

    protected $fillable = ([
        'id','title','desciption','jobtype','minsalary','maxsalary','negotiable','amount','position','exp','startdate','contact','email','phone'
    ]);
    protected $hidden = ([
        'user_id'
    ]);
}
