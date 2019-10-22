<?php


namespace App\services;

interface IHttpClientService

{
  public const data = [
    'greeting' => 'hello',
    'name' => 'Jason'
  ];
}

class HttpClientService

{
  public static function CreateEvent(string $url, string $body): string
  {
    return $url . $body;
  }
}
