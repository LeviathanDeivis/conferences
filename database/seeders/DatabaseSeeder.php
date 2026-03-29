<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       \App\Models\Role::create(['name' => 'client']);
       \App\Models\Role::create(['name' => 'employee']);
       \App\Models\Role::create(['name' => 'admin']);

       \App\Models\Conference::create([
        'title' => 'Cybersecurity Vilnius',
        'description' => 'Biggest cybersecurity event in Baltic States',
        'speakers' => 'Johan Vogel',
        'date' => '2026-06-14',
        'time' => '10:00',
        'address' => 'Litexpo'
    ]);

       \App\Models\Conference::create([
        'title' => 'PHP Summit',
        'description' => 'Conference for PHP developers',
        'speakers' => 'Lukas Vileika',
        'date' => '2026-08-10',
        'time' => '11:00',
        'address' => 'Litexpo'
    ]);
    }
}
