<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public const DEVELOPER_EMAIL = 'roby@email.com';

    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Developer',
            'email' => self::DEVELOPER_EMAIL,
            'password' => bcrypt('12345678'),
        ]);
    }
}
