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

        // ---------------------------------------------------------------------- Transmission
        $manual = Part::create([
            'part_name' => 'Manual',
            'part_description' => 'A manual transmission is a type of transmission that is operated by hand, using a lever or pedals.',
            'part_category' => 'Transmission',
        ]);

        $sequential = Part::create([
            'part_name' => 'Sequential',
            'part_description' => 'A manual transmission that is sequential.',
            'part_category' => 'Transmission',
        ]);

        $clutch = Part::create([
            'part_name' => 'Stage 4 Racing Clutch',
            'part_description' => 'A clutch is a device that holds the engine in place when the transmission is engaged.',
            'part_category' => 'Transmission',
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

        $airRide = Part::create([
            'part_name' => 'Air Ride',
            'part_description' => 'A air ride is a type of Suspension modification to raise or lower the vehicle on demand',
            'part_category' => 'Suspension',
        ]);

        // ---------------------------------------------------------------------- Exhaust
        $catback = Part::create([
            'part_name' => 'Catback',
            'part_description' => 'A catback is a type of exhaust modification that increases the power of an engine by increasing the flow of exhaust out of the engine',
            'part_category' => 'Exhaust',
        ]);

        $headers = Part::create([
            'part_name' => 'Headers',
            'part_description' => 'A header is a type of exhaust manifold modification',
            'part_category' => 'Exhaust',
        ]);

        // ---------------------------------------------------------------------- Body
        $vielside = Part::create([
            'part_name' => 'Viel Side Body Kit',
            'part_description' => 'A viel side body kit',
            'part_category' => 'Body',
        ]);

        $carbonHood = Part::create([
            'part_name' => 'Carbon Fibre Hood',
            'part_description' => 'Carbon Fibre Hood',
            'part_category' => 'Body',
        ]);

        $spoiler = Part::create([
            'part_name' => 'Spoiler',
            'part_description' => 'Increases aerodynamic performance',
            'part_category' => 'Body',
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
