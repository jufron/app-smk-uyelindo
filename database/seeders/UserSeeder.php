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
        User::create([
            'name'          => 'superadmin',
            'email'         => 'superadmin@mail.com',
            'password'      => bcrypt('12345678'),
        ]);
        User::create([
            'name'          => 'kesiswaan',
            'email'         => 'kesiswaan@mail.com',
            'password'      => bcrypt('12345678'),
        ]);

        $user = User::where('email', 'superadmin@mail.com')->first();
        $user->assignRole('superadmin');

        $user = User::where('email', 'kesiswaan@mail.com')->first();
        $user->assignRole('kesiswaan');
    }
}
