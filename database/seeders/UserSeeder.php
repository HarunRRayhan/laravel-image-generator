<?php

namespace Database\Seeders;

use App\Models\User;
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
        // default user
        User::factory()->create([
            'email' => 'me@hrr.im',
            'name' => 'Harun R Rayhan',
        ]);
    }
}
