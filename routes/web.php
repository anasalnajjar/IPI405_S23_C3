<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\category;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\productcontroller;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [firstcontroller::class ,'MainPage']);

Route::get('/product/{cat_id?}', [firstcontroller::class, 'GetCategoryProducts'] );

Route::get('/category', [firstcontroller::class,'GetAllCategoriesWithProducts']);
Route::get('/addproduct', [productcontroller::class ,'AddProduct']);
Route::post('/storeproduct',[productcontroller::class , 'storeproduct']);
Route::get('/addcategory', [firstcontroller::class ,'AddCategory']);// بحاجة تنظيم الفورم
Route::get('/about', [firstcontroller::class ,'about']);// بحاجة تنظيم الفورم
Route::get('/contact', [firstcontroller::class ,'contact']);// بحاجة تنظيم الفورم

