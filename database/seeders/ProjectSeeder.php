<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectsData = [
            [
                'name' => 'Project 1',
                'description' => 'Description for Project 1',
                'status' => 'Active',
                'view' => 'https://thumbs.dreamstime.com/b/creative-project-icons-set-ideas-web-codes-design-seo-flat-vector-illustration-59191796.jpg',
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-30',
                'ID_client' => 1,
                'budget' => 10000,
                'priority' => 'High',
            ],
            [
                'name' => 'Project 2',
                'description' => 'Description for Project 2',
                'status' => 'Pending',
                'view' => 'https://thedigitalprojectmanager.com/wp-content/uploads/2017/03/Project-Management-Methodologies.png',
                'start_date' => '2024-02-15',
                'end_date' => '2024-08-31',
                'ID_client' => 2,
                'budget' => 15000,
                'priority' => 'Medium',
            ],
            [
                'name' => 'Project 3',
                'description' => 'Description for Project 3',
                'status' => 'Active',
                'view' => 'https://thedigitalprojectmanager.com/wp-content/uploads/2017/03/Project-Management-Methodologies.png',
                'start_date' => '2024-03-10',
                'end_date' => '2024-09-15',
                'ID_client' => 3,
                'budget' => 12000,
                'priority' => 'Low',
            ],
            [
                'name' => 'Project 4',
                'description' => 'Description for Project 4',
                'status' => 'Completed',
                'view' => 'https://i.pinimg.com/originals/55/ec/68/55ec68babd082492d3b48acb2e7db1af.png',
                'start_date' => '2024-04-05',
                'end_date' => '2024-10-20',
                'ID_client' => 1,
                'budget' => 20000,
                'priority' => 'High',
            ],
            [
                'name' => 'Project 5',
                'description' => 'Description for Project 5',
                'status' => 'Active',
                'view' => 'https://thedigitalprojectmanager.com/wp-content/uploads/2017/03/Project-Management-Methodologies.png',
                'start_date' => '2024-05-20',
                'end_date' => '2024-11-30',
                'ID_client' => 2,
                'budget' => 18000,
                'priority' => 'Medium',
            ],
            [
                'name' => 'Project 6',
                'description' => 'Description for Project 6',
                'status' => 'Pending',
                'view' => '',
                'start_date' => '2024-06-15',
                'end_date' => '2025-01-15',
                'ID_client' => 3,
                'budget' => 22000,
                'priority' => 'High',
            ],
            [
                'name' => 'Project 7',
                'description' => 'Description for Project 7',
                'status' => 'Active',
                'view' => 'https://theowlteacher.com/wp-content/uploads/2017/06/science-project-ideas-2.png',
                'start_date' => '2024-07-01',
                'end_date' => '2025-02-28',
                'ID_client' => 1,
                'budget' => 13000,
                'priority' => 'Low',
            ],
            [
                'name' => 'Project 8',
                'description' => 'Description for Project 8',
                'status' => 'Completed',
                'view' => 'https://www.worldconstructionnetwork.com/wp-content/uploads/sites/26/2022/04/Aconex-Collaboration-is-key-in-design-build.-scaled.jpg',
                'start_date' => '2024-08-10',
                'end_date' => '2025-03-31',
                'ID_client' => 2,
                'budget' => 19000,
                'priority' => 'High',
            ],
            [
                'name' => 'Project 9',
                'description' => 'Description for Project 9',
                'status' => 'Active',
                'view' => '',
                'start_date' => '2024-09-05',
                'end_date' => '2025-04-15',
                'ID_client' => 3,
                'budget' => 14000,
                'priority' => 'Medium',
            ],
            [
                'name' => 'Project 10',
                'description' => 'Description for Project 10',
                'status' => 'Pending',
                'view' => 'https://teachingideas.ca/wp-content/uploads/2018/11/PicsArt_11-17-12.36.55.png',
                'start_date' => '2024-10-20',
                'end_date' => '2025-05-30',
                'ID_client' => 1,
                'budget' => 17000,
                'priority' => 'Low',
            ],
        ];
        
        
        // Crearo un ForEach che associa gli attributi degli array con le tabelle da popolare all'interno della migration 

        $typeIds = Type::all()->pluck('id');
        $faker = Faker::create();


        foreach ($projectsData as $project) {
            
            // Model
            $newPost = new Project();

            $newPost->name = $project['name'];
            $newPost->description = $project['description'];
            $newPost->status = $project['status'];
            $newPost->view = $project['view'];
            $newPost->start_date = $project['start_date'];
            $newPost->end_date = $project['end_date'];
            $newPost->client_id = $project['ID_client'];
            $newPost->budget = $project['budget'];
            $newPost->priority = $project['priority'];
            $newPost->type_id =  $faker->randomElement($typeIds);

            // Save in DB
            $newPost->save();
        }

        //  ======== SECONDO MODO TESTATO E DEBBUGATO========

        // // Inizializza Faker
        // $faker = Faker::create();
        // $faker = Faker::create();
        
        // // Ciclo for per generare 100 nuovi post
        // for ($i = 0; $i < 100; $i++) {
        //     // Genera dati casuali per ogni nuovo post
        //     $newPost = new Project();
        //     $newPost->name = $faker->word();
        //     $newPost->description = $faker->paragraph;
        //     $newPost->status = $faker->randomElement(['draft', 'published']);
        //     $newPost->view = $faker->numberBetween(0, 1000);
        //     $newPost->start_date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d');
        //     $newPost->end_date = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d');
        //     $newPost->client_id = $faker->numberBetween(1, 10); // Assuming there are 10 clients
        //     $newPost->budget = $faker->randomFloat(2, 1000, 10000);
        //     $newPost->priority = $faker->randomElement(['low', 'medium', 'high']);
        //     $newPost->type_id =  $faker->randomElement($typeIds);


        //     // Salva il nuovo post nel database
        //     $newPost->save();
        // }
        

    }
}
