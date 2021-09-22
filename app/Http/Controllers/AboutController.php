<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "BarbellClub";
        $paragraph = "Op deze website ga je kennis maken met verschillende trainingschamas en je eigen schemas in elkaar zetten.";

        return view( 'about',compact('title', 'paragraph'));
    }
}
