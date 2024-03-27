<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class productcontroller extends Controller
{
    public function AddProduct ()
        {
         return view('Products.addproduct' ,[]);
        }
}
