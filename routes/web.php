<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\category;
use App\Http\Controllers\firstcontroller;
use App\Http\Controllers\productcontroller;
use App\product;

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

Route::get('/product/{cat_id}', [firstcontroller::class, 'GetCategoryProducts'] );

Route::get('/category', [firstcontroller::class,'GetAllCategoriesWithProducts']);
Route::get('/addproduct', [productcontroller::class ,'AddProduct']);
