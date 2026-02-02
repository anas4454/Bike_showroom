<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Mail\OrderConfirm;
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

    public function checkout()
    {
        return view('web-pages.checkout');
    }

    public function account()
    {
        return view('web-pages.user-account');
    }

    public function confirm_email(){

        Mail::to('anasch14g@gmail.com')->send (new OrderConfirm());

        return 'email sent';
    }

}
