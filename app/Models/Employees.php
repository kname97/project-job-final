<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = "employees";

    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'avartar',
        'cover',
        'gender',
        'dob',
        'description',
        'phone',
        'addpress',
        'city',
        'district',
        'tag_skill',
        'hobby',
        'university',
        'user_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    /**
     * @var array|mixed|string|null
     */
    private $firstname;

    function getDataSingle() {

    }

}
