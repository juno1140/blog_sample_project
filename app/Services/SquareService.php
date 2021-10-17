<?php


namespace App\Services;


use Illuminate\Support\Str;
use Square\SquareClient;

class SquareService
{
    public function __construct()
    {
        // スクエアアカウント設定
        $this->client = new SquareClient([
            'accessToken' => config('square.token'),
            'environment' => config('square.env'),
        ]);
    }

    public function createPayment($params)
    {
        $amount_money = new \Square\Models\Money();
        $amount_money->setAmount(1000);
        $amount_money->setCurrency('JPY');


        $body = new \Square\Models\CreatePaymentRequest(
            $params['sourceId'],
            Str::uuid()->toString(),
            $amount_money
        );

        $api_response = $this->client->getPaymentsApi()->createPayment($body);

        if ($api_response->isSuccess()) {
            $result = $api_response->getResult();
        } else {
            $errors = $api_response->getErrors();
            throw new \Exception();
        }
    }
}
