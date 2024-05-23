<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'namaLengkap'=>'Admin',
                'alamat'=>'cianjur',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],[
                'username'=>'karyawan',
                'email'=>'karyawan@gmail.com',
                'namaLengkap'=>'Karyawan',
                'alamat'=>'cianjur',
                'role'=>'karyawan',
                'password'=>bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
