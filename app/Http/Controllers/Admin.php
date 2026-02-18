<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirm;
use App\Models\Product;
use App\Models\Product_img;
use Illuminate\Http\Request;

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

        return view('dashboard.products.index', compact('products'));
    }

    public function createProduct()
    {
        return view('dashboard.products.create');
    }

    public function storeProduct(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'old_price' => ['required', 'numeric'],
            'new_price' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'excerpt' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'brand' => ['required', 'string'],
            'condition' => ['required', 'string'],
            'model_name' => ['required', 'string'],
            'bike_type' => ['required', 'string'],
            'launch_year' => ['required', 'string'],
            'no_of_cylinder' => ['required', 'integer'],
            'engine_cc' => ['required', 'integer'],
            'max_meter' => ['required', 'integer'],
            'max_torque' => ['required', 'integer'],
            'no_of_gear' => ['required', 'integer'],
            'tank_capacity' => ['required', 'integer'],
            'milage' => ['required', 'integer'],
            'weight' => ['required', 'integer'],
            'break_type' => ['required', 'string'],
            'wheel_type' => ['required', 'string'],
            'tyre_type' => ['required', 'string'],
            'headlight' => ['required', 'string'],
            'colors' => ['required', 'string'],
            'image' => ['required'],
        ]);

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $imagename = 'image'.time().'.'.$image->getClientOriginalExtension();

            $image->storeAs('products', $imagename, 'public');

            // return "Image Stored";
        }



        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'old_price' => $request->old_price,
            'new_price' => $request->new_price,
            'description' => $request->description,
            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'brand' => $request->brand,
            'condition' => $request->condition,
            'model_name' => $request->model_name,
            'bike_type' => $request->bike_type,
            'launch_year' => $request->launch_year,
            'no_of_cylinder' => $request->no_of_cylinder,
            'engine_cc' => $request->engine_cc,
            'max_meter' => $request->max_meter,
            'max_torque' => $request->max_torque,
            'no_of_gear' => $request->no_of_gear,
            'tank_capacity' => $request->tank_capacity,
            'milage' => $request->milage,
            'weight' => $request->weight,
            'break_type' => $request->break_type,
            'wheel_type' => $request->wheel_type,
            'tyre_type' => $request->tyre_type,
            'headlight' => $request->headlight,
            'colors' => $request->colors,

        ]);

         Product_img::create([
            'image_url' => $imagename,
            "product_id" => $product->id,
        ]);

       
        return redirect()->route('dashboard.products')->with('success', 'Product created successfully');
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

    public function payments()
    {
        return view('dashboard.payments.index');
    }

    public function users()
    {
        return view('dashboard.users.index');
    }

    public function adminOrderConfirm()
    {
        $orders = OrderConfirm::all();

        return view('dashboard.orders.orders', compact('orders'));
    }

    public function adminOrderdetail(OrderConfirm $order)
    {
        return view('dashboard.orders.orderdetail', compact('order'));
    }

    public function updatestatus(Request $request, OrderConfirm $order)
    {

        // dd($request->all(), $order);

        $order->update([
            // 'payment_status' => $request->payment_status,
            'order_status'=>$request->order_status,
        ]);

        return redirect()->back()->with('success', 'Order status updated successfully');

    }
    // user dashboard controller

    public function userindex()
    {
        return view('users.index');
    }

    public function userinformation()
    {
        return view('users.information');
    }
}
