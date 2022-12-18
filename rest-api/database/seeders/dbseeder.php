<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class dbseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $value){
            DB::table('people')->insert([
                'name'=> $faker -> firstName,
                'surname'=>$faker -> lastName,
                'phone'=>$faker -> phoneNumber,
                'street'=>$faker -> streetAddress,
                'city'=>$faker -> city,
                'country'=>$faker -> country,
            ]);
        }
    }
}
