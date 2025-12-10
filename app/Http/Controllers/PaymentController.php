<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FedaPay\FedaPay;
use FedaPay\Transaction;

class PaymentController extends Controller
{
    public function pay()
    {
        // Configuration FedaPay
        FedaPay::setApiKey(env('FEDAPAY_SECRET_KEY'));
        FedaPay::setEnvironment(env('FEDAPAY_ENV') === 'sandbox' ? 'sandbox' : 'production');

        try {
            $transaction = Transaction::create([
                "description" => "Paiement ENEAM",
                "amount" => 3000,
                "currency" => "XOF",
                "callback_url" => url('/payment/callback')
            ]);

            // Redirection vers la page de paiement
            return redirect($transaction->generateToken()->url);

        } catch (\FedaPay\Error\ApiConnection $e) {
            return "Erreur de connexion API : " . $e->getMessage();
        } catch (\FedaPay\Error\ApiError $e) {
            return "Erreur API : " . $e->getMessage();
        }
    }

    public function callback(Request $request)
    {
        $status = $request->status;

        if ($status == "approved") {
            return "Paiement réussi ✔";
        } else {
            return "Paiement échoué ❌";
        }
    }
}
