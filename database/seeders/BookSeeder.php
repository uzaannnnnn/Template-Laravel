<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); //ID ini berdasarkan nama dari kode negara Indonesia

        for ($i = 0; $i < 5; $i++) {
            Book::create([
                "title" => $faker->sentence(),
                "author" => $faker->name(),
                "publisher" => $faker->name(),
                "published_date" => Carbon::now(), //untuk tanggal sekarang
                "stock" => $faker->randomNumber(2) //agar stoknya ada 2 angka
            ]);
        }
    }
}
