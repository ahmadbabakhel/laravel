<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use  HasFactory; 
    protected $fillable = [
        'design_name',
        'order_type',
        'order_date',
        'comments',
    ];

    public function latestOrders(){
        
    }

    public function orderdBy(User $user)
    {
        return $this->likes->contains('user_by', $user->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function designs()
    {
        return $this->hasMany(DesignFormats::class);
    }
    public function files()
    {
        return $this->hasMany(OrderFiles::class);
    }
    public function specialty_elements()
    {
        return $this->hasMany(SpecialtyElements::class);
    }
    public function colors()
    {
        return $this->hasMany(OrderDesignColors::class);
    }
    public function garmentTypes()
    {
        return $this->hasMany(OrderGarrmentTypes::class);
    }

    
}
