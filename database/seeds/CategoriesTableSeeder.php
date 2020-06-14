<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Laptop',
        	'slug' => 'may-tinh-xach-tay',
        	'depth' => '0',
        	'parent_id' => '2',




        ]);

        

        DB::table('categories')->insert([
            'name' => 'Máy tính văn phòng',
            'slug' => 'may-tinh-van-phong',
            'depth' => '0',
            'parent_id' => '2',

            

            
        ]);

        DB::table('categories')->insert([
            'name' => 'Linh kiện máy tính',
            'slug' => 'linh-kien-may-tinh',
            'depth' => '0',
            'parent_id' => '2',

            

            
        ]);

        DB::table('categories')->insert([
            'name' => 'Bàn phím,chuột',
            'slug' => 'ban-phim-chuot',
            'depth' => '0',
            'parent_id' => '2',

            

            
        ]);

        DB::table('categories')->insert([
            'name' => 'Phụ kiện laptop,PC,khác',
            'slug' => 'phu-kien-laptop-pc',
            'depth' => '0',
            'parent_id' => '2',
           
            
           
            
        ]);


    }
}
