<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tbl_user')->insert([
                'nama_user' => $faker->name,
                'email' => $faker->email,
                'no_hp' => $faker->phoneNumber
            ]);
        }
    }
}

//Membuat seeder
    //php artisan make:seeder UserSeeder
//Tambah
    // DB::table('tbl_user')->insert([
    //     'nama_user' => 'Joni',
    //     'email' => 'joni@mail.com',
    //     'no_hp' => '0921838181'
    // ]);
//Tambah
    // use DB;
//Run
    // php artisan db:seed --class=UserSeeder

//Membuat Faker
    // use Faker\Factory as Faker;
//Didalam function Run
    // $faker = Faker::create('id_ID');
    // for ($i = 1; $i <= 10; $i++) {
    //     DB::table('tbl_user')->insert([
    //         'nama_user' => $faker->name,
    //         'email' => $faker->email,
    //         'no_hp' => $faker->phoneNumber
    //     ]);
    // }
//Run
    // php artisan db:seed --class=UserSeeder
