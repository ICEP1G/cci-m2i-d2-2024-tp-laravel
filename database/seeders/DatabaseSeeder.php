<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() 
    {
        // todo : this is not working but I don't know why
        // Add a default user with information (choice by me)
        if (!app()->environment("production")) {
            $this->call(FakeSeeder::class);
        }
    }
}
