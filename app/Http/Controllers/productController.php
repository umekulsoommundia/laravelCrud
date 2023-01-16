<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    function productSend(Request $request)
    {
        $p = new product();
        $p->productName=$request->productName;
        $p->productPrice=$request->productPrice;
        $p->productQuantity=$request->productQuantity;
        $p->save();
        return redirect()->back()->with("message","Product Added");
   
    }
    function show()
    {
        $pro = product::all();
        return view('adminPages.productTable',compact('pro'));
    }

    function edit($id)
    {
        $pro = product::find($id);

        return view('adminPages.update',compact('pro'));
    }
    function update(Request $request,$id)
    {
        $pro = product::find($id);
        $pro->productName=$request->productName;
        $pro->productPrice=$request->productPrice;
        $pro->productQuantity=$request->productQuantity;
        $pro->save();
        return view('adminPages.addProduct');
    }

    function delete($id)
    {
        $pro = product::find($id);
        $pro->delete();
        return redirect()->back()->with("msg","Product deleted");
    }
}
