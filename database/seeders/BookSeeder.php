<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            Book::create([
                "title" => $faker->sentence(),
                "author" => $faker->name(),
                "published_date" => Carbon::now(),
                "publisher" => $faker->name(),
                "stock" => $faker->randomNumber(2)
            ]);
        }
    }
}
