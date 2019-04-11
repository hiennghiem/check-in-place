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
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => 'default.png',                
                'add' => 'Hà Nội, Việt Nam',
                'phone' => '0123456789',
                'level' => 'admin',
                'dateofbirth' => '1995-06-09',
                'created_at' => new DateTime(),
            ], 
            [
                'name' => 'Vuong Minh Thai',
                'email' => 'vuongthai@framgia.com',
                'password' => bcrypt('123456'),
                'avatar' => 'default.png',                
                'add' => 'Hà Nội, Việt Nam',
                'phone' => '0123456789',
                'level' => 'member',
                'dateofbirth' => '1996-05-18',
                'created_at' => new DateTime(),
            ], 
            [
                'name' => 'Nguyen Thi Khanh Linh',
                'email' => 'ntkl@gmail.com',
                'password' => bcrypt('123456'),
                'avatar' => 'default.png',                
                'add' => 'Hà Nội, Việt Nam',
                'phone' => '0123456789',
                'level' => 'member',
                'dateofbirth' => '1996-05-19',
                'created_at' => new DateTime(),
            ]
        ]);
    }
}
