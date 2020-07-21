<?php

namespace App\Http\Controllers;

use App\Mail\OrderSent;
use App\Order;
use App\User;
use Barryvdh\DomPDF\PDF;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'shipping_fname' => 'required',
            'shipping_lname' => 'required',
            'shipping_email' => 'required',
            'shipping_city' => 'required',
            'shipping_county' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',

        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fname = $request->input('shipping_fname');
        $order->shipping_lname = $request->input('shipping_lname');
        $order->shipping_email = $request->input('shipping_email');
        $order->shipping_city = $request->input('shipping_city');
        //$order->cname = $request->input('cname');
        $order->shipping_county = $request->input('shipping_county');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if (!$request->has('billing_fullname')) {
            $order->billing_fname = $request->input('shipping_fname');
            $order->billing_lname = $request->input('shipping_lname');
            $order->billing_email = $request->input('shipping_email');
            $order->billing_county = $request->input('shipping_county');
            $order->billing_city = $request->input('shipping_city');
            //$order->cname = $request->input('cname');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        } else {
            $order->billing_fname = $request->input('billing_fname');
            $order->billing_lname = $request->input('billing_lname');
            $order->billing_email = $request->input('billing_email');
            $order->billing_county = $request->input('billing_county');
            $order->billing_city = $request->input('billing_city');
            //$order->cname = $request->input('cname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }

        //$order->subtotal = \Cart::session(auth()->id())->getSubTotal();
        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        if (request('payment_method') == 'flutter') {
            $order->payment_method = 'flutter';
        }

        $order->save();

        //save order items

        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        //payment
        if (request('payment_method') == 'flutter') {
            //redirect to checkout
            return redirect()->route('flutter');

        }

        /* if (request('payment_method') == 'mpesa') {
        //redirect to mpesa checkout
        return redirect()->route('homer');

        } elseif (request('payment_method') == 'card') {
        return redirect()->route('stripe');
        }*/

        $orders = Order::where('user_id', Auth::user()->id)->latest()->first();
        $cartItems = \Cart::session(auth()->id())->getContent();

        //send email to customer

        $pdf = \PDF::loadview('OrderPDF', compact('order', 'cartItems'));

        Mail::to($request->user())->send(new OrderSent($order, $pdf->output()));

        //$orders = Order::where('user_id', Auth::user()->id)->latest()->first();

        //return view('payment', ['order' => $order, 'cartItems' => $cartItems]);

        //empty cart
        \Cart::session(auth()->id())->clear();

        return redirect()->route('home')->withMessage('Your Order has been received. We are working to deliver it to you. Check email for Order details');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    /* public function viewOrderInvoice($order_id, User $user_id)
    {
    $orderDetails = Order::with('items')->where('id', $order_id)->first();
    $user_id = $orderDetails->user_id;
    $userDetails = User::where('id', $user_id)->first();
    return view('order_invoice')->with(compact('orderDetails', 'userDetails'));
    }*/

    public function approval(Order $order)
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        $products = DB::table('products')
            ->join('order_items', 'order_items.product_id', '=', 'products.id')
            ->get();

        $order = Order::with('items')->latest()->first();

        //$item = auth()->user()->order_items()->with('order_id')->latest()->first();

        //return view('approval', ['order' => $order, 'cartItems' => $cartItems]);

        $pdf = \PDF::loadview('approval', ['order' => $order]);

        return $pdf->download('OrderApproval.pdf');

    }

    public function updateorder(Order $order_Id)
    {
        $order = Order::find($order_Id);
        $order->is_paid = 1;
        $order->save();
        return redirect()->route('home');
    }

}
