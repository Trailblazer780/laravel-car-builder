<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Part;

class CarPartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('parts')->truncate();

        // ---------------------------------------------------------------------- Engine
        $turbo = Part::create([
            'part_name' => 'Turbo',
            'part_description' => 'A turbo is a type of engine modification that increases the power of an engine by increasing the flow of air into the engine. A turbo is typically a power modification, but can also be a fuel injection modification.',
            'part_category' => 'Engine',
        ]);

        $superCharger = Part::create([
            'part_name' => 'Supercharger',
            'part_description' => 'A supercharger is a type of engine modification that increases the power of an engine by increasing the flow of air into the engine.',
            'part_category' => 'Engine',
        ]);

        // ---------------------------------------------------------------------- Brakes
        $brembo = Part::create([
            'part_name' => 'Brembo Brakes',
            'part_description' => 'A brembo is a type of brake modification that increases the breaking force',
            'part_category' => 'Brakes',
        ]);

        $slottedRouters = Part::create([
            'part_name' => 'Slotted Routers',
            'part_description' => 'A slotted router is a type of router modification that increases the breaking force',
            'part_category' => 'Brakes',
        ]);

        // ---------------------------------------------------------------------- Suspension
        $coilOvers = Part::create([
            'part_name' => 'Coil Overs',
            'part_description' => 'A coil over is a type of Suspension modification to lower the vehicle',
            'part_category' => 'Suspension',
        ]);


        // ---------------------------------------------------------------------- Cars
        $car1 = Part::create([
            'part_name' => '2000 Subaru Legacy B4 RSK',
            'part_description' => 'Boxer 4 Cyl 2.0l Twin Turbo 280Hp',
            'part_category' => 'Car',
        ]);

        $car2 = Part::create([
            'part_name' => '2020 Subaru Impreza WRX STI',
            'part_description' => 'Boxer 4 Cyl 2.5l Turbo 280Hp',
            'part_category' => 'Car',
        ]);

        $car3 = Part::create([
            'part_name' => '2020 Nissan GTR',
            'part_description' => 'V6 3.8l Twin Turbo 565Hp',
            'part_category' => 'Car',
        ]);

        $car4 = Part::create([
            'part_name' => '1999 Nissan Skyline GTR',
            'part_description' => 'Straight 6 2.6l Twin Turbo 280Hp',
            'part_category' => 'Car',
        ]);

        $car5 = Part::create([
            'part_name' => '2015 Mitsubishi Lancer Evolution X',
            'part_description' => '4 Cyl 2.0l Turbo 303Hp',
            'part_category' => 'Car',
        ]);


    }
}
