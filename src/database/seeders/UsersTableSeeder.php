<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        // Вставка конкретного админа вручную
        DB::table('users')->insert([
            'name' => 'Lifeliss',
            'email' => 'lifeliss911@gmail.com',
            'password' => Hash::make('1234'), // Более правильная обертка чем bcrypt()
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Генерация 20 тестовых пользователей через фабрику
        User::factory(20)->create();
    }
}
