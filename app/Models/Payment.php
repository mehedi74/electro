<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\Order;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['payment_method','status','created_at','updated_at'];

    static function placeOrder($req){

        $sp_id=Shipping::insertGetId([
            'name'=>$req->sp_name,
            'email'=>$req->sp_email,
            'address'=>$req->sp_address,
            'city'=>$req->sp_city,
            'country'=>$req->sp_country,
            'zip_code'=>$req->sp_zipcode,
            'mobile'=>$req->sp_mobile,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $paymentMethodId=Payment::insertGetId([
            'payment_method'=>$req->payment,
            'status'=>'pending',
        ]);

        $orderId=Order::insertGetId([
            'customer_id'=>Session::get('customer_id'),
            'shipping_id'=>$sp_id,
            'payment_id'=>$paymentMethodId,
            'total'=>\Cart::getSubTotal(),
            'status'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $cartProducts=getCartData();
        foreach ($cartProducts as $cartProduct){
            $data=new OrderDetail();
            $data->order_id=$orderId;
            $data->product_id=$cartProduct['id'];
            $data->product_name=$cartProduct['name'];
            $data->product_color=$cartProduct['attributes']['color'];
            $data->product_size=$cartProduct['attributes']['size'];
            $data->product_sales_quantity=$cartProduct['attributes']['quantity'];
            $data->status='1';
            $data->save();
        }
        \Cart::clear();
    }
}
