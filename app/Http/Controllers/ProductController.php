<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['category','brand'])
            ->when($request->search, function($query) use ($request){
                $query->where('name','like','%'.$request->search.'%');
            })
            ->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('products.create', compact('categories','brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'required|integer'
        ]);

        Product::create($request->only([
            'name',
            'description',
            'image',
            'price',
            'stock',
            'is_active',
            'category_id',
            'brand_id'
        ]));

        return redirect()
            ->route('products.index')
            ->with('success','Product created successfully');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('products.edit', compact('product','categories','brands'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'required|integer'
        ]);

        $product->update($request->only([
            'name',
            'description',
            'image',
            'price',
            'stock',
            'is_active',
            'category_id',
            'brand_id'
        ]));

        return redirect()
            ->route('products.index')
            ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success','Product deleted successfully');
    }
}