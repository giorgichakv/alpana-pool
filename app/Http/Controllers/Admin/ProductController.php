<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * აჩვენებს ფორმას ახალი პროდუქტის დასამატებლად.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * ინახავს ახალ პროდუქტს ბაზაში.
     */
    public function store(Request $request)
    {
        // ვალიდაცია
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer',
            'image'       => 'nullable|image|max:2048', // 2MB მაქსიმუმ
        ]);

        // სურათის ატვირთვა (თუ არსებობს)
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // პროდუქტის შექმნა
        Product::create($data);

        // დაბრუნება პროდუქტის სიის გვერდზე წარმატების მესიჯით
        return redirect()->route('product.index')
                         ->with('success', 'პროდუქტი დაემატა!');
    }

    /**
     * აჩვენებს ყველა პროდუქტს სიის სახით.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * წაშლის კონკრეტულ პროდუქტს.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()
                         ->with('success', 'პროდუქტი წაშლილია!');
    }
}
