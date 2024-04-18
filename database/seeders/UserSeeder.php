<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $defaultAdmin = [
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now()->subYears(5),
            'password' => Hash::make('Password1'),
        ];


        $seedUsers = [
            [
                'id' => 1000,
                'name' => 'Adrian Gould',
                'email' => 'adrian.gould@nmtafe.wa.edu.au',
                'email_verified_at' => now()->subYears(5),
                'password' => Hash::make('Password1'),
            ],

            [
                'id' => null, 'name' => "Bea O'Problem", 'email' => 'Bea.OProblem@example.com',
                'email_verified_at' => null, 'password' => Hash::make('Password1'), 'created_at' => now(),
            ],

            [
                'id' => null, 'name' => 'Oscar Nomination', 'email' => 'Oscar.Nomination@example.com',
                'email_verified_at' => null, 'password' => Hash::make('Password1'), 'created_at' => now(),
            ],

            [
                'id' => null, 'name' => 'Ken Dahl', 'email' => 'Ken.Dahl@example.com', 'email_verified_at' => null,
                'password' => Hash::make('Password1'), 'created_at' => now(),
            ],

            [
                'id' => null, 'name' => 'Barbie Dahl', 'email' => 'Barbie.Dahl@example.com',
                'email_verified_at' => null, 'password' => Hash::make('Password1'), 'created_at' => now(),
            ],


        ];


        $admin = User::create($defaultAdmin);

        foreach ($seedUsers as $seedUser) {
            $user = User::create($seedUser);
        }

    }
}
