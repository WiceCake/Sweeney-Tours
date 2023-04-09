<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'country' => 'Turkey',
                'language' => 'Turkish',
                'timezone' => 'GMT+3',
                'currency' => '₺ - Turkish Lira',
            ],
            [
                'country' => 'Spain',
                'language' => 'Castillian',
                'timezone' => 'GMT+2',
                'currency' => '€ - Euro',
            ],
            [
                'country' => 'Portugal',
                'language' => 'Portuguese',
                'timezone' => 'GMT+1',
                'currency' => '€ - Euro',
            ],
            [
                'country' => 'Philippines',
                'language' => 'Tagalog',
                'timezone' => 'GMT+8',
                'currency' => '₱ - Philippine Peso',
            ],
            [
                'country' => 'Japan',
                'language' => 'Japanese',
                'timezone' => 'GMT+9',
                'currency' => '¥ - Japanese Yen',
            ],
            [
                'country' => 'South Korea',
                'language' => 'Hanggul',
                'timezone' => 'GMT+9',
                'currency' => '₩ - Korean Won',
            ],
            [
                'country' => 'France',
                'language' => 'French',
                'timezone' => 'GMT+2',
                'currency' => '€ - Euro',
            ],
            [
                'country' => 'Canada',
                'language' => 'English',
                'timezone' => 'GMT-4',
                'currency' => '$ - Canadian Dollar',
            ],
            [
                'country' => 'Italy',
                'language' => 'Italian',
                'timezone' => 'GMT+2',
                'currency' => '€ - Euro',
            ],
            [
                'country' => 'Australia',
                'language' => 'English',
                'timezone' => 'GMT+10',
                'currency' => '$ - Australian Dollar',
            ],
        ]);
    }
}
