<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'danilo macea',
                'email' => 'antoniomcs21@hotmail.com',
                'password' => bcrypt('12345')
            ]);

            // User::create([
            //     'name' => 'usuario1',
            //     'email' => 'info@gesccol.gob.co',
            //     'password' => bcrypt('radicador')
            // ]);

            


    }
}
