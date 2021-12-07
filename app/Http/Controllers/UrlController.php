<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UrlController extends Controller
{

    public function shortenURL(Request $request){
        $baseURL = '127.0.0.1:8000/';
        $longURL = $request->input('url');

        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $shortURL = $baseURL . substr(str_shuffle($chars), 0, 6);
        Url::create(['long_url' => $longURL, 'short_url' => $shortURL]);

        return view('shorten', [
            'shortURL' => $shortURL,

        ]);

    }

    public function redirectToOriginalURL(Request $request){
        $baseURL = '127.0.0.1:8000/';
        $shortURL = $request->url_id;
        $originalURL = Url::where('short_url', $baseURL .  $shortURL)->first();
        if($originalURL == null){
            return redirect('/')->withErrors(['msg' => 'URL does not exist!']);
        }
       return redirect()->away('https://' .$originalURL->long_url);
    }


}
