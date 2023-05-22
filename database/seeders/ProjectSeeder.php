<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(4);
            $newProject->description = $faker->text(500);
            $newProject->cover_image = $faker->url();
            $newProject->save();
        }
    }
}
