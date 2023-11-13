<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Movie;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        $movies = Movie::paginate(24);
        return view('home', ['list_movies' => $movies]);
    }

    public function watch($alias, $tap= null){
        $movie = Movie::where('alias', $alias)->first();
        $server = explode(',', $movie->embed_url);
        $movie->so_tap = count($server);
        if($tap){
            $movie->source_video = $server[$tap];
        }else{
            $movie->source_video = $server[0];
        }
        return view('watch', ['item'=> $movie]);
    }

    public function search(Request $request){
        // ALTER TABLE books ADD FULLTEXT name_of_index(title,detail,answer);
        $keyword = $request->input("keyword");
        $the_loai = $request->input("the_loai");
        $quoc_gia = $request->input("quoc_gia");
        if($keyword){
            $movies = Movie::where('vi_title','like', '%'.$keyword.'%')->paginate(24);
        }
        else if($the_loai){
            $movies = Movie::where('the_loai','like', '%'.$the_loai.'%')->paginate(24);
        }
        else if($quoc_gia){
            $movies = Movie::where('quoc_gia','like', '%'.$quoc_gia.'%')->paginate(24);
        }
        if($keyword && count($movies)==0){
            if($keyword){
                $movies = DB::table('movie')
                ->whereFullText('vi_title', $keyword)->paginate(24);
            }
            
        }
        return view('home', ['list_movies' => $movies]);
    }

    public function detail(Request $request){
        return view('detail');
    }

    public function list_movie(Request $request){
       $keyword =  $request->input("kw");
       $movies = Movie::where('vi_title','like', '%'.$keyword.'%')->get(['vi_title','en_title','embed_url','alias','thumb']);
       if($keyword && count($movies) == 0){
            $movies = DB::table('movie')
            ->whereFullText('vi_title', $keyword)->get(['vi_title','en_title','embed_url','alias','thumb']);
       }
       return $movies;
    }
}
