<?php


namespace App\Services;


class LineMessagingApiService
{
    private $accessToken;
    private $channelSecret;
    private $httpClient;
    private $bot;

    public function __construct($accessToken, $channelSecret)
    {
        $this->accessToken = $accessToken;
        $this->channelSecret = $channelSecret;
        $this->httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($this->accessToken);
        $this->bot = new \LINE\LINEBot($this->httpClient, ['channelSecret' => $this->channelSecret]);
    }
}
