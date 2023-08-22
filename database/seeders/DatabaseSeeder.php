<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        // \App\Models\Listing::create([
        //     'title' => "Laraval Sentor",
        //     'tags' => "Laravel, Js",
        //     'company' => "Acme Corp",
        //     'location' => "Boston, MA",
        //     'email' => "email1@email.com",
        //     'website' => "https://ww.acme.com",
        //     'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora repellendus a mollitia nobis labore excepturi enim perferendis doloremque officia!"
        // ]);
        // \App\Models\Listing::create([
        //     'title' => "Laraval Menor",
        //     'tags' => "Lolor, Js",
        //     'company' => "Mop Corp",
        //     'location' => "Jueston, MA",
        //     'email' => "email21@email.com",
        //     'website' => "https://ww.menor.com",
        //     'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aliquid ipsa ad quae sed neque nostrum perspiciatis omnis sit perferendis."
        // ]);
        \App\Models\Listing::factory(6)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
