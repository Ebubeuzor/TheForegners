<?php

namespace App\Http\Controllers;

use App\Models\CreateAbout;
use App\Models\CreateArtist;
use App\Models\CreateEvent;
use App\Models\CreateNews;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $createAbout = CreateAbout::all();
        $createArtist = CreateArtist::all();
        $createEvent = CreateEvent::all();
        $createNews = CreateNews::all();

        return view('admin.dashboard',[
            "abouts" => $createAbout,
            "artists" => $createArtist,
            "events" => $createEvent,
            "cnews" => $createNews
        ]);
    }

    public function login()
    {
        return view('admin.login');
    }


}
