<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Asi se pasan los datos de un usuario de fijo, junto a los datos falsos
        User::create([
            'name' => 'Imix ICM',
            'email' => 'imix.icm@gmail.com',
            'password' => bcrypt('zaq1xsw2'),
        ]);
        User::factory(99)->create();
    }
}
