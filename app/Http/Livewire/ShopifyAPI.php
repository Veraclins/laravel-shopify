<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;

trait ShopifyAPI
{
    public $status = 0;
    public $message;

    private function getUrl(string $path)
    {
        $base_url = config('services.shopify.url');
        $path = $path[0] === '/' ? $path: "/{$path}";

        return "{$base_url}/admin{$path}";
    }

    private function getHeaders()
    {
        $token = config('services.shopify.password');
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-Shopify-Access-Token' => $token,
        ];
    }

    public function getData($path)
    {
        $url = $this->getUrl($path);
        $headers = $this->getHeaders();

        $response = Http::withHeaders($headers)->get($url);
        $this->status = $response->status();

        return $response->json();
    }

    public function createResource($path, $data)
    {
        if (!is_array($data)) {
            throw new \Exception("The 'data' must be a key=>value pair");
        }

        $url = $this->getUrl($path);
        $headers = $this->getHeaders();


        $response = Http::withHeaders($headers)->post($url, $data);
        $this->status = $response->status();
        return $response->json();
    }
}
