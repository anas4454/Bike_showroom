<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirm as MailOrderConfirm;
use App\Models\OrderConfirm;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web-pages.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function allProducts()
    {
        $products = Product::all();

        return view('web-pages.all-products', compact('products'));
    }

    public function singleProduct(Product $product)
    {
        return view('web-pages.single-product', compact('product'));
    }

    public function account(OrderConfirm $order)
    {
        return view('web-pages.user-account', compact('order'));
    }

    public function cart()
    {
        return view('web-pages.cart');
    }

    public function checkout(Product $product)
    {
        // dd($product);
        return view('web-pages.checkout', compact('product'));
    }

    public function confirm_email()
    {

        Mail::to('anasch14g@gmail.com')->send(new MailOrderConfirm);

        return 'email sent';
    }

    public function createorder(Request $request, Product $product)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],

        ]);
        //  dd($product);
        $order = OrderConfirm::create([
            'oderid' => 'ORD'.time(),
            'productId' => $product->id,
            'total_price' => $product->new_price + ($product->new_price * 0.1),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'payment_method' => 'cod',
            'order_status' => 'pending',
            'payment_status' => 'pending',
        ]);

        return redirect()->route('account', $order);
    }

    public function stripecheckout(Request $request, Product $product)
    {

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->new_price * 100,

                ],
                'quantity' => 1,

            ]],
            'mode' => 'payment',

            'metadata' => [
                'product_id' => $product->id,
                'product_slug' => $product->slug,
            ],

            'success_url' => route('stripe.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel').'?session_id={CHECKOUT_SESSION_ID}',

        ]);

        return redirect()->away($session->url);

    }

    public function stripeSuccess(Request $request)
    {

        $session_id = $request->query('session_id');

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::retrieve($session_id);

        if ($session->payment_status == 'paid') {
            $order = OrderConfirm::create([
                'oderid' => 'ORD'.time(),
                'productId' => $session->metadata->product_id,
                'total_price' => $session->amount_total / 100,
                'name' => $session->customer_details->name,
                'email' => $session->customer_details->email,
                'phone' => $session->customer_details->phone,
                'city' => '',
                'address' => '',
                'payment_method' => 'card',
                'order_status' => 'pending',
                'payment_status' => 'paid',
            ]);

            return redirect()->route('account', $order);

        }

    }
}
