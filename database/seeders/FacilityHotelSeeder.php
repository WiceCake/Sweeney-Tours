<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;
use App\Models\Hotel;

class FacilityHotelSeeder extends Seeder
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

        $hotels = [
            'hot1' => Hotel::where('hotelid', 12345)->firstOrFail(),
            'hot2' => Hotel::where('hotelid', 12442)->firstOrFail(),
            'hot3' => Hotel::where('hotelid', 12778)->firstOrFail(),
            'hot4' => Hotel::where('hotelid', 12981)->firstOrFail(),
            'hot5' => Hotel::where('hotelid', 21616)->firstOrFail(),
            'hot6' => Hotel::where('hotelid', 24315)->firstOrFail(),
            'hot7' => Hotel::where('hotelid', 25162)->firstOrFail(),
            'hot8' => Hotel::where('hotelid', 26717)->firstOrFail(),
            'hot9' => Hotel::where('hotelid', 28192)->firstOrFail(),
            'hot10' => Hotel::where('hotelid', 28198)->firstOrFail(),
            'hot11' => Hotel::where('hotelid', 41271)->firstOrFail(),
            'hot12' => Hotel::where('hotelid', 42182)->firstOrFail(),
            'hot13' => Hotel::where('hotelid', 73723)->firstOrFail(),
            'hot14' => Hotel::where('hotelid', 76261)->firstOrFail(),
            'hot15' => Hotel::where('hotelid', 92910)->firstOrFail(),
        ];

        $facilityHotel = [
            [
                'hotelid' => $hotels['hot1']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot1']->hotelid,
                'facid' => $facility['fac6']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot1']->hotelid,
                'facid' => $facility['fac13']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot1']->hotelid,
                'facid' => $facility['fac15']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot2']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot2']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot2']->hotelid,
                'facid' => $facility['fac9']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot3']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot3']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 20,
            ],
            [
                'hotelid' => $hotels['hot3']->hotelid,
                'facid' => $facility['fac8']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot3']->hotelid,
                'facid' => $facility['fac11']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot4']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot4']->hotelid,
                'facid' => $facility['fac6']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot4']->hotelid,
                'facid' => $facility['fac7']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot4']->hotelid,
                'facid' => $facility['fac15']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot5']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot5']->hotelid,
                'facid' => $facility['fac8']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot5']->hotelid,
                'facid' => $facility['fac12']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot6']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot6']->hotelid,
                'facid' => $facility['fac2']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot6']->hotelid,
                'facid' => $facility['fac3']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot7']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 10,
            ],
            [
                'hotelid' => $hotels['hot7']->hotelid,
                'facid' => $facility['fac7']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot7']->hotelid,
                'facid' => $facility['fac13']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot7']->hotelid,
                'facid' => $facility['fac14']->facid,
                'numof' => 8,
            ],
            [
                'hotelid' => $hotels['hot8']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot8']->hotelid,
                'facid' => $facility['fac9']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot8']->hotelid,
                'facid' => $facility['fac15']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot9']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot9']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot9']->hotelid,
                'facid' => $facility['fac7']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot10']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot10']->hotelid,
                'facid' => $facility['fac9']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot10']->hotelid,
                'facid' => $facility['fac8']->facid,
                'numof' => 4,
            ],
            [
                'hotelid' => $hotels['hot11']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot11']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot11']->hotelid,
                'facid' => $facility['fac2']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot12']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 4,
            ],
            [
                'hotelid' => $hotels['hot12']->hotelid,
                'facid' => $facility['fac5']->facid,
                'numof' => 6,
            ],
            [
                'hotelid' => $hotels['hot12']->hotelid,
                'facid' => $facility['fac3']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot13']->hotelid,
                'facid' => $facility['fac2']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot13']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot13']->hotelid,
                'facid' => $facility['fac3']->facid,
                'numof' => 4,
            ],
            [
                'hotelid' => $hotels['hot14']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 5,
            ],
            [
                'hotelid' => $hotels['hot14']->hotelid,
                'facid' => $facility['fac6']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot14']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot14']->hotelid,
                'facid' => $facility['fac7']->facid,
                'numof' => 2,
            ],
            [
                'hotelid' => $hotels['hot15']->hotelid,
                'facid' => $facility['fac2']->facid,
                'numof' => 1,
            ],
            [
                'hotelid' => $hotels['hot15']->hotelid,
                'facid' => $facility['fac4']->facid,
                'numof' => 3,
            ],
            [
                'hotelid' => $hotels['hot15']->hotelid,
                'facid' => $facility['fac3']->facid,
                'numof' => 6,
            ],
            [
                'hotelid' => $hotels['hot15']->hotelid,
                'facid' => $facility['fac1']->facid,
                'numof' => 5,
            ],
        ];

        DB::table('facinhotels')->insert($facilityHotel);
    }
}
