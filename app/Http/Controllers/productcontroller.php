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
//            dd($request->all());

            $request -> validate([
                'name' => 'required |max:25 |unique:products',
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
            $newproduct ->imagepath ="assets\img\education.png";
            $newproduct ->category_id = $request ->category_id;

            $newproduct->save();

            return redirect('/addproduct');
        }
}
