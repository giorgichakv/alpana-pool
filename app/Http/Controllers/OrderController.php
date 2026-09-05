<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // კალათაში პროდუქტის დამატება
    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'პროდუქტი დაემატა კალათაში!');
    }

    // კალათის ნახვა
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // პროდუქტის წაშლა კალათიდან
    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$productId])){
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'პროდუქტი წაშლილია კალათიდან');
    }

    // Checkout გვერდი
    public function checkout()
    {
        $cart = session()->get('cart', []);
        if(count($cart) == 0){
            return redirect()->route('cart.index')->with('error', 'კალათა ცარიელია');
        }
        return view('checkout', compact('cart'));
    }

    // შეკვეთის შენახვა
    public function store(Request $request)
    {
        $cart = session()->get('cart');
        if(!$cart || count($cart) == 0){
            return redirect()->back()->with('error', 'კალათა ცარიელია');
        }

        $total = 0;
        foreach($cart as $item){
            $total += $item['price'] * $item['quantity'];
        }

        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'total' => $total
        ]);

        foreach($cart as $id => $item){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');

        return redirect()->route('shop')->with('success', 'შეკვეთა მიღებულია!');
    }
}