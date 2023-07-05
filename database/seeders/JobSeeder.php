<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jobs=Job::factory(50)->create();
        foreach ($jobs as $job) {
            Image::factory(1)->create([
                'imageable_id'=>$job->id,
                'imageable_type'=>Job::class
            ]);
        }
    }
}
