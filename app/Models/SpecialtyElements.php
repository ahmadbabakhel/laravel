<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $specialty
 * @property string $order_id
 * @property string $datetime
 */
class SpecialtyElements extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'specialty', 'order_id', 'datetime'];
}
