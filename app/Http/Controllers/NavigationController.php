<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function navigate(Request $request)
    {
        $address = $request->input('name');

        $apiKey = 'AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs';
        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs");

        $data = json_decode($response->getBody(), true);

        if ($data['status'] === 'OK') {
            $latitude = $data['results'][0]['geometry']['location']['lat'];
            $longitude = $data['results'][0]['geometry']['location']['lng'];

            return view('navigate', compact('latitude', 'longitude'));
        }

    }
}