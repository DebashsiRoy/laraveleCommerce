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
        for ($i = 1; $i <= 6; $i++) {
            Policy::create([
                'name'=> fake()->name,
                'description'=> fake()->text()
            ]);
        }

//        $policy= collect(
//            [
//                [
//                    'name' => 'dk0',
//                    'description' => 'dk000'
//                ],
//                [
//                    'name' => 'dk1',
//                    'description' => 'dk1111'
//                ],
//                [
//                    'name' => 'dk2',
//                    'description' => 'dk2222'
//                ],
//                [
//                    'name' => 'dk3',
//                    'description' => 'dk3333'
//                ],
//                [
//                    'name' => 'dk4',
//                    'description' => 'dk444'
//                ],
//                [
//                    'name' => 'dk5',
//                    'description' => 'dk5555'
//                ]
//
//            ]
//        );
//        $policy->each(function ($item) {
//            Policy::insert($item);
//        });
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


























