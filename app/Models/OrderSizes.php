<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property string $size
 * @property string $datetime
 */
class OrderSizes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['order_id', 'size', 'datetime'];
}
