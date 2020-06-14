<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'role' => 1,
                'address' => 'Hà Nội',
                'phone' => '090200012',
                'email' => 'admin1@gmail.com',
                

                
            ]);

        // for ($i=10; $i <30 ; $i++) {  
        //     DB::table('users')->insert([
        //         'name' => 'admin'.$i,
        //         'role' => $i,
        //         'address' => 'Hà Nội'. $i,
        //         'phone' => '090200012'.$i,
        //         'email' => 'admini' . $i .'@gmail.com',



        //     ]);
        // }


    }
}
