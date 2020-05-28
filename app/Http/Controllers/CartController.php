<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {

        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            // 'img' => $product->cover_img,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product,
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $VAT = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT',
            'type' => 'tax',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '14.0%',
            'order' => 2,

        ));
        $shipping = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Shipping Charges',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '+150',
            'order' => 1,

        ));

        $cartItems = \Cart::session(auth()->id())->getContent();
        view()->share('cartItems', $cartItems);

        \Cart::session(auth()->id())->condition($VAT);
        \Cart::session(auth()->id())->condition($shipping);

        return view('cart.index', compact('cartItems'));
    }

    public function destroy($itemId)
    {

        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    public function update($rowId)
    {

        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => [
                'relative' => false,
                'value' => request('quantity'),
            ],
        ]);

        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }

    public function applyCoupon()
    {
        $couponCode = request('coupon_code');

        $couponData = Coupon::where('code', $couponCode)->first();
        if (!$couponData) {
            return back()->withMessage('Sorry, Coupon does not exist');
        }

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => $couponData->value,

        ));
        \Cart::session(auth()->id())->condition($condition);

        return back()->withMessage('Coupon Applied');
    }

    public function applyTax()
    {
        $VAT = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT',
            'type' => 'tax',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '14.0%',
            'order' => 2,

        ));
        $shipping = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Shipping Charges',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '+150',
            'order' => 1,

        ));
        \Cart::session(auth()->id())->condition($VAT);
        \Cart::session(auth()->id())->condition($shipping);

        return back();

    }

}
