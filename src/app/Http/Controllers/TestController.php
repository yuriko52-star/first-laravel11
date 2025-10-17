<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $item = ['content' => 'ゆりちゃんかわいいね！',
        ];
        return view('index',$item);
    }
}
