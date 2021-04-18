<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home',[
            'body_class' => 'bg-green'
         ]);
    }

    // public function gods(){
    //     return view('pages.gods',[
    //         'body_class' => 'bg-teal'
    //      ]);
    // }
}
