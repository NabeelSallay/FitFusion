<?php

namespace Database\Seeders;

use App\Models\CoachCategory;
use App\Models\Nutrition;
use App\Models\User;
use App\Models\workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);



        CoachCategory::factory(10)->create();




    }
}
