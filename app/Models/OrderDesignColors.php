<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property string $color
 * @property string $datetime
 */
class OrderDesignColors extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['order_id', 'color', 'datetime'];
}
