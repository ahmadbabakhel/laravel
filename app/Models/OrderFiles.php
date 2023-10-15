<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property string $path
 * @property string $type
 * @property string $datetime
 */
class OrderFiles extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['order_id', 'path', 'type', 'datetime'];
}
