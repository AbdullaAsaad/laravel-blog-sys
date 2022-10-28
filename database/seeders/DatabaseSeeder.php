<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'is_admin' => true,
        //     'password' => Hash::make('123456')
        // ]);
    }
}
