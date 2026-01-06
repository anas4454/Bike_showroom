<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('dashboard.main');
    }

    public function products(){
        return view('dashboard.products.index');
    }

    public function createProduct(){
        return view('dashboard.products.create');
    }

    public function editProduct(){
        return view('dashboard.products.edit');
    }

    public function deleteProduct(){
        return view('dashboard.products.delete');
    }

    public function showProduct(){
        return view('dashboard.products.show');
    }

    public function categories(){
        return view('dashboard.category.index');
    }
     public function createCategory(){
        return view('dashboard.category.create');
    }
    public function editCategory(){
        return view('dashboard.category.edit');
    }

    public function deleteCategory(){
        return view('dashboard.category.delete');
    }

    public function showCategory(){
        return view('dashboard.category.show');
    }

    public function collection(){
        return view('dashboard.collection.index');
    }

    public function createCollection(){
        return view('dashboard.collection.create');
    }
    public function editCollection(){
        return view('dashboard.collection.edit');
    }
    public function deleteCollection(){
        return view('dashboard.collection.delete');
    }
    public function showCollection(){
        return view('dashboard.collection.show');
}

}
