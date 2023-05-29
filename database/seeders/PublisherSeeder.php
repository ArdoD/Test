<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 5; $i++) {
            Publisher::create([
                'logo' => 'logo.jpg',
                'name' => $faker->name(),
                'adress' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email()
            ]);
        }
    }
}
