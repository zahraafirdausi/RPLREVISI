<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table users
        DB::table('users')->insert([
            'username'=>'sabrina',
            'password'=>Hash::make('sabrina123'),
            'email'=>'sabrina@gmail.com',
            'Nama_Lengkap'=>'sabrina',
            'Alamat'=>'Jonggol'
        ]);
    }
}
