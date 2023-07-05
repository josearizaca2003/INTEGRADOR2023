<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\Teacher;
use App\Models\Monitoring;
use App\Models\Graduate;
use App\Models\Institution;
use App\Models\Application;
use App\Models\Job;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Generar 10 personas y relacionarlas con profesores
        /* $people = Person::factory(20)->create();
        $people->each(function ($person) {
            Teacher::factory()->create(['person_id' => $person->id]);
        });

        // Generar 10 personas y relacionarlas con egresados
        $people = Person::factory(20)->create();
        $people->each(function ($person) {
            Graduate::factory()->create(['person_id' => $person->id]);
        });

        // Generar 10 instituciones
        Institution::factory(20)->create();

        // Generar 10 empresas
        $companies = Company::factory(20)->create();

        // Generar 10 trabajos y relacionarlos con empresas
        $companies->each(function ($company) {
            Job::factory()->create(['company_id' => $company->id]);
        });

        // Generar 10 aplicaciones y relacionarlas con egresados y trabajos
        $graduates = Graduate::all();
        $jobs = Job::all();
        for ($i = 0; $i < 20; $i++) {
            Application::factory()->create([
                'graduate_id' => $graduates->random()->id,
                'job_id' => $jobs->random()->id,
            ]);
        }

        // Generar 10 monitoreos y relacionarlos con profesores y egresados
        $teachers = Teacher::all();
        $graduates = Graduate::all();
        for ($i = 0; $i < 20; $i++) {
            Monitoring::factory()->create([
                'teacher_id' => $teachers->random()->id,
                'graduate_id' => $graduates
            ]);
        } */
        Storage::makeDirectory('posts');
        Person::factory(50)->create();
        Teacher::factory(50)->create();
        Institution::factory(50)->create();
        Graduate::factory(50)->create();
        Monitoring::factory(50)->create();
        Company::factory(5)->create();
        $this->call(JobSeeder::class);
        Application::factory(50)->create();


    }
}
