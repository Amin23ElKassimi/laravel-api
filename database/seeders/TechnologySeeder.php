<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $names = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Python',
            'Java',
            'Ruby',
            'Swift',
            'C++',
            'C#',
            'SQL',
            'React',
            'Angular',
            'Vue.js',
            'Node.js',
            'Express.js',
            'Laravel',
            'Symfony',
            'Django',
            'Flask',
        ];

        foreach ($names as $name){
            $newTag = new Technology();
            $newTag->name = $name;
            $newTag->color= $faker->safeHexColor();
            $newTag->save();
        }
    }
}
