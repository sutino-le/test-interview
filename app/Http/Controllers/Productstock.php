<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class Productstock extends Controller
{
    public function index()
    {
        header('Content-Type: application/json');
        $client = new Client();
        $response = $client->request('POST', 'http://103.23.235.214/kanaldata/Webservice/bank_method', [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode([
                'bank_account_id' => 1,
            ])
        ]);
        $responseJSON = json_decode($response->getBody(), true);

        return view('product.product-stock', ['data' => json_encode($responseJSON, JSON_PRETTY_PRINT)]);
    }
}
