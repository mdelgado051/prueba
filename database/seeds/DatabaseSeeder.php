<?php

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
        \App\User::create([
            'name' => 'Admin',
            'email' => 'hamlet@deadline.com.mx',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => bcrypt('password')
        ]);
    }
}
