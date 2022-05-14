<?php

namespace App\Http\Controllers;

use Carbon\Doctrine\CarbonTypeConverter;
use Illuminate\Http\Request;

class FreekassaController extends Controller
{
    use CarbonTypeConverter;

    private $baseUrl = 'https://api.freekassa.ru';
    private $shopId = 16852;
    private $key = 'ed3c57d8962996329c13903277f8dee8';
    private $secret1 = 'CYGREATMURAD1';
    private $secret2 = 'CYGREATMURAD2';

    public function pay(Request $request)
    {
        $data = [
            'shopId' => $this->shopId,
            'nonce' => time(),
            'amount' => $request->post('amount'),
            'i' => 6,
            'email' => \Auth::user()->email,
            'ip' => '176.15.136.131',
            'currency' => 'RUB',
        ];

        $data = json_encode($this->prepareData($data));

//        dd($data);

        $request = $this->request('v1/orders/created', $data);

        dd($request);
    }

    private function request($method, $data)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "{$this->baseUrl}/{$method}");

//        dd("{$this->baseUrl}/{$method}");

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = trim(curl_exec($ch));
        curl_close($ch);

        dd($result);
    }

    private function prepareData($data)
    {
        ksort($data);
        $sign = hash_hmac('sha256', implode('|', $data), $this->key);
        $data['signature'] = $sign;

        return $data;
    }
}
