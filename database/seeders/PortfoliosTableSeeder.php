<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            Portfolio::create([
                'name' => $faker->words(rand(2, 4), true),
                'client_name' => $faker->words(2, true),
                'url_image' => 'https://picsum.photos/id/' . rand(1, 270) . '/500/400',
                'pickup_date' => $faker->date(),
                'deploy_date' => $faker->date(),
                'description' => $faker->paragraphs(rand(2, 20), true),
            ]);
        }
    }
}
