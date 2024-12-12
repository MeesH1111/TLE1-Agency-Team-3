<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $locatie = "Rotterdam";

        // Hier kun je handmatig een IP-adres instellen voor de demo
        $manualIp = '185.156.172.142'; // Vervang dit door je gewenste IP
        $useManualIp =false; // Zet op false om de normale methode te gebruiken

        if ($useManualIp) {
            $ip = $manualIp;
        } else {
            $response = Http::get('https://ipapi.co/json/');

            if ($response->successful()) {
                $data = $response->json();
                $ip = $data['ip'] ?? 'Onbekend';
            } elseif ($response->status() === 429) {
                $ip = 'Te vaak IP requests';
            } else {
                $ip = 'Onbekend';
            }

        }

        $partnerImages = [
            ['path' => 'images/fitshelogo.png', 'alt' => 'Logo van Fitshe', 'id' => 1],  //id nog aanpassen dit is een tijdelijke oplossing
            ['path' => 'images/krekerij.jpg', 'alt' => 'Logo van de Krekerij', 'id' => 2],
            ['path' => 'images/svh.png', 'alt' => 'Logo van SVH', 'id' => 3],
            ['path' => 'images/toettoetfood.png', 'alt' => 'Logo van ToetToetFood', 'id' => 4],
        ];


        if ($ip === '185.156.172.142') {
            $locatie = "Amsterdam";
            $partnerImages = [
                ['path' => 'images/bbrood.png', 'alt' => 'Logo van bbrood', 'id' => 5],  //id nog aanpassen dit is een tijdelijke oplossing
                ['path' => 'images/duurzamemode.png', 'alt' => 'Logo van de duurzamemode', 'id' => 6],
                ['path' => 'images/SPREZZAT.png', 'alt' => 'Logo van SPREZZAT', 'id' => 7],
                ['path' => 'images/vandekoe.png', 'alt' => 'Logo van vandekoe', 'id' => 8],
            ];
        }

        return view('home', compact('ip', 'partnerImages', 'locatie'));
    }
}
