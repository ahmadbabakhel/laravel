<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property string $garment_type
 * @property string $datetime
 */
class OrderGarrmentTypes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['order_id', 'garment_type', 'datetime'];
}
