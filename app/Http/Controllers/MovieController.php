<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public $movies = [
        ['id' => '1', 'title' => 'Incontri ravicinati del terzo tipo','director' => 'S. spielberg', 'img' => '/media/poster/spielberg.jpg', 'genres'=>'giallo'],

        ['id' => '2', 'title' => '1917','director' => 'S. mendes', 'img'=> '/media/poster/1917.jpg', 'genres' => 'guerra'],

        ['id' => '3', 'title' => 'Quei bravi raggazi','director' => 'M. scorsese', 'img'=> '/media/poster/scorsese.jpg', 'genres'=> 'comedia'],

        ['id' => '4', 'title' => 'Barbie','director' => 'G. Garwig', 'img' => '/media/poster/barbie.jpg', 'genres'=> 'Avventura'],

        ['id' => '5', 'title' => 'Lost in translation','director' => 'S. Coppola', 'img' => '/media/poster/coppola.jpg', 'genres'=>'noir'],
    ];

    


    public function movielist () {

    
        return view('movie.movies', ['movies'=> $this->movies]);

}


    public function movieDetail ($id){
    
    
     foreach($this->movies as $movie){
        if($id == $movie['id']){
            return view('movie.detail', ['movie'=> $movie]);

        }
    }

    
}

}