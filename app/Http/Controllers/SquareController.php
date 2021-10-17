<?php

namespace App\Http\Controllers;

use App\Services\SquareService;
use Illuminate\Http\Request;

class SquareController extends Controller
{
    public function index()
    {
        return view('square');
    }

    public function createPayment(Request $request)
    {
        try {
            $squareSearvice = new SquareService();
            $squareSearvice->createPayment($request->all());
            return true;
        } catch (\Exception $exception) {
            throw new \Exception('決済エラーです');
        }
    }
}
