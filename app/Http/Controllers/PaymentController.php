<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;


class PaymentController extends Controller
{
    //

    public function pay(Request $request){
        \Stripe\Stripe::setApiKey('sk_test_51HBGbZBmFhsSLPTs1DqQsz8Kx24zdMe9UdivJohTr9WlX0vQscx4XGy5DEeB6x808AJjwP5hp9VOdHCyAJ4cUQaT00vZIVr9xS');//シークレットキー
        $token = $_POST['stripeToken'];
    
          $charge = Charge::create(array(
               'amount' => 100,
               'currency' => 'jpy',
               'source'=>$token,
           ));
         return back();
        }

//     public function pay(Request $request)
// {
//     return $request->user()->redirectToBillingPortal(route('billing'));
//     $url = $user->billingPortalUrl(route('billing'));

}

