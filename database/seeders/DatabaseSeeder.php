<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
        ]);

        $this->call([
            EmployeeSeeder::class,
            AttendanceSeeder::class,
        ]);

        $this->command->table(['Name', 'Email', 'Password'], [
            [
                $user->name,
                $user->email,
                'password',
            ],
        ]);
    }
}
