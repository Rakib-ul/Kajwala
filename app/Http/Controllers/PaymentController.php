<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Show checkout form
     */
    public function showCheckoutForm()
    {
        return view('payment.payment'); // Ensure this Blade exists
    }

    /**
     * Create Payment Intent (API call)
     */
    public function createPaymentIntent(Request $request)
    {
        $secretKey = env('PAYMONGO_SECRET_KEY'); // fetch from .env

        $headers = [
            "Authorization: Basic " . base64_encode($secretKey . ":"),
            "Content-Type: application/json"
        ];

        $data = [
            "data" => [
                "attributes" => [
                    "amount" => $request->amount * 100, // PayMongo uses cents
                    "currency" => "BDT",
                    "description" => "Payment for KaajWala service",
                    "payment_method_allowed" => ["card"],
                    "capture_type" => "automatic"
                ]
            ]
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paymongo.com/v1/payment_intents",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $headers,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response, true);

        return response()->json($result);
    }

    /**
     * Confirm Payment (API call)
     */
    public function confirmPayment(Request $request)
    {
        $secretKey = env('PAYMONGO_SECRET_KEY');

        $headers = [
            "Authorization: Basic " . base64_encode($secretKey . ":"),
            "Content-Type: application/json"
        ];

        $data = [
            "data" => [
                "attributes" => [
                    "payment_method" => $request->payment_method_id
                ]
            ]
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paymongo.com/v1/payment_intents/{$request->payment_intent_id}/confirm",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $headers,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response, true);

        return response()->json($result);
    }

    /**
     * Handle Payment Response
     */
    public function handlePaymentResponse(Request $request)
    {
        // Here you can save the payment status to your database
        return response()->json($request->all());
    }
}
