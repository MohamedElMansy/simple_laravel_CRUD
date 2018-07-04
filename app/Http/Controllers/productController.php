<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class productController extends Controller
{
    public function index()
    {
        $product = Products::with('category')->get();
        return view("products.index")->with("prodcut",$product);

    }
    public function create()
    {
        return view("products.create");
    }
    public function store(StoreproductRequest $request)
    {
        $name = $request->name;
        $category_id = $request->category_id;
        $path=$request->image->store('avatars','public');

        products::create([
            "name"=>$name
        , "category_id"=>$category_id
        , "image"=>$path
        ]);

        return redirect()->route('products.index');
    }


    public function destroy($id,Request $request)
    {

        $product = products::find($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();

        // // Product::where('id',$Id)->delete();
        return redirect()->route('products.index');
    }

    public function show($id)
    {

        $product = Products::find($id);

        return view('products.show', [
            'product' => $product
        ]);


    }

    public function edit($id)
    {
        $products = Products::where('id',$id)->get();

        return view('products.edit', [
            'products' => $products
        ]);


    }

    public function update(StoreproductRequest $request)

    {
        $product = new products();
       $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('products.index');

    }




}
