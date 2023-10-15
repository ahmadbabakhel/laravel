<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $design_format
 * @property integer $order_id
 * @property string $datetime
 */
class DesignFormats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['design_format', 'order_id', 'datetime'];
}
