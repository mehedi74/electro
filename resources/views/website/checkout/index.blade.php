@extends('website.master')
@section('title')
   Checkout
@endsection
@section('body')
   <!-- SECTION -->
   <div class="section">
       <!-- container -->
       <div class="container">
           <!-- row -->
           <div class="row">
               <form action="{{route('customer.place.order')}}" method="post" enctype="multipart/form-data">
                   @csrf
               <div class="col-md-6">
                   <h4 style="color: red;">{{session('msg')}}</h4>
                   <div class="billing-details">
                       <div class="section-title">
                           <h4 class="title">Shipping address<sup style="color: red">*</sup></h4>
                       </div>
                       <div class="form-group">
                           <input class="input" type="text" name="sp_name" placeholder="Full Name" required>
                       </div>
                       <div class="form-group">
                           <input class="input" type="email" name="sp_email" placeholder="Email" required>
                       </div>
                       <div class="form-group">
                           <input class="input" type="text" name="sp_address" placeholder="Address" required>
                       </div>
                       <div class="form-group">
                           <input class="input" type="text" name="sp_city" placeholder="City">
                       </div>
                       <div class="form-group">
                           <input class="input" type="text" name="sp_country" placeholder="Country">
                       </div>
                       <div class="form-group">
                           <input class="input" type="text" name="sp_zipcode" placeholder="ZIP Code">
                       </div>
                       <div class="form-group">
                           <input class="input" type="tel" name="sp_mobile" placeholder="Mobile">
                       </div>
                   </div>
               </div>
               <div class="col-md-5 order-details">
                   <div class="section-title text-center">
                       <h3 class="title">Your Order</h3>
                   </div>
                   @php
                       $cartProducts=getCartData();
                   @endphp
                   <div class="order-summary">
                       <div class="order-col">
                           <div><strong>PRODUCT</strong></div>
                           <div><strong>TOTAL</strong></div>
                       </div>
                       <div class="order-products">
                           @foreach($cartProducts as $cartProduct)
                               <div class="order-col">
                                   <div>{{$cartProduct['quantity']}}x {{$cartProduct['name']}}</div>
                                   <div>{{$cartProduct['price']}}</div>
                               </div>
                           @endforeach
                       </div>
                       <div class="order-col">
                           <div>Shiping</div>
                           <div><strong>Free</strong></div>
                       </div>
                       <div class="order-col">
                           <div><strong>TOTAL</strong></div>
                           <div><strong class="order-total">{{\Cart::getSubTotal()}}</strong></div>
                       </div>
                   </div>

                   <div>
                       <h5 style="color: red; text-align: center">Please select any payment method...</h5>
                   </div>
                       <div class="payment-method">
                           <div class="input-radio">
                               <input type="radio" name="payment" id="payment-1" value="cash" required>
                               <label for="payment-1">
                                   <span></span>
                                   Cash On Delivery
                               </label>
                               <div class="caption">
                                   <p>Cash on delivery is available...</p>
                               </div>
                           </div>
                           <div class="input-radio">
                               <input type="radio" name="payment" id="payment-2" value="bikash" required>
                               <label for="payment-2">
                                   <span></span>
                                   Bikash
                               </label>
                               <div class="caption">
                                   <p>Bikash No: 01755771232</p>
                               </div>
                           </div>
                           <div class="input-radio">
                               <input type="radio" name="payment" id="payment-3" value="nogod" required>
                               <label for="payment-3">
                                   <span></span>
                                   Nogod
                               </label>
                               <div class="caption">
                                   <p>Nogod No: 01755771232</p>
                               </div>
                           </div>
                       </div>
                       <div class="input-checkbox">
                           <input type="checkbox" id="terms">
                           <label for="terms">
                               <span></span>
                               I've read and accept the <a href="#">terms & conditions</a>
                           </label>
                       </div>
                       <button style="float: right" type="submit" class="primary-btn order-submit">Place order</button>
               </div>
               </form>

           <!-- /row -->
       </div>
       <!-- /container -->
   </div>
   <!-- /SECTION -->
@endsection

