<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resort;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resort1 = Resort::where('resort', 'Anantara Vilamoura Resort')->firstOrFail();
        $resort2 = Resort::where('resort', 'Marriott\'s Marbella Beach Resort')->firstOrFail();
        $resort3 = Resort::where('resort', 'Shichi no Resort')->firstOrFail();
        $resort4 = Resort::where('resort', 'Subic Beach Resort')->firstOrFail();
        $resort5 = Resort::where('resort', 'Antalya Resort')->firstOrFail();
        $resort6 = Resort::where('resort', 'Catalonia Yucatan Beach Resort')->firstOrFail();
        $resort7 = Resort::where('resort', 'Pearl Farm Beach Resort')->firstOrFail();
        $resort8 = Resort::where('resort', 'Dahican Surf Resort')->firstOrFail();
        $resort9 = Resort::where('resort', 'Augusta Eco Wellness Resort')->firstOrFail();
        $resort10 = Resort::where('resort', 'Sun and Moon Resort')->firstOrFail();
        $resort11 = Resort::where('resort', 'Shilla Stay Jeju')->firstOrFail();
        $resort12 = Resort::where('resort', 'Aqualuna Beach Resort')->firstOrFail();
        $resort13 = Resort::where('resort', 'Renaissance Okinawa Resort')->firstOrFail();
        $resort14 = Resort::where('resort', 'Aiiso Beach Resort')->firstOrFail();
        $resort15 = Resort::where('resort', 'Barcelo Punta Umbria Mar')->firstOrFail();

        $hotels = [
            [
                'hotelid' => 12345,
                'hotelname' => 'Anantara Vilamoura Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'fb',
                'page' => 12,
                'resort' => $resort1->resort,
                'resortloc' => 'Victoria Gardens, Portugal',
                'roomtotal' => 62,
            ],
            [
                'hotelid' => 24315,
                'hotelname' => 'Marriott\'s Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 3,
                'stdbasis' => 'bb',
                'page' => 18,
                'resort' => $resort2->resort,
                'resortloc' => 'Málaga, Spain',
                'roomtotal' => 45,
            ],
            [
                'hotelid' => 12442,
                'hotelname' => 'Hotel Shichi',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 2,
                'stdbasis' => 'bb',
                'page' => 4,
                'resort' => $resort3->resort,
                'resortloc' => 'Miyagi District, Japan',
                'roomtotal' => 60,
            ],
            [
                'hotelid' => 28192,
                'hotelname' => 'Subic Park Hotel',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 3,
                'stdbasis' => 'fb',
                'page' => 22,
                'resort' => $resort4->resort,
                'resortloc' => 'Matnog, Sorsogon',
                'roomtotal' => 30,
            ],
            [
                'hotelid' => 25162,
                'hotelname' => 'Antalya Villa Hotel',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 1,
                'stdbasis' => 'ao',
                'page' => 10,
                'resort' => $resort5->resort,
                'resortloc' => 'Mithatpaşa, Turkey',
                'roomtotal' => 80,
            ],
            [
                'hotelid' => 92910,
                'hotelname' => 'CTL Yucatan Hotel',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 3,
                'stdbasis' => 'hb',
                'page' => 18,
                'resort' => $resort6->resort,
                'resortloc' => 'Puerto Aventuras, Mexico',
                'roomtotal' => 50,
            ],
            [
                'hotelid' => 28198,
                'hotelname' => 'Pearl Royal Hotel',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 3,
                'stdbasis' => 'ao',
                'page' => 9,
                'resort' => $resort7->resort,
                'resortloc' => 'Davao City, Davao del Sur',
                'roomtotal' => 30,
            ],
            [
                'hotelid' => 73723,
                'hotelname' => 'Surf Village Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'bb',
                'page' => 20,
                'resort' => $resort8->resort,
                'resortloc' => 'Mati, Davao Oriental',
                'roomtotal' => 35,
            ],
            [
                'hotelid' => 12981,
                'hotelname' => 'Grand Eco Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'hb',
                'page' => 16,
                'resort' => $resort9->resort,
                'resortloc' => 'Lugar Padriñan, Spain',
                'roomtotal' => 55,
            ],
            [
                'hotelid' => 76261,
                'hotelname' => 'Lotte Hotel Jeju',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 5,
                'stdbasis' => 'bb',
                'page' => 15,
                'resort' => $resort10->resort,
                'resortloc' => 'Jeju-do, South Korea',
                'roomtotal' => 75,
            ],
            [
                'hotelid' => 12778,
                'hotelname' => 'The Shilla Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 5,
                'stdbasis' => 'fb',
                'page' => 6,
                'resort' => $resort11->resort,
                'resortloc' => 'Jeju-do, South Korea',
                'roomtotal' => 60,
            ],
            [
                'hotelid' => 21616,
                'hotelname' => 'Aqua Hotel',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'ao',
                'page' => 10,
                'resort' => $resort12->resort,
                'resortloc' => 'Solitary Iss Wy, Australia',
                'roomtotal' => 50,
            ],
            [
                'hotelid' => 26717,
                'hotelname' => 'Hotel Moon',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'bb',
                'page' => 13,
                'resort' => $resort13->resort,
                'resortloc' => 'Okinawa, Japan',
                'roomtotal' => 70,
            ],
            [
                'hotelid' => 42182,
                'hotelname' => 'Grand Park Hotel',
                'sunbeam' => true,
                'ya' => true,
                'rating' => 4,
                'stdbasis' => 'hb',
                'page' => 12,
                'resort' => $resort14->resort,
                'resortloc' => 'Tairatoyoma, Iwaki',
                'roomtotal' => 50,
            ],
            [
                'hotelid' => 41271,
                'hotelname' => 'Hotel Pato Amarillo',
                'sunbeam' => false,
                'ya' => true,
                'rating' => 5,
                'stdbasis' => 'fb',
                'page' => 13,
                'resort' => $resort15->resort,
                'resortloc' => 'Huelva, Spain',
                'roomtotal' => 47,
            ],
        ];

        DB::table('hotels')->insert($hotels);
    }
}
