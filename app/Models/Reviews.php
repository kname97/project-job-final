<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reviews
 *
 * @property int $id
 * @property string $reply_id
 * @property string $name
 * @property string $content
 * @property string $star
 * @property int $employee_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereReplyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereStar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reviews whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reviews extends Model
{
    //
}
