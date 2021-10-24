<?php

namespace App\Http\Controllers;

use App\Services\LineMessagingApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineMessageController extends Controller
{
    private $lineMessagingApiService;

    public function __construct(LineMessagingApiService $lineMessagingApiService)
    {
        $this->lineMessagingApiService = $lineMessagingApiService;
    }

    public function index()
    {
        Log::info('test');
        return view('line_message');
    }

    public function webhook(Request $request)
    {
//        Log::info($request->all());
        $replyToken = $request->events[0]['replyToken'];
        $this->lineMessagingApiService->SendReplyMessage($replyToken, 'サンプルメッセージ');
        return true;
    }

    public function sendMessage()
    {
        return back()->with('status', 'メッセージを送信しました！');
    }
}
