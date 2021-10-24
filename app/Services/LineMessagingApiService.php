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

    /**
     * 応答メッセージを送る
     * @param $replyToken
     * @param string $text
     * @return \LINE\LINEBot\Response
     */
    public function SendReplyMessage($replyToken, string $text): \LINE\LINEBot\Response
    {
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text);
        return $this->bot->replyMessage($replyToken, $textMessageBuilder);
    }
}
