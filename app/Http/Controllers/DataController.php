<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Country;

class DataController extends Controller
{
    public function index(){
        $sample = Region::where('region', 'Brittany')->get();
        dd($sample);
    }
}
