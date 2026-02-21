<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pilot;

class PilotSeeder extends Seeder
{
    /**
     * Seed the pilots table with F1 2026 drivers
     *
     * @return void
     */
    public function run()
    {
        $pilots = [
            [
                'name' => 'Max',
                'surname' => 'Verstappen',
                'nationality' => 'Dutch',
                'team' => 'Red Bull Racing',
                'car_number' => 1,
                'birth_date' => '1997-12-30',
                'poles' => 41,
                'wins' => 63,
            ],
            [
                'name' => 'Lewis',
                'surname' => 'Hamilton',
                'nationality' => 'British',
                'team' => 'Ferrari',
                'car_number' => 44,
                'birth_date' => '1985-01-07',
                'poles' => 136,
                'wins' => 103,
            ],
            [
                'name' => 'Charles',
                'surname' => 'Leclerc',
                'nationality' => 'Monegasque',
                'team' => 'Ferrari',
                'car_number' => 16,
                'birth_date' => '1997-10-16',
                'poles' => 5,
                'wins' => 5,
            ],
            [
                'name' => 'Lando',
                'surname' => 'Norris',
                'nationality' => 'British',
                'team' => 'McLaren',
                'car_number' => 4,
                'birth_date' => '1999-11-13',
                'poles' => 3,
                'wins' => 3,
            ],
            [
                'name' => 'Carlos',
                'surname' => 'Sainz',
                'nationality' => 'Spanish',
                'team' => 'Williams',
                'car_number' => 55,
                'birth_date' => '1994-09-01',
                'poles' => 5,
                'wins' => 5,
            ],
            [
                'name' => 'Oscar',
                'surname' => 'Piastri',
                'nationality' => 'Australian',
                'team' => 'McLaren',
                'car_number' => 81,
                'birth_date' => '2001-04-06',
                'poles' => 1,
                'wins' => 2,
            ],
            [
                'name' => 'George',
                'surname' => 'Russell',
                'nationality' => 'British',
                'team' => 'Mercedes',
                'car_number' => 63,
                'birth_date' => '1998-02-15',
                'poles' => 3,
                'wins' => 3,
            ],
            [
                'name' => 'Fernando',
                'surname' => 'Alonso',
                'nationality' => 'Spanish',
                'team' => 'Aston Martin',
                'car_number' => 14,
                'birth_date' => '1981-07-29',
                'poles' => 32,
                'wins' => 32,
            ],
            [
                'name' => 'Sergio',
                'surname' => 'Pérez',
                'nationality' => 'Mexican',
                'team' => 'Red Bull Racing',
                'car_number' => 11,
                'birth_date' => '1990-01-26',
                'poles' => 3,
                'wins' => 6,
            ],
            [
                'name' => 'Yuki',
                'surname' => 'Tsunoda',
                'nationality' => 'Japanese',
                'team' => 'Racing Bulls',
                'car_number' => 22,
                'birth_date' => '2000-05-11',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Lance',
                'surname' => 'Stroll',
                'nationality' => 'Canadian',
                'team' => 'Aston Martin',
                'car_number' => 18,
                'birth_date' => '1998-10-29',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Alexander',
                'surname' => 'Albon',
                'nationality' => 'Thai',
                'team' => 'Williams',
                'car_number' => 23,
                'birth_date' => '1996-03-23',
                'poles' => 0,
                'wins' => 1,
            ],
            [
                'name' => 'Pierre',
                'surname' => 'Gasly',
                'nationality' => 'French',
                'team' => 'Alpine',
                'car_number' => 10,
                'birth_date' => '1996-08-07',
                'poles' => 0,
                'wins' => 1,
            ],
            [
                'name' => 'Esteban',
                'surname' => 'Ocon',
                'nationality' => 'French',
                'team' => 'Alpine',
                'car_number' => 31,
                'birth_date' => '1996-09-17',
                'poles' => 0,
                'wins' => 1,
            ],
            [
                'name' => 'Nico',
                'surname' => 'Hulkenberg',
                'nationality' => 'German',
                'team' => 'Haas',
                'car_number' => 27,
                'birth_date' => '1987-02-19',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Kevin',
                'surname' => 'Magnussen',
                'nationality' => 'Danish',
                'team' => 'Haas',
                'car_number' => 20,
                'birth_date' => '1992-10-05',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Oliver',
                'surname' => 'Bearman',
                'nationality' => 'British',
                'team' => 'Haas',
                'car_number' => 87,
                'birth_date' => '2005-05-08',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Jack',
                'surname' => 'Doohan',
                'nationality' => 'Australian',
                'team' => 'Racing Bulls',
                'car_number' => 45,
                'birth_date' => '2003-09-21',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Guanyu',
                'surname' => 'Zhou',
                'nationality' => 'Chinese',
                'team' => 'Sauber',
                'car_number' => 24,
                'birth_date' => '1999-05-30',
                'poles' => 0,
                'wins' => 0,
            ],
            [
                'name' => 'Nico',
                'surname' => 'Rosberg',
                'nationality' => 'German',
                'team' => 'Sauber',
                'car_number' => 41,
                'birth_date' => '2004-06-14',
                'poles' => 0,
                'wins' => 0,
            ],
        ];

        foreach ($pilots as $pilot) {
            Pilot::create($pilot);
        }
    }
}
