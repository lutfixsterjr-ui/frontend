<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /* =========================
       TAMPILKAN KERANJANG
    ========================= */
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())
            ->with('product')
            ->get();

        return view('cart.index', compact('cart'));
    }

    /* =========================
       TAMBAH KE KERANJANG (AJAX)
    ========================= */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => 'unauthorized',
                'message' => 'Silakan login terlebih dahulu'
            ], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($cart) {
            $cart->qty += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id'    => Auth::id(),
                'product_id' => $request->product_id,
                'qty'        => 1,
            ]);
        }

        // HITUNG TOTAL ITEM DI KERANJANG
        $totalCart = Cart::where('user_id', Auth::id())->sum('qty');

        // RESPONSE AJAX
        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Produk berhasil ditambahkan ke keranjang',
                'totalCart' => $totalCart
            ]);
        }

        return redirect()->back()
            ->with('success', 'Produk ditambahkan ke keranjang');
    }

    /* =========================
       UPDATE QTY (AJAX READY)
    ========================= */
    public function update(Request $request, $id)
    {
        $cart = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($request->action === 'plus') {
            $cart->qty += 1;
        }

        if ($request->action === 'minus' && $cart->qty > 1) {
            $cart->qty -= 1;
        }

        $cart->save();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'qty' => $cart->qty
            ]);
        }

        return redirect()->back();
    }

    /* =========================
       HAPUS ITEM (AJAX READY)
    ========================= */
    public function destroy(Request $request, $id)
    {
        Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Produk dihapus dari keranjang'
            ]);
        }

        return redirect()->back()
            ->with('success', 'Produk dihapus dari keranjang');
    }

    /* =========================
       PRINT STRUK
    ========================= */
    public function print()
    {
        $cart = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart.print', compact('cart'));
    }


    public function clear()
{
    Cart::where('user_id', auth()->id())->delete();

    return redirect()->route('cart.index')
        ->with('success', 'Semua pesanan berhasil dihapus');
}

}

