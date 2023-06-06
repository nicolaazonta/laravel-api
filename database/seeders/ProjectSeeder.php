<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        for ($i=0; $i < 19; $i++) {             
            $project = new Project();        
            $project->name = $faker->sentence(4);
            $project->slug = Str::slug($project->name, '-');
            $project->description = $faker->paragraphs(asText:true);
            $project->color_palette = $faker->imageUrl(category:'palette', format:'jpg', width:360, height:360);
            $project->jumbo_image = $faker->imageUrl(category:'jumbo',format:'jpg');
            $project->save();
        }
    }
}
