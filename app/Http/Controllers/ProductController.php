<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirm as MailOrderConfirm;
use App\Models\Product;
use App\Models\OrderConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function cart()
    {
        return view('web-pages.cart');
    }

    public function checkout(Product $product)
    {
        // dd($product);
        return view('web-pages.checkout' , compact('product'));
    }


    public function confirm_email(){

        Mail::to('anasch14g@gmail.com')->send (new MailOrderConfirm());

        return 'email sent';
    }

    public function createorder(Request $request , Product $product){

        $request->validate([
            'name' => ['required' , 'string'] ,
            'email' => ['required','email'],
            'phone' => ['required','string'],
            'city' => ['required','string'],
            'address' => ['required','string'],
        ]);
//  dd($product);
        OrderConfirm::create([
            'oderid' => 'ORD'.time(),
            'productId' => $product->id,
            'total_price' => $product->new_price + ($product->new_price * 0.1 ),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'payment_method' => 'cod',
            'order_status' => 'pending',
            'payment_status' => 'pending',
        ]);

        return view('web-pages.user-account');
    }




    public function account()
    {
        return view('web-pages.user-account');
    }
}
