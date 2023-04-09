<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country1 = Country::where('country', 'Turkey')->firstOrFail();
        $country2 = Country::where('country', 'South Korea')->firstOrFail();
        $country3 = Country::where('country', 'Portugal')->firstOrFail();
        $country4 = Country::where('country', 'Philippines')->firstOrFail();
        $country5 = Country::where('country', 'France')->firstOrFail();
        $country6 = Country::where('country', 'Japan')->firstOrFail();
        $country7 = Country::where('country', 'Spain')->firstOrFail();
        $country8 = Country::where('country', 'Canada')->firstOrFail();
        $country9 = Country::where('country', 'Italy')->firstOrFail();
        $country10 = Country::where('country', 'Australia')->firstOrFail();

        $region = [
            [
                'region' => 'Cappadocia',
                'landtype' => 'Volcanic',
                'country' => $country1->country,
                'scenery' => 'Fairy Chimneys',
                'page' => 7,
            ],
            [
                'region' => 'Aegean Coast',
                'landtype' => 'Hilly',
                'country' => $country1->country,
                'scenery' => 'Ancient Ruins',
                'page' => 12,
            ],
            [
                'region' => 'Atheka',
                'landtype' => 'Tropical',
                'country' => $country1->country,
                'scenery' => 'Beaches',
                'page' => 21,
            ],
            [
                'region' => 'Jeju Island ',
                'landtype' => 'Volcanic',
                'country' => $country2->country,
                'scenery' => 'Beaches',
                'page' => 19,
            ],
            [
                'region' => 'North Gyeongsang Province',
                'landtype' => 'Mountainous',
                'country' => $country2->country,
                'scenery' => 'Historic Sites',
                'page' => 4,
            ],
            [
                'region' => 'Sudogwon',
                'landtype' => 'Urban',
                'country' => $country2->country,
                'scenery' => 'Streams',
                'page' => 28,
            ],
            [
                'region' => 'Algarve',
                'landtype' => 'Wetlands',
                'country' => $country3->country,
                'scenery' => 'Cliffs',
                'page' => 22,
            ],
            [
                'region' => 'Lisbon',
                'landtype' => 'Hilly',
                'country' => $country3->country,
                'scenery' => 'River',
                'page' => 8,
            ],
            [
                'region' => 'Douro Valley',
                'landtype' => 'Steep',
                'country' => $country3->country,
                'scenery' => 'Vineyard',
                'page' => 15,
            ],
            [
                'region' => 'Cordillera Administrative Region',
                'landtype' => 'Mountainous',
                'country' => $country4->country,
                'scenery' => 'Terraces',
                'page' => 20,
            ],
            [
                'region' => 'Bicol Region',
                'landtype' => 'Coastal Plains',
                'country' => $country4->country,
                'scenery' => 'Volcanoes',
                'page' => 6,
            ],
            [
                'region' => 'Davao Region',
                'landtype' => 'Plateaus',
                'country' => $country4->country,
                'scenery' => 'Waterfalls',
                'page' => 11,
            ],
            [
                'region' => 'Provence',
                'landtype' => 'Hilly',
                'country' => $country5->country,
                'scenery' => 'Vineyards',
                'page' => 14,
            ],
            [
                'region' => 'Brittany',
                'landtype' => 'Valleys',
                'country' => $country5->country,
                'scenery' => 'Forests',
                'page' => 5,
            ],
            [
                'region' => 'Alsace',
                'landtype' => 'Plains',
                'country' => $country5->country,
                'scenery' => 'Fortresses',
                'page' => 2,
            ],
            [
                'region' => 'Hokkaido',
                'landtype' => 'Mountains',
                'country' => $country6->country,
                'scenery' => 'Lakes',
                'page' => 3,
            ],
            [
                'region' => 'Tohoku',
                'landtype' => 'Plains',
                'country' => $country6->country,
                'scenery' => 'Hot Springs',
                'page' => 9,
            ],
            [
                'region' => 'Shikoku',
                'landtype' => 'Mountainous',
                'country' => $country6->country,
                'scenery' => 'Whirlpools',
                'page' => 12,
            ],
            [
                'region' => 'Andalusia',
                'landtype' => 'Coastline',
                'country' => $country7->country,
                'scenery' => 'Beaches',
                'page' => 10,
            ],
            [
                'region' => 'Catalonia',
                'landtype' => 'Valleys',
                'country' => $country7->country,
                'scenery' => 'Vineyards',
                'page' => 21,
            ],
            [
                'region' => 'Galicia',
                'landtype' => 'Coastline',
                'country' => $country7->country,
                'scenery' => 'Lighthouses',
                'page' => 5,
            ],
            [
                'region' => 'Laurentian Plateau',
                'landtype' => 'Forests',
                'country' => $country8->country,
                'scenery' => 'Bay',
                'page' => 2,
            ],
            [
                'region' => 'Western Cordillera ',
                'landtype' => 'Mountains',
                'country' => $country8->country,
                'scenery' => 'Glaciers',
                'page' => 17,
            ],
            [
                'region' => 'Appalachian',
                'landtype' => 'Valleys',
                'country' => $country8->country,
                'scenery' => 'Trails',
                'page' => 28,
            ],
            [
                'region' => 'Lazio',
                'landtype' => 'Hilly',
                'country' => $country9->country,
                'scenery' => 'Gardens',
                'page' => 14,
            ],
            [
                'region' => 'Marche',
                'landtype' => 'Coastal Plains',
                'country' => $country9->country,
                'scenery' => 'Caves',
                'page' => 18,
            ],
            [
                'region' => 'Umbria',
                'landtype' => 'Valleys',
                'country' => $country9->country,
                'scenery' => 'Vineyards',
                'page' => 6,
            ],
            [
                'region' => 'New South Wales',
                'landtype' => 'Coastal Plains',
                'country' => $country10->country,
                'scenery' => 'Bays',
                'page' => 19,
            ],
            [
                'region' => 'Victoria',
                'landtype' => 'Coastal Plains',
                'country' => $country10->country,
                'scenery' => 'Parks',
                'page' => 4,
            ],
            [
                'region' => 'Queensland',
                'landtype' => 'Mountainous',
                'country' => $country10->country,
                'scenery' => 'Rainforests',
                'page' => 9,
            ],
        ];

        DB::table('regions')->insert($region);
    }
}
