<?php

namespace App\Http\Controllers\Frontend;

use Cart;
use App\User;
use App\Cupon;
use Carbon\Carbon;
use App\OrderPlace;
use App\UserAddress;
use App\OrderStorage;
use App\UserUsedCupon;
use App\ProductStorage;
use App\ShippingAddress;
use App\UpozilaCouriers;
use App\Logo;
use Illuminate\Http\Request;
use App\DatabaseStorageModel;
use App\DeleveryAmount;
use App\Mail\OrderSuccessfullMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;


class CheckoutController extends Controller
{
    // show checkout controller

    public function checkoutshow()
    {
        $userid =  \Request::getClientIp(true);
        $cartdata = Cart::session($userid)->getContent();
        if (count($cartdata) > 0) {
            if (Auth::check()) {
                $order_id = rand(100, 100000);
                $useraddress = UserAddress::where('user_id', Auth::user()->id)->first();
                return view('frontend.shopping.checkout', compact('order_id', 'useraddress'));
            } else {

                return view('frontend.accounts.checkout_login');
            }
        } else {
            return redirect('/')->with('alertmessege', 'Please add some product');
        }
    }

    // Show Checkout Login form

    public function CustomerLogin()
    {
        return view('frontend.accounts.checkout_login');
    }



    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'login_email' => 'required',
            'login_password' => 'required',
        ]);
        // $admin = User::where('email', request('email'))->first();
        $admin = User::where('email', request('login_email'))->where('status', 1)->first();
        if ($admin) {
            if (Auth::attempt(['email' => $request->login_email, 'password' => $request->login_password])) {
                return redirect()->intended(route('checkout.page.show'));
            }
        } else {
            session()->flash('errorMsg', 'Sorry !! Email or Password not matched! or You are not verify user!');
            return redirect()->route('checkout.login.show');
        }
    }

    public function applyCupon(Request $request)
    {
        if (Cupon::where('cupon_code', $request->cuponvalue)->exists()) {
            $cuponuser = Cupon::where('cupon_code', $request->cuponvalue)->first();

            if (UserUsedCupon::where('cupon_id', $cuponuser->id)->where('user_ip', Auth::user()->id)->doesntExist()) {

                if (Cupon::where('cupon_code', $request->cuponvalue)->first()->cupon_type == 1) {

                    $userid =  \Request::getClientIp(true);
                    $cartdata = Cart::session($userid)->getContent();
                    $carttotal = Cart::session($userid)->getTotal();

                    $cuponminimum = Cupon::where('cupon_code', $request->cuponvalue)->first()->minimum_shopping;
                    $cupondiscount = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                    $cupondiscounttype = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount_type;
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount . '%';
                    if ($cuponminimum <= $carttotal) {


                        if ($cupondiscounttype == 1) {

                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => -$cupondiscount,
                            ));
                        } else {

                            $condition = new \Darryldecode\Cart\CartCondition(array(
                                'name' => 'Minimum_shopping',
                                'type' => 'coupon',
                                'target' => 'total',
                                'value' => '-' . $cupondiscountspers,
                            ));
                        }
                        Cart::session($userid)->condition($condition);
                        UserUsedCupon::insert([
                            'user_ip' => Auth::user()->id,
                            'cupon_id' => $cuponuser->id,
                            'order_id' => $request->order,
                            'created_at' => Carbon::now(),
                        ]);
                        $cuponinfo = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                        return response()->json([
                            'cuponalert' => "Cupon insert successfully!",
                        ]);
                    } else {
                        return response()->json([

                            'cuponalert' => "Your minimum purchese is less than minimum shopping criteria!",
                        ]);
                    }
                } else {
                    $userid =  \Request::getClientIp(true);
                    $carttotal = Cart::session($userid)->getTotal();
                    $cartdatas = Cart::session($userid)->getContent();

                    $cuponminproducts = Cupon::where('cupon_code', $request->cuponvalue)->first()->product_id;
                    $cupondiscountspers = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount . '%';
                    $cupondiscounts = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount;
                    $cupondiscounttype = Cupon::where('cupon_code', $request->cuponvalue)->first()->discount_type;

                    foreach ($cartdatas as $cartdata) {

                        foreach (json_decode($cuponminproducts) as $cuponminproduct) {
                            if ($cartdata->attributes->product_id == $cuponminproduct) {


                                if ($cupondiscounttype == 1) {
                                    $condition = new \Darryldecode\Cart\CartCondition(array(
                                        'name' => 'Percentage',
                                        'type' => 'coupon',
                                        'target' => 'total',
                                        'value' => -$cupondiscounts,
                                    ));
                                    Cart::session($userid)->condition($condition);
                                    $insertcupon = UserUsedCupon::insertGetId([
                                        'user_ip' => Auth::user()->id,
                                        'cupon_id' => $cuponuser->id,
                                        'order_id' => $request->order,
                                        'created_at' => Carbon::now(),

                                    ]);
                                } else {

                                    if ($cartdata->attributes->has('variation')) {
                                        Cart::update($cartdata->id, array(
                                            'price' => $cartdata->price - $cartdata->price * $cupondiscounts / 100,
                                        ));
                                        $insertcupon = UserUsedCupon::insertGetId([
                                            'user_ip' => Auth::user()->id,
                                            'cupon_id' => $cuponuser->id,
                                            'order_id' => $request->order,
                                            'created_at' => Carbon::now(),

                                        ]);
                                    }
                                }
                            }
                        }
                    }
                }
            } else {
                return response()->json([
                    'cuponalert' => "You are alrady used this cupon",
                ]);
            }
        } else {

            return response()->json([
                'cuponalert' => "No Cupon Available On this code.",
            ]);
        }

        if (isset($insertcupon)) {
            return response()->json([
                'cuponalert' => "Cupon insert successfully!",
            ]);
        } else {
            return response()->json([
                'cuponalert' => "Cupon is not applicable for this Product!",
            ]);
        }
    }

    // order submit area start
  // order submit area start

    public function orderSubmit(Request $request)
    {


      

        // user data validation
      

        $validatedData = $request->validate([
            'user_id' => 'required',
            'user_address' => 'required',
            'user_post_office' => 'required',
            'user_postcode' => 'required',
            'user_country_id' => 'required',
            'user_division_id' => 'required',
            'user_district_id' => 'required',
            'user_upazila_id' => 'required',
            'privacy' => 'accepted',
            'agree' => 'accepted',
            'payment_type' => 'required',
        ]);


        // user data insert

        $usseraddress_id = UserAddress::insertGetId([
            'user_id' => $request->user_id,
            'user_address' => $request->user_address,
            'user_post_office' => $request->user_post_office,
            'user_postcode' => $request->user_postcode,
            'user_country_id' => $request->user_country_id,
            'user_division_id' => $request->user_division_id,
            'user_district_id' => $request->user_district_id,
            'user_upazila_id' => $request->user_upazila_id,
            'is_shipping_address' => $request->is_shipping_address,
            'created_at' => Carbon::now(),
        ]);


        // if user insert shipping data


        if (UserAddress::findOrFail($usseraddress_id)->is_shipping_address == NULL) {

            $request->validate([
                'shipping_name' => 'required',
                'shipping_name' => 'required',
                'shipping_phone' => 'required',
                'shipping_customer_address' => 'required',
                'shipping_post_office' => 'required',
                'shipping_postcode' => 'required',
                'shipping_country_id' => 'required',
                'shipping_division_id' => 'required',
                'shipping_district_id' => 'required',
                'shipping_upazila_id' => 'required',
            ]);

            ShippingAddress::insert([
                'shipping_user_id' => $request->shipping_user_id,
                'shipping_name' => $request->shipping_name,
                'shipping_phone' => $request->shipping_phone,
                'shipping_address' => $request->shipping_customer_address,
                'shipping_post_office' => $request->shipping_post_office,
                'shipping_postcode' => $request->shipping_postcode,
                'shipping_country_id' => $request->shipping_country_id,
                'shipping_division_id' => $request->shipping_division_id,
                'shipping_district_id' => $request->shipping_district_id,
                'shipping_upazila_id' => $request->shipping_upazila_id,
                'order_id' => $request->order_id,
                'created_at' => Carbon::now(),
            ]);
        }

       



        $userid =  \Request::getClientIp(true);
        $useriditem =  \Request::getClientIp(true) . '_cart_items';
        $useridcondition =  \Request::getClientIp(true) . '_cart_conditions';
        $purchase_key = DatabaseStorageModel::findOrFail($useriditem)->purchase_key;




        // get the cupon value which is insert within 2 minutes ago


        
        $cuponid = UserUsedCupon::where('user_ip',Auth::user()->id)->where('status',0)->orderBy('id', 'DESC')->first();

        if (isset($cuponid)) {
            $cupondata = Cupon::findOrFail($cuponid->cupon_id);
            $cupondiscount =$cupondata->discount;
           
            $cupondiscounttype = $cupondata->discount_type;
        }else{
            $cupondiscount = 0;
            $cupondiscounttype = 0;
        }


        // get the delevery amount

            if (UserAddress::findOrFail($usseraddress_id)->is_shipping_address == NULL) {

            $deleveryamount = DeleveryAmount::first();


            if ($request->shipping_division_id == 6) {
                $deleverycharge =$deleveryamount->insidedhaka;
                $totalprice =Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge;
            }else{
                $deleverycharge =$deleveryamount->outsidedhaka;
                $totalprice =Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge;
            }
        }else{
            $user_division = UserAddress::findOrFail($usseraddress_id);
            $deleveryamount = DeleveryAmount::first();
            if ($user_division->user_division_id == 6) {
                $deleverycharge =$deleveryamount->insidedhaka;
                $totalprice =Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge;
            }else{
                $deleverycharge =$deleveryamount->outsidedhaka;
                $totalprice =Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge;
            }

        }


        // Insert data in order place table


        $orderPlaceId = OrderPlace::insertGetId([
            'shipping_id' => $request->shipping_id,
            // 'payment_method_id' => $request->payment_method_id,

            'payment_type' => $request->payment_type,
            'comment' => $request->comment,
            'order_id' => $request->order_id,
            'user_id' => Auth::user()->id,
            'cart_id' => $purchase_key,
            'total_price' => $totalprice,
            'total_quantity' => $request->total_quantity,
            'payment_secure_id' => md5($request->order_id),
            'cupon_value' => $cupondiscount,
            'cupon_type' =>$cupondiscounttype,
            'created_at' => Carbon::now(),
        ]);



        // insert data in product storese 

        $orderid = $request->order_id;

        $usercartdatas = Cart::session(\Request::getClientIp(true))->getContent();


        $products = array();

        foreach ($usercartdatas as $usercartdata) {
            $item['id'] = $usercartdata->attributes->product_id;
            $item['name'] = $usercartdata->name;
            $item['price'] = $usercartdata->price;
            $item['quantity'] = $usercartdata->quantity;
            $item['sku'] = $usercartdata->attributes->sku;
            $item['flashdeals'] = $usercartdata->attributes->flashdeals;
            $item['flashdealtype'] = $usercartdata->attributes->flashdealtype;
            array_push($products, $item);
        }

        ProductStorage::insert([
            'product_details' => json_encode($products),
            'order_id' => $orderid,
            'shipping_amount'=>$deleverycharge,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        // delete exsit userdata

        $userdetails = UserAddress::where('user_id', Auth::user()->id)->get();
        $userdatacount = count($userdetails);

        if ($userdatacount > 1) {
            $userdatas = UserAddress::where('user_id', Auth::user()->id)->first()->delete();
        }

        // delete cart data

        DatabaseStorageModel::where('id', $useriditem)->first()->delete();
        if (DatabaseStorageModel::where('id', $useridcondition)->first()) {
            DatabaseStorageModel::where('id', $useridcondition)->first()->delete();
        }

        // change status in user used cupon

        if(isset($cuponid)){
            UserUsedCupon::where('user_ip',Auth::user()->id)->where('status',0)->update([
                'status'=>1,
            ]);
        }
        
        $getOrder = OrderPlace::where('id', $orderPlaceId)->select(['id','order_id', 'payment_secure_id' , 'total_price', 'created_at'])->first();
        $siteSettings = DB::table('sitesetting')->select('company_name', 'address', 'facebook', 'twitter', 'instagram')->first();
        $frontLogo = Logo::select(['front_logo'])->first();
        if (Auth::user()->email) {
            Mail::to(Auth::user()->email)->send(new OrderSuccessfullMail($getOrder, $frontLogo, $siteSettings));
        }

        if ($request->payment_type == 1) {
            $notification = array(
                'messege' => 'Successfully you order is confirmed',
                'alert-type' => 'success'
            );

            return redirect()->route('customer.order')->with($notification);

        } else {
            return redirect()->route('order.payment', $getOrder->payment_secure_id);
        }

        // return OrderStorage::where('purchase_key', $purchase_key)->first()->cart_data;

    }


    public function userCountrySubmit($id)
    {

        $divisions = DB::table('divisions')->where('country_id', $id)->get();
        return response()->json($divisions);
    }

    public function userDivisionSubmit($id)
    {
        $divisions = DB::table('districts')->where('division_id', $id)->get();
        return response()->json($divisions);
    }

    public function userUpazilaSubmit($id)
    {

        $divisions = DB::table('upazilas')->where('district_id', $id)->get();
        return response()->json($divisions);
    }


    public function orderData()
    {
        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }

    public function orderDataUpdate(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $updatecart = Cart::session($userid)->update(
            $request->rowid,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            )
        );

        if ($updatecart) {
            $userid =  \Request::getClientIp(true);
            $usercartdatas = Cart::session($userid)->getContent();
            // return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
            return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
        } else {
            return 0;
        }
    }

    // Order Place delete
    public function orderDataDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $datadelete = Cart::session($userid)->remove($request->user_id);
        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }

    public function getCourierByUpazila($upazilaId)
    {
        $getCourierIdByUpId =  UpozilaCouriers::where('upazila_id', $upazilaId)->get();
        return view('frontend.shopping.ajax_view.couriers', compact('getCourierIdByUpId'));
    }

    // paypal add
    public function paywithpaypal()
    {
        $provider = new ExpressCheckout;
        $invoiceId = uniqid();
        $data = $this->cartData($invoiceId);
        $response = $provider->setExpressCheckout($data);
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);
    }
    // success


    public function paymentsuccess(Request $request)
    {
        $provider = new ExpressCheckout;
        $token = $request->token;
        $PayerID = $request->PayerID;
        $response = $provider->getExpressCheckoutDetails($token);
        $invoiceId = $response['INVNUM'] ?? uniqid();
        $data = $this->cartData($invoiceId);
        $response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);
        //dd($response);
        $userid = Auth::user()->id;
        $usercartdatas = OrderPlace::where('user_id', $userid)->orderBy('id', 'DESC')->first();
        $update = OrderPlace::where('id', $usercartdatas->id)->update([
            'is_paid' => '1',
        ]);
        return redirect()->route('payment.paypal.success');
    }

    protected function cartData($invoiceId)
    {
        $data = [];
        $data['items'] = [];
        // $userid =  \Request::getClientIp(true);
        // $usercartdatas = Cart::session($userid)->getContent();
        $userid = Auth::user()->id;
        $usercartdatas = OrderPlace::where('user_id', $userid)->orderBy('id', 'DESC')->first();
        $cartid = $usercartdatas->cart_id;

        $orderstorage = OrderStorage::where('purchase_key', $cartid)->first();

        foreach (json_decode($orderstorage->cart_data) as $key => $cart) {
            $itemdetails = [
                'name' => $cart->name,
                'price' => $cart->price,
                'qty' => $cart->quantity,
            ];
            $data['items'][] = $itemdetails;
        }

        $data['invoice_id'] = $usercartdatas->order_id;
        $data['invoice_description'] = $invoiceId;
        $data['return_url'] = url('/payment/success');
        $data['cancel_url'] = url('/text');

        $total = 0;
        $shipping = 10;

        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }
        $data['total'] = $total;
        return $data;
    }

    public function applyCuponValue($oderid)
    {

        $userusedcupon = UserUsedCupon::where('order_id', $oderid)->where('user_ip', Auth::user()->id)->first();

        $cupon = Cupon::findOrFail($userusedcupon->cupon_id);

        if ($cupon->discount_type == 1) {
            $cupondatavalue = '৳ ' . $cupon->discount;
            
        } elseif($cupon->discount_type == 2) {

            $cupondatavalue = $cupon->discount . '%';
        }

        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas', 'cupondatavalue','cupon'));
    }

    public function checkCourierCashOnDeliviry($upazila_id, $courier_id)
    {
        $courier = UpozilaCouriers::where('upazila_id', $upazila_id)->where('courier_id', $courier_id)->first();
        return response()->json(['data' => $courier->is_cash_on_delivery]);
    }

     // get shipping charge value

     public function shippingChargeValue($id)
     {
         $deleveryamount =DeleveryAmount::first();
         $userid =  \Request::getClientIp(true);
 
         $usercartdatas = Cart::session($userid)->getContent();
 
         if($id == 6){
             $deleverycharge =$deleveryamount ->insidedhaka;
         }else{
             $deleverycharge =$deleveryamount ->outsidedhaka;
         }
         
     
         return view('frontend.shopping.extra_orderajaxdata', compact('deleverycharge','usercartdatas'));
 
     }
 
     // send shipping value to the input field
 
     public function shippingChargeValueSend($id)
 
     {
         $deleveryamount =DeleveryAmount::first();
         $userid =  \Request::getClientIp(true);
         $usercartdatas = Cart::session($userid)->getContent();
 
         if($id == 6){
             $deleverycharge =$deleveryamount ->insidedhaka;
         }else{
             $deleverycharge =$deleveryamount ->outsidedhaka;
         }
         $totalpricewithcharge =Cart::session(\Request::getClientIp(true))->getTotal() + $deleverycharge;
         
         return response()->json([
             'deleverycharge'=>$deleverycharge,
             'totalpricewithcharge'=>$totalpricewithcharge,
         ]);
     }
}
