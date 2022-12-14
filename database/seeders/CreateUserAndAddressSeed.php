<?php

namespace Database\Seeders;

use Iluminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Crisciany Silva",
            "email" => "criscianysilva1997@gmail.com",
            "password" => Hash::make("CrisCris123"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua dos bobos, N° 50"
        ]);
    }
}
