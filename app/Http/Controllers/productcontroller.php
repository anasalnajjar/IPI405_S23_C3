<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
class productcontroller extends Controller
{
    public function AddProduct ()
        {
         return view('Products.addproduct' ,[]);
        }

        function storeproduct(Request $request){

            $request -> validate([
                'name' => 'required |max:25 |unique:product',
                'price' => 'required',
                'quantity' => 'required',
                'description' => 'required'
            ]);

            $newproduct = new product();
            $newproduct -> name = $request ->name;
            $newproduct -> price = $request ->price;
            $newproduct -> quantity = $request ->quantity;
            $newproduct -> description = $request ->description;
            $newproduct ->imagepath ="ss";
            $newproduct ->category_id ="2";

            $newproduct->save();

            return redirect('/addproduct');
        }
}
