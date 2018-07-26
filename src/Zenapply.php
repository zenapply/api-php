<?php

namespace Zenapply\Api;

use GuzzleHttp\Client;

class Zenapply
{
    protected $api_key;
    protected $base_uri;
    protected $client;
    protected $resource;

    public function __construct($api_key, $host = "api.zenapply.com", $secure = true)
    {
        $protocol = $secure ? "https" : "http";
        $this->api_key = $api_key;
        $this->base_uri = "{$protocol}://{$host}/api/v2/";
        $this->client = new Client([
            "base_uri" => $this->base_uri,
            "timeout" => 30,
            "headers" => [
                'Authorization' => 'Bearer ' . $this->api_key,
            ]
        ]);
    }

    public function __get($name)
    {
        $this->resource = $name;

        return $this;
    }

    public function get($id)
    {
        $uri = "{$this->resource}/{$id}";
        return $this->client->request('GET', $uri);
    }

    public function all()
    {
        $uri = $this->resource;
        return $this->client->request('GET', $uri);
    }

    public function post(array $data = null)
    {
        $uri = $this->resource;
        return $this->client->request('POST', $uri, [
            "json" => $data
        ]);
    }

    public function put($id, array $data = null)
    {
        $uri = "{$this->resource}/{$id}";
        return $this->client->request('PUT', $uri, [
            "json" => $data
        ]);
    }

    public function delete($id, array $data = null)
    {
        $uri = "{$this->resource}/{$id}";
        return $this->client->request('DELETE', $uri, [
            "json" => $data
        ]);
    }
}