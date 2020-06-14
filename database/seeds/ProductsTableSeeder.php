<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
        	'name' => 'laptop asus',
        	'slug' =>'may_tinh',
        	'content' =>'Dòng sản phẩm mới',
        	'origin_price' =>'2000000',
        	'sale_price' => '1000000',
        	'status' => 1,
        	'discount_percent' => '20',
        	
        	
           
            
           
            
        ]);
        for($i=2; $i<20;$i++){
            DB::table('products')->insert([
                'name' => 'laptop dell'.$i,
                'slug' => 'lap-top-dell-'.$i,
                'content' => 'Dòng sản phẩm laptop dell'.$i.'là dòng sp mới',
                'origin_price' => '400000000',
                'sale_price' => '20000000',
                'status' => 2,
                'discount_percent' => $i,


            ]);
        }
    }
}
