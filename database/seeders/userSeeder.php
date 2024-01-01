<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(15)->create();

        User::create ([
        'name' => 'Zoya',
        'email' => 'dhoniznr31@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'roles' => 'mahasiswa',
        ]);
    }
}
