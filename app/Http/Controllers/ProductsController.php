<?php

namespace App\Http\Controllers;

use App\Models\ProductAttributes;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    private $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function index() {
        $products = Products::all();

        return View::make('products.index')
            ->with('products', $products);
    }

    public function create() {
        return View::make('products.create');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator);

        } else {
            Products::create($request->all());

            Session::flash('message', 'Successfully created product!');
            return redirect('products');
        }
    }

    public function show($id)
    {
        $product = Products::find($id);

        return View::make('products.show')
            ->with('product', $product);
    }

    public function edit($id)
    {
        $product = Products::find($id);

        return View::make('products.edit')
            ->with('product', $product);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('products/' . $id . '/edit')
                ->withErrors($validator);

        } else {
            $product = Products::findOrFail($id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->save();

            Session::flash('message', 'Successfully updated product!');
            return redirect('products');
        }
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);

        ProductAttributes::where('product_id', '=', $id)->delete();

        $product->delete();

        Session::flash('message', 'Successfully deleted product!');
        return redirect('products');
    }
}
