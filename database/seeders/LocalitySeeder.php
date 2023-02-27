<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Empty the table
        Locality::truncate();

        //Make some datas seed
        $localities = [
            ['postal_code'=>'1050',
            'locality'=>'Ixelles',
            ],
            ['postal_code'=>'1000',
            'locality'=>'Bruxelles',
            ],
            ['postal_code'=>'1080',
            'locality'=>'Molenbeek',
            ],
            ['postal_code'=>'1070',
            'locality'=>'Anderlecht',
            ], 
            ['postal_code'=>'1030',
            'locality'=>'Schaerbeek',
            ],
        ];

        DB::table('loclities')->insert($localities);
    }
}
