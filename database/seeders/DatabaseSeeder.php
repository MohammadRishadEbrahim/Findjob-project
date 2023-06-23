<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    \App\Models\User::factory(4)->create();


       $user=User::factory()->create([
           'name' => 'Test User',
           'email' => 'test@example.com',
        ]);
        Job::factory(6)->create([
            'user_id'=>$user->id
        ]);

    // Job::create([
    //         'title' => 'Laravel senior Developer',
    //         'skils' => 'Laravel, Javascript',
    //         'company' => 'Acm Corp',
    //         'location' => 'Boston,Ma',
    //         'email' => 'email@email.com',
    //         'degree'=>'Master',
    //         'website' => 'www.facebook.com',
    //         'description' => 'Lorem ipsum dolor sit amet,
    //          consectetur adipisicing elit. Porro labore
    //          natus cupiditate tempore aperiam, in exercita
    //          tionem nihil! Omnis, dolor atque? Facilis,
    //           tenetur quo!'
    //     ]);
    //     Job::create([
    //         'title' => 'Django senior Developer',
    //         'skils' => 'Python, Javascript',
    //         'company' => 'Bcm Corp',
    //         'location' => 'NewYork,Ma',
    //         'email' => 'email@email.com',
    //         'degree'=>'Master',
    //         'website' => 'www.instagram.com',
    //         'description' => 'Lorem ipsum dolor sit amet,
    //          consectetur adipisicing elit. Porro labore
    //          natus cupiditate tempore aperiam, in exercita
    //          tionem nihil! Omnis, dolor atque? Facilis,
    //           tenetur quo!'
    //     ]);
    }
}
