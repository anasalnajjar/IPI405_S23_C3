<?php

namespace App\Http\Controllers;
use App\category;
use App\product;
use App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    public function MainPage ()
        {
        $result = category::all();
         return view('welcome' ,['categories' => $result]);
        }



    public function GetCategoryProducts ($cat_id =null) {
        if ($cat_id){
            $products = product::where('category_id' , $cat_id)->get();
            return view('product',['products' => $products]);
        }
        else{
            $result = product::all();
            return view('product',['products' => $result]);
        }
    }
    public function GetAllCategoriesWithProducts() {
        $categories = category::all();
        $products = product::all();

         return view('category' ,['categories' => $categories, 'products' =>$products]);
    }

    public function AddCategory ()//بحاجة تنظيم الفورم
        {
            $result = category::all();
         return view('addcategory' ,['AllCategories' => $result]);
        }

    public function about ()
        {
         return view('about' ,[]);
        }
}
