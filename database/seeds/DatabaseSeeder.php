<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $categories = [
            ['id' => 1 , 'name' => 'طباعة الملفات والكتب', 'description' => 'نطبع لك جميع ما تطلبه من أوراق ملفات وكتب بحثية ورسالة الماجستير', 'imagepath' => 'assets\img\categories\printer.png'],
            ['id' => 2 , 'name' => 'المتجر الالكتروني', 'description' => 'تسوق مستلزمات المدرسة وجميع أدوات القرطاسية تجدوها هنا', 'imagepath' => 'assets\img\categories\online-shop.png'],
            ['id' => 3 , 'name' => 'طباعة الاكواب وكراتين ', 'description' => 'أصنع علامتك التجارية معنا واكسب عملائك بهوية بصرية مميزة ولافتة ', 'imagepath' => 'assets\img\categories\box&cup.png'],

        ];


     DB::table('categories') ->insertOrIgnore($categories);
    }
}
