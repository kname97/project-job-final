<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employees
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $gender
 * @property string $dob
 * @property string $description
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $district
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereDesciption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employees whereUserId($value)
 * @mixin \Eloquent
 */
class Employees extends Model
{
    protected $table ='employees';
    protected $fillable =[
        'lastname','firstname','gender','dob','description','phone','address','city','district',
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];

}
