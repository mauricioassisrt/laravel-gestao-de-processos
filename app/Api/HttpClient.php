<?php

namespace App\Api;

abstract class HttpClient
{
    protected $http;
    protected $headers;

    public function __construct($base_uri, $headers = [])
    {
        $this->headers = $headers;

        $this->http =  new \GuzzleHttp\Client([
            'base_uri' => $base_uri.'/'
        ]);
    }

    protected function get($url)
    {
        return $this->request('GET', $url);
    }

    protected function post($url, $data = [])
    {
        return $this->request('POST', $url, $data);
    }

    protected function request($method, $url, $data = []){
        $params = [
            'json' => $data,
            'content-type' => 'application/json',
            'accept' => 'application/json',
            'headers' => $this->headers
        ];

        try{
            $response = $this->http->request($method, $url, $params);
            $response = json_decode((string)$response->getBody());

            if($response){
                return $response;
            }

            return true;
        }catch(\Exception $e){
            report($e);
            return false;
        }
    }

}
