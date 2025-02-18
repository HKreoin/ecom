<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $products = Product::all();
        return Inertia::render('Admin/Product/Index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all())->save();

        //check if product has images upload

        if ($request->hasFile('product_images')) {
            $productImages = collect($request->file('product_images'));
            $productImages->each(function ($image) use ($product) {
                $uniqueName = time() . '_' . Str::random(10) . $image->getClientOriginalExtension();
                $path = public_path('storage/product_images', $uniqueName);
                $image->move($path);
                (new ProductImage())->fill([
                    'product_id' => $product->id,
                    'image' => $path
                ])->save();
            });
        }
        return Redirect::route('admin.products.index')->with('success', 'Product created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
