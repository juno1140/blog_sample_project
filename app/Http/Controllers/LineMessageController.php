<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LineMessageController extends Controller
{
    public function index()
    {
        Log::info('test');
        return view('line_message');
    }

    public function webhook(Request $request)
    {
        Log::info($request->all());
        return true;
    }

    public function sendMessage()
    {
        return back()->with('status', 'メッセージを送信しました！');
    }
}
