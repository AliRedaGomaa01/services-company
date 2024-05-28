<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'a',
            'email' => 'a@a.a',
            'password' => bcrypt('a'),
        ]);

        Setting::insert(
        [
            'name' => 'email',
            'value' => 'info@gmail.com',
        ],
        [
            'name' => 'address',
            'value' => 'California, TX 70240',
        ],
        [
            'name' => 'phone',
            'value' => '+123 456 7890',
        ],
        [
            'name' => 'work days',
            'value' => 'Sun - Thur: 9am - 5pm',
        ],
        [
            'name' => 'phone',
            'value' => '+123 456 7890',
        ],
        [
            'name' => 'facebook',
            'value' => '#',
        ],
        [
            'name' => 'twitter',
            'value' => '#',
        ],
        [
            'name' => 'instagram',
            'value' => '#',
        ],
        [
            'name' => 'linkedin',
            'value' => '#',
        ],
        [
            'name' => 'whatsapp',
            'value' => '#',
        ],
    );
    }
}
