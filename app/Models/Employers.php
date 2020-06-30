<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employers extends Model
{
    //
    protected $table = 'employers';
    protected $fillable =[
        'id','name','avartar','cover','business_sector','desciption','phone','skype','address','city','district','user_id'
    ];
    protected $hidden = [
        'created_at','updated_at'
    ];
}
