<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;
use App\Models\Resort;

class FacilityResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facility = [
            'fac1' => Facility::where('facid', 1)->firstOrFail(),
            'fac2' => Facility::where('facid', 2)->firstOrFail(),
            'fac3' => Facility::where('facid', 3)->firstOrFail(),
            'fac4' => Facility::where('facid', 4)->firstOrFail(),
            'fac5' => Facility::where('facid', 5)->firstOrFail(),
            'fac6' => Facility::where('facid', 6)->firstOrFail(),
            'fac7' => Facility::where('facid', 7)->firstOrFail(),
            'fac8' => Facility::where('facid', 8)->firstOrFail(),
            'fac9' => Facility::where('facid', 9)->firstOrFail(),
            'fac10' => Facility::where('facid', 10)->firstOrFail(),
            'fac11' => Facility::where('facid', 11)->firstOrFail(),
            'fac12' => Facility::where('facid', 12)->firstOrFail(),
            'fac13' => Facility::where('facid', 13)->firstOrFail(),
            'fac14' => Facility::where('facid', 14)->firstOrFail(),
            'fac15' => Facility::where('facid', 15)->firstOrFail(),
        ];

        $resorts = [
            'res1' => Resort::where('resort', 'Aiiso Beach Resort')->firstOrFail(),
            'res2' => Resort::where('resort', 'Antalya Resort')->firstOrFail(),
            'res3' => Resort::where('resort', 'Aqualuna Beach Resort')->firstOrFail(),
            'res4' => Resort::where('resort', 'Augusta Eco Wellness Resort')->firstOrFail(),
            'res5' => Resort::where('resort', 'Marriott\'s Marbella Beach Resort')->firstOrFail(),
            'res6' => Resort::where('resort', 'Catalonia Riviera Maya Resort')->firstOrFail(),
            'res7' => Resort::where('resort', 'Corsica Resort')->firstOrFail(),
            'res8' => Resort::where('resort', 'Katsura Seaside Resort')->firstOrFail(),
            'res9' => Resort::where('resort', 'Subic Beach Resort')->firstOrFail(),
            'res10' => Resort::where('resort', 'Sun and Moon Resort')->firstOrFail(),
            'res11' => Resort::where('resort', 'Tiara Marimar Resort')->firstOrFail(),
            'res12' => Resort::where('resort', 'Pearl Farm Beach Resort')->firstOrFail(),
            'res13' => Resort::where('resort', 'Renaissance Okinawa Resort')->firstOrFail(),
            'res14' => Resort::where('resort', 'Jungmun Resort')->firstOrFail(),
            'res15' => Resort::where('resort', 'Vale do Lobo Resort')->firstOrFail(),
        ];

        $facilityResort = [
            [
                "resort" => $resorts['res1']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res1']->resort,
                "facid" => $facility['fac6']->facid,
            ],
            [
                "resort" => $resorts['res1']->resort,
                "facid" => $facility['fac11']->facid,
            ],
            [
                "resort" => $resorts['res2']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res2']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res2']->resort,
                "facid" => $facility['fac12']->facid,
            ],
            [
                "resort" => $resorts['res3']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res3']->resort,
                "facid" => $facility['fac10']->facid,
            ],
            [
                "resort" => $resorts['res3']->resort,
                "facid" => $facility['fac14']->facid,
            ],
            [
                "resort" => $resorts['res3']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res4']->resort,
                "facid" => $facility['fac2']->facid,
            ],
            [
                "resort" => $resorts['res4']->resort,
                "facid" => $facility['fac6']->facid,
            ],
            [
                "resort" => $resorts['res4']->resort,
                "facid" => $facility['fac8']->facid,
            ],
            [
                "resort" => $resorts['res4']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res5']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res5']->resort,
                "facid" => $facility['fac6']->facid,
            ],
            [
                "resort" => $resorts['res5']->resort,
                "facid" => $facility['fac13']->facid,
            ],
            [
                "resort" => $resorts['res6']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res6']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res6']->resort,
                "facid" => $facility['fac3']->facid,
            ],
            [
                "resort" => $resorts['res6']->resort,
                "facid" => $facility['fac9']->facid,
            ],
            [
                "resort" => $resorts['res7']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res7']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res7']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res8']->resort,
                "facid" => $facility['fac9']->facid,
            ],
            [
                "resort" => $resorts['res8']->resort,
                "facid" => $facility['fac13']->facid,
            ],
            [
                "resort" => $resorts['res8']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res8']->resort,
                "facid" => $facility['fac12']->facid,
            ],
            [
                "resort" => $resorts['res9']->resort,
                "facid" => $facility['fac11']->facid,
            ],
            [
                "resort" => $resorts['res9']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res9']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res10']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res10']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res10']->resort,
                "facid" => $facility['fac12']->facid,
            ],
            [
                "resort" => $resorts['res10']->resort,
                "facid" => $facility['fac13']->facid,
            ],
            [
                "resort" => $resorts['res11']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res11']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res11']->resort,
                "facid" => $facility['fac6']->facid,
            ],
            [
                "resort" => $resorts['res12']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res12']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res12']->resort,
                "facid" => $facility['fac5']->facid,
            ],
            [
                "resort" => $resorts['res12']->resort,
                "facid" => $facility['fac12']->facid,
            ],
            [
                "resort" => $resorts['res13']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res13']->resort,
                "facid" => $facility['fac8']->facid,
            ],
            [
                "resort" => $resorts['res13']->resort,
                "facid" => $facility['fac10']->facid,
            ],
            [
                "resort" => $resorts['res14']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res14']->resort,
                "facid" => $facility['fac8']->facid,
            ],
            [
                "resort" => $resorts['res14']->resort,
                "facid" => $facility['fac9']->facid,
            ],
            [
                "resort" => $resorts['res14']->resort,
                "facid" => $facility['fac15']->facid,
            ],
            [
                "resort" => $resorts['res15']->resort,
                "facid" => $facility['fac1']->facid,
            ],
            [
                "resort" => $resorts['res15']->resort,
                "facid" => $facility['fac4']->facid,
            ],
            [
                "resort" => $resorts['res15']->resort,
                "facid" => $facility['fac11']->facid,
            ],
            [
                "resort" => $resorts['res15']->resort,
                "facid" => $facility['fac15']->facid,
            ],
        ];

        DB::table('facinresorts')->insert($facilityResort);
    }
}
