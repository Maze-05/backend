<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

abstract class Controller
{

        public function getMainPage()
        {
            // URL to make the GET request to
            $url = 'http://localhost/sw_project/resources/views/Index.blade.php';  // Replace with the URL of the main page you want to fetch
            
            // Make the GET request using Http facade
            $response = Http::get($url);
    
            // Check if the response was successful
            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'content' => $response->body()  // The HTML content of the main page
                ]);
            }
    
            // Handle failed request
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch the page.'
            ], $response->status());
        }
    }

