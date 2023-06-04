<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleMaps\GoogleMaps;
use GoogleMaps\Places\NearbySearch;

class MapController extends Controller
{
    public function initMap()
{
    $locations = [
        [
            'name' => 'Pokhara',
            'lat' => 28.2096,
            'lng' => 83.9856,
            'description' => 'Description of Pokhara'
        ],
        [
            'name' => 'Kathmandu',
            'lat' => 27.7172,
            'lng' => 85.3240,
            'description' => 'Description of Kathmandu'
        ],
        // Add more locations as needed
    ];
    // dd($locations);

    return view('map', compact('locations'));
}



    //
}
