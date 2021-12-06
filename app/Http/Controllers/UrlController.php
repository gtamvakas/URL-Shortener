<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{

    public function shortenURL(Request $request){
        $baseURL = 'http://127.0.0.1:8000/';
        $longURL = $request->input('url');
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $shortURL = $baseURL . substr(str_shuffle($chars), 0, 6);

        Url::create(['long_url' => $longURL, 'short_url' => $shortURL]);

        return view('shorten', [
            'shortURL' => $shortURL,

        ]);

    }


}
