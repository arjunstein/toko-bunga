<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dummy data
        // for ($i=1; $i < 2000; $i++) { 
        //    DB::table('users')->insert([
        //     'name' => 'pelanggan',
        //     'email' => Str::random(5).'@gmail.com',
        //     'password' => bcrypt('123'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'privilege' => 'pelanggan',
        //     'whatsapp' => '081545615116'
        // ]);
        // }
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'privilege' => 'admin',
            'whatsapp' => '087777115297',
            'alamat' => fake()->address(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'privilege' => 'pelanggan',
            'whatsapp' => '081545615116',
            'alamat' => fake()->address(),
        ]);
    }
}
