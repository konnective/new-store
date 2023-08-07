<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Trolly;
use App\Models\Item;

class CartController extends Controller
{
    // 
    // public $api;
    // public function __construct(Type $var = null)
    // {
    //     $this->api = new Api("", "");
    // }
    public $cartitems;
    public $cartcount;
    public $total = 0;


    public function makeOrder(Request $request)
    {
        return view('listings.success');
    }


    public function notOrder(Request $request)
    {
        return view('listings.cancel');
    }





    public function makeArder(Request $request, $amount)
    {
        // dd($amount);

        \Stripe\Stripe::setApiKey(env("STRIPE_APIKEY"));

        $items = Item::all();


        # code...
        // $lineItems[] = [
        //     [
        //         'price_data' => [
        //             'currency' => 'inr',
        //             'product_data' => [
        //                 'name' => 'some',
        //             ],
        //             'unit_amount' => 1,


        //         ],
        //         'quantity' => 2,
        //     ]
        // ];





        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'inr',
                        'product_data' => [
                            'name' => 'some',
                        ],
                        'unit_amount' => $amount * 100,


                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' =>   route('cancel'),
        ]);
        // dd($checkout_session->url);
        return redirect($checkout_session->url);
    }

    public function showcart()
    {
        return view('listings.shoppingcart');
    }


    public function basket()
    {

        $this->cartitems = Trolly::with('item')->where(['user_id' => auth()->user()->id])->get();
        $this->cartcount = Trolly::count();
        $this->total = 0;
        foreach ($this->cartitems as $pro) {
            $this->total += $pro->item->price *  $pro->quantity;
        }

        return view('listings.testingcart', ['cartcount' => $this->cartcount, 'cartitems' => $this->cartitems, 'total' => $this->total]);
    }
}
