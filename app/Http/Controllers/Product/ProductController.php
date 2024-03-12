<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $products = Product::all();
        // dd($products);
        return view('products.index', compact('products'));
    }
    public function create() {
        return view('products.create');
    }
    public function store(Request $req) {
        // dd($req-> all());
        $req->validate([
            'name' => ['required', 'string'],
            'description' => ['required','string'],
          'status' => ['required','string'],
        ]);
        Product::create([
            'name' => $req->name,
            'description' => $req->description,
            'status' => $req->status,
            'price' => $req->price,
        ]);
        return redirect()->route('products.home');
    }
    public function edit($id) {
        // dd($id);
        $product = Product::find($id);
        $product = Product::where('id', $product->id)->first();

        return view('products.edit',compact('product'));
    }
    public function update(Request $req, $id) {
        $product = Product::find($id);
        // dd($product);
        $product->update([
            'name' => $req->name,
            'description' => $req->description,
            'status' => $req->status,
            'price' => $req->price,
        ]);
        return redirect()->route('products.home');

    }
    public function delete($id) {
        Product::find($id)->delete();
        return redirect()->route('products.home');
    }
}
