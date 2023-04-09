<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Region;

class ResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $region1 = Region::where('region', 'Brittany')->firstOrFail();
        $region2 = Region::where('region', 'Algarve')->firstOrFail();
        $region3 = Region::where('region', 'Andalusia')->firstOrFail();
        $region4 = Region::where('region', 'Alsace')->firstOrFail();
        $region5 = Region::where('region', 'Bicol Region')->firstOrFail();
        $region6 = Region::where('region', 'Atheka')->firstOrFail();
        $region7 = Region::where('region', 'Catalonia')->firstOrFail();
        $region8 = Region::where('region', 'Davao Region')->firstOrFail();
        $region9 = Region::where('region', 'Galicia')->firstOrFail();
        $region10 = Region::where('region', 'Jeju Island')->firstOrFail();
        $region11 = Region::where('region', 'Lisbon')->firstOrFail();
        $region12 = Region::where('region', 'New South Wales')->firstOrFail();
        $region13 = Region::where('region', 'Provence')->firstOrFail();
        $region14 = Region::where('region', 'Shikoku')->firstOrFail();
        $region15 = Region::where('region', 'Tohoku')->firstOrFail();
        $region16 = Region::where('region', 'Umbria')->firstOrFail();

        $resort = [
            [
                'resort' => 'Sofitel Quiberon Thalassa Sea & Spa',
                'region' => $region1->region,
                'transfertime' => '1 hour',
                'beach' => 'Plage de Saint-Julien',
                'beachnum' => 1,
                'page' => 9
            ],
            [
                'resort' => 'Le Grand Hotel des Thermes',
                'region' => $region1->region,
                'transfertime' => '40 minutes',
                'beach' => 'Rochebonne Beach',
                'beachnum' => 2,
                'page' => 9
            ],
            [
                'resort' => 'Anantara Vilamoura Resort',
                'region' => $region2->region,
                'transfertime' => '4 hours',
                'beach' => 'Praia da Falésia',
                'beachnum' => 3,
                'page' => 3
            ],
            [
                'resort' => 'Quinta do Lago Resort',
                'region' => $region2->region,
                'transfertime' => '5 hours',
                'beach' => 'Praia da Quinta do Lago',
                'beachnum' => 4,
                'page' => 6
            ],
            [
                'resort' => 'Vale do Lobo Resort',
                'region' => $region2->region,
                'transfertime' => '3 hours',
                'beach' => 'Praia de Vale do Lobo',
                'beachnum' => 5,
                'page' => 5
            ],
            [
                'resort' => 'Marriott\'s Marbella Beach Resort',
                'region' => $region3->region,
                'transfertime' => '2 hours',
                'beach' => 'El Faro Beach',
                'beachnum' => 6,
                'page' => 4
            ],
            [
                'resort' => 'French Riviera',
                'region' => $region4->region,
                'transfertime' => '1 hours',
                'beach' => 'Cannes',
                'beachnum' => 7,
                'page' => 12
            ],
            [
                'resort' => 'Corsica Resort',
                'region' => $region4->region,
                'transfertime' => '3 hours',
                'beach' => 'Beach Rondinara',
                'beachnum' => 8,
                'page' => 4
            ],
            [
                'resort' => 'Subic Beach Resort',
                'region' => $region5->region,
                'transfertime' => '45 minutes',
                'beach' => 'Subic Beach',
                'beachnum' => 9,
                'page' => 18
            ],
            [
                'resort' => 'Antalya Resort',
                'region' => $region6->region,
                'transfertime' => '35 minutes',
                'beach' => 'Kabak Beach',
                'beachnum' => 10,
                'page' => 21
            ],
            [
                'resort' => 'Catalonia Riviera Maya Resort',
                'region' => $region7->region,
                'transfertime' => '35 minutes',
                'beach' => 'Riveria Maya',
                'beachnum' => 11,
                'page' => 21
            ],
            [
                'resort' => 'Catalonia Yucatan Beach Resort',
                'region' => $region7->region,
                'transfertime' => '25 minutes',
                'beach' => 'Barceloneta Beach',
                'beachnum' => 12,
                'page' => 10
            ],
            [
                'resort' => 'Hotel La Costa Golf & Beach Resort',
                'region' => $region7->region,
                'transfertime' => '50 minutes',
                'beach' => 'Platja de Pals Beach',
                'beachnum' => 13,
                'page' => 18
            ],
            [
                'resort' => 'Pearl Farm Beach Resort',
                'region' => $region8->region,
                'transfertime' => '50 minutes',
                'beach' => 'Canibad Beach',
                'beachnum' => 14,
                'page' => 2
            ],
            [
                'resort' => 'Dahican Surf Resort',
                'region' => $region8->region,
                'transfertime' => '45 minutes',
                'beach' => 'Dahican Beach',
                'beachnum' => 15,
                'page' => 10
            ],
            [
                'resort' => 'Augusta Eco Wellness Resort',
                'region' => $region9->region,
                'transfertime' => '25 minutes',
                'beach' => 'Silgar Beach',
                'beachnum' => 16,
                'page' => 21
            ],
            [
                'resort' => 'Rodeiramar Resort',
                'region' => $region9->region,
                'transfertime' => '30 minutes',
                'beach' => 'Praia de Rodeira',
                'beachnum' => 17,
                'page' => 20
            ],
            [
                'resort' => 'Sun and Moon Resort',
                'region' => $region10->region,
                'transfertime' => '50 minutes',
                'beach' => 'Gapa Island Beach',
                'beachnum' => 18,
                'page' => 23
            ],
            [
                'resort' => 'Shilla Stay Jeju',
                'region' => $region10->region,
                'transfertime' => '10 minutes',
                'beach' => 'Iho Beach',
                'beachnum' => 19,
                'page' => 7
            ],
            [
                'resort' => 'Jungmun Resort',
                'region' => $region10->region,
                'transfertime' => '1 hour and 10 minutes',
                'beach' => 'Jungmun Beach',
                'beachnum' => 20,
                'page' => 12
            ],
            [
                'resort' => 'Pestana Cidadela Cascais',
                'region' => $region11->region,
                'transfertime' => '30 minutes',
                'beach' => 'Praia da Conceicao Beach',
                'beachnum' => 21,
                'page' => 12
            ],
            [
                'resort' => 'Amarna Luxury Beach Resort',
                'region' => $region12->region,
                'transfertime' => '25 minutes',
                'beach' => 'Nelson Bay',
                'beachnum' => 22,
                'page' => 17
            ],
            [
                'resort' => 'Aqualuna Beach Resort',
                'region' => $region12->region,
                'transfertime' => '1 hour',
                'beach' => 'Sapphire Beach',
                'beachnum' => 23,
                'page' => 6
            ],
            [
                'resort' => 'Tiara Marimar Resort',
                'region' => $region13->region,
                'transfertime' => '45 minutes',
                'beach' => 'Figueirette Beach',
                'beachnum' => 24,
                'page' => 2
            ],
            [
                'resort' => 'Katsura Seaside Resort',
                'region' => $region14->region,
                'transfertime' => '45 minutes',
                'beach' => 'Katsura Beach',
                'beachnum' => 25,
                'page' => 19
            ],
            [
                'resort' => 'Renaissance Okinawa Resort',
                'region' => $region14->region,
                'transfertime' => '1 hour',
                'beach' => 'Hiwasa Beach',
                'beachnum' => 26,
                'page' => 12
            ],
            [
                'resort' => 'Aiiso Beach Resort',
                'region' => $region15->region,
                'transfertime' => '2 hour',
                'beach' => 'Nakoso Beach',
                'beachnum' => 27,
                'page' => 12
            ],
            [
                'resort' => 'Shichi no Resort',
                'region' => $region15->region,
                'transfertime' => '50 minutes',
                'beach' => 'Shichigahama Beach',
                'beachnum' => 28,
                'page' => 25
            ],
            [
                'resort' => 'Kikai\'s Beach Resort',
                'region' => $region15->region,
                'transfertime' => '1 hour and 40 minutes',
                'beach' => 'Oganishi Beach',
                'beachnum' => 29,
                'page' => 27
            ],
            [
                'resort' => 'Barcelo Punta Umbria Mar',
                'region' => $region15->region,
                'transfertime' => '1 hour',
                'beach' => 'Punta Umbría beach',
                'beachnum' => 30,
                'page' => 11
            ],
        ];

        DB::table('resorts')->insert($resort);
    }
}
