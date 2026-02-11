<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirm;
use App\Models\Product;

class Admin extends Controller
{
    public function index()
    {
        // dd('admin dashboard');
        return view('dashboard.main');
    }

    public function products()
    {
        $products = Product::all();
        return view('dashboard.products.index' , compact('products'));
    }

    public function createProduct()
    {
        return view('dashboard.products.create');
    }

    public function editProduct()
    {
        return view('dashboard.products.edit');
    }

    public function deleteProduct()
    {
        return view('dashboard.products.delete');
    }

    public function showProduct(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    public function categories()
    {
        return view('dashboard.category.index');
    }

    public function createCategory()
    {
        return view('dashboard.category.create');
    }

    public function editCategory()
    {
        return view('dashboard.category.edit');
    }

    public function deleteCategory()
    {
        return view('dashboard.category.delete');
    }

    public function showCategory()
    {
        return view('dashboard.category.show');
    }

    public function collection()
    {
        return view('dashboard.collection.index');
    }

    public function createCollection()
    {
        return view('dashboard.collection.create');
    }

    public function editCollection()
    {
        return view('dashboard.collection.edit');
    }

    public function deleteCollection()
    {
        return view('dashboard.collection.delete');
    }

    public function showCollection()
    {
        return view('dashboard.collection.show');
    }

    public function userindex()
    {
        return view('users.index');
    }

    public function adminOrderConfirm()
    {
        $orders = OrderConfirm::all();
        return view('dashboard.orders.orders' , compact('orders'));
    }

    public function adminOrderdetail(OrderConfirm $order)
    {
        return view('dashboard.orders.orderdetail' , compact('order'));
    }
}
