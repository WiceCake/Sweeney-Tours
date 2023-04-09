<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facility = [
            [
                'facid' => 1,
                'description' => 'swimming pools',
                'category' => 'a'
            ],
            [
                'facid' => 2,
                'description' => 'discos',
                'category' => 'e'
            ],
            [
                'facid' => 3,
                'description' => 'horseback riding',
                'category' => 'e'
            ],
            [
                'facid' => 4,
                'description' => 'waiter service',
                'category' => 'a'
            ],
            [
                'facid' => 5,
                'description' => 'kid\'s playground',
                'category' => 'c'
            ],
            [
                'facid' => 6,
                'description' => 'towels',
                'category' => 'b'
            ],
            [
                'facid' => 7,
                'description' => 'telephones in bedroom',
                'category' => 'b'
            ],
            [
                'facid' => 8,
                'description' => 'fitness area',
                'category' => 's'
            ],
            [
                'facid' => 9,
                'description' => 'sauna',
                'category' => 'a'
            ],
            [
                'facid' => 10,
                'description' => 'hairdryers',
                'category' => 'b'
            ],
            [
                'facid' => 11,
                'description' => 'free wi-fi',
                'category' => 'a'
            ],
            [
                'facid' => 12,
                'description' => 'catering',
                'category' => 'm'
            ],
            [
                'facid' => 13,
                'description' => 'air conditioning and heating in bedroom',
                'category' => 'b'
            ],
            [
                'facid' => 14,
                'description' => 'laundry and dry cleaning services',
                'category' => 'a'
            ],
            [
                'facid' => 15,
                'description' => 'restaurant',
                'category' => 'm'
            ],
        ];

        DB::table('facilities')->insert($facility);
    }
}
