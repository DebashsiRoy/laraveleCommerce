<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        for ($i = 1; $i <= 6; $i++) {
//            Policy::create([
//                'name'=> fake()->name,
//                'description'=> fake()->text()
//            ]);
//        }

        $policy= collect(
            [
                [
                    'type' => 'dk0',
                    'description' => 'dk000'
                ],
                [
                    'type' => 'dk1',
                    'description' => 'dk1111'
                ],
                [
                    'type' => 'dk2',
                    'description' => 'dk2222'
                ],
                [
                    'type' => 'dk3',
                    'description' => 'dk3333'
                ],
                [
                    'type' => 'dk4',
                    'description' => 'dk444'
                ],
                [
                    'type' => 'dk5',
                    'description' => 'dk5555'
                ]

            ]
        );
        $policy->each(function ($item) {
            Policy::insert($item);
        });
//        Policy::factory()->create([
//            'name' => 'dk',
//            'description' => 'dk'
//        ]);

//        $json = File::get(path:'database/json/policy.json');
//        $policy = collect(json_decode($json));    // json decode
//        $policy->each(function ($item)
//        {
//            Policy::create([
//                'name' => $item->name,
//                'description' => $item->description,
//            ]);
//        });
    }
}


























