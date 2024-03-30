<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
class productcontroller extends Controller
{
    public function AddProduct ()
        {
            $result = category::all();
         return view('Products.addproduct' ,['AllCategories' => $result]);
        }

        public function storeproduct(Request $request){

            $request -> validate([
                'name' => 'required |max:25 |unique:product',
                'price' => 'required',
                'quantity' => 'required',
                'description' => 'required',
                'category_id' => 'required'
            ]);

            $newproduct = new product();
            $newproduct -> name = $request ->name;
            $newproduct -> price = $request ->price;
            $newproduct -> quantity = $request ->quantity;
            $newproduct -> description = $request ->description;
            $newproduct ->imagepath ="ss";
            $newproduct ->category_id = $request ->category_id;

            $newproduct->save();

            return redirect('/addproduct');
        }
}
