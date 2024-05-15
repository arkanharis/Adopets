<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            [
                'user_id' => 1,
                'name' => 'Buddy',
                'sex' => 'Male',
                'species' => 'Dog',
                'age' => 3,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 2,
                'name' => 'Mittens',
                'sex' => 'Female',
                'species' => 'Cat',
                'age' => 2,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 3,
                'name' => 'Charlie',
                'sex' => 'Male',
                'species' => 'Bird',
                'age' => 1,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 4,
                'name' => 'Max',
                'sex' => 'Male',
                'species' => 'Dog',
                'age' => 4,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 5,
                'name' => 'Bella',
                'sex' => 'Female',
                'species' => 'Cat',
                'age' => 3,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 6,
                'name' => 'Luna',
                'sex' => 'Female',
                'species' => 'Rabbit',
                'age' => 2,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 7,
                'name' => 'Rocky',
                'sex' => 'Male',
                'species' => 'Dog',
                'age' => 5,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 8,
                'name' => 'Shadow',
                'sex' => 'Male',
                'species' => 'Cat',
                'age' => 4,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 9,
                'name' => 'Daisy',
                'sex' => 'Female',
                'species' => 'Dog',
                'age' => 2,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 10,
                'name' => 'Jack',
                'sex' => 'Male',
                'species' => 'Dog',
                'age' => 1,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 11,
                'name' => 'Oliver',
                'sex' => 'Male',
                'species' => 'Cat',
                'age' => 3,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 12,
                'name' => 'Milo',
                'sex' => 'Male',
                'species' => 'Cat',
                'age' => 2,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 13,
                'name' => 'Coco',
                'sex' => 'Female',
                'species' => 'Parrot',
                'age' => 1,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 14,
                'name' => 'Ruby',
                'sex' => 'Female',
                'species' => 'Dog',
                'age' => 4,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 15,
                'name' => 'Leo',
                'sex' => 'Male',
                'species' => 'Cat',
                'age' => 5,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 16,
                'name' => 'Nala',
                'sex' => 'Female',
                'species' => 'Dog',
                'age' => 3,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 17,
                'name' => 'Loki',
                'sex' => 'Male',
                'species' => 'Cat',
                'age' => 2,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 18,
                'name' => 'Sophie',
                'sex' => 'Female',
                'species' => 'Rabbit',
                'age' => 1,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 19,
                'name' => 'Zeus',
                'sex' => 'Male',
                'species' => 'Dog',
                'age' => 6,
                'status' => 'Healthy',
            ],
            [
                'user_id' => 20,
                'name' => 'Lilly',
                'sex' => 'Female',
                'species' => 'Cat',
                'age' => 4,
                'status' => 'Healthy',
            ],
        ]);
    }
}
