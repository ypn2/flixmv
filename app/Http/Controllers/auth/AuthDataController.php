<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use Goutte\Client;
use App\Models\Movie;
use Illuminate\Support\Str;


class AuthDataController extends Controller
{
    function crawler()
    {
        return view('auth.data_crawler');
    }

    function startCrawler()
    {
        $client = new Client();
        $internal_crawler = $client->request('GET', 'https://phimmoiyyy.net/phim-le');

        $internal_crawler->filter('article.item.movies')->each(function ($node) {
            $title = $node->filter('div.data h3 a')->text();
            $thumb = $node->filter('div.poster img')->attr('src');
            $en_title = $node->filter('div.data span')->text();
            $url = $node->filter('div.poster a')->attr('href');


            $client1 = new Client();
            $detail_crawler = $client1->request('GET', $url);

            $detail_crawler->filter('#playcontainer')->each(function($node){
                print_r($node);
                // $src = $node->filter('iframe')->attr('src');
                // print_r($src);
            });


            // $movie = new Movie;
            // $movie->vi_title = $title;
            // $movie->en_title = $en_title;
            // $movie->thumb = $thumb;
            // $movie->description = "Clone from phimmoi";
            // $movie->save();
        });
        
    }
}