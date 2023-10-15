<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $company_name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $size
 * @property string $website
 * @property string $mobile
 * @property string $address
 * @property string $about
 * @property string $datetime
 */
class Profile extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'company_name', 'first_name', 'last_name', 'email', 'size', 'website', 'mobile', 'address', 'about', 'datetime'];
}
