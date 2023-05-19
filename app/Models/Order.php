<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id','status','customer_id','shipping_id','payment_id','total','created_at','updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

}
