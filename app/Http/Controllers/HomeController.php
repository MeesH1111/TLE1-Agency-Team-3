<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Hier kun je handmatig een IP-adres instellen voor de demo
        $manualIp = '185.156.172.142'; // Vervang dit door je gewenste IP
        $useManualIp = false; // Zet op false om de normale methode te gebruiken

        if ($useManualIp) {
            $ip = $manualIp;
        } else {
            $response = Http::get('https://ipapi.co/json/');
            $data = $response->json();
            $ip = $data['ip'] ?? 'Onbekend';
        }

        $partnerImages = [
            'images/fitshelogo.png',
            'images/krekerij.jpg',
            'images/svh.png',
            'images/toettoetfood.png',
        ];

        if ($ip === '185.156.172.142') {
            $partnerImages = [
                'images/bbrood.png',
                'images/duurzamemode.png',
                'images/SPREZZAT.png',
                'images/vandekoe.png',
            ];
        }

        return view('home', compact('ip', 'partnerImages'));
    }
}
