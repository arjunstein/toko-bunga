<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'privilege' => 'admin',
            'whatsapp' => '087777115297'
        ]);
        
        DB::table('users')->insert([
            'name' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'privilege' => 'pelanggan',
            'whatsapp' => '081545615116'
        ]);
    }
}
