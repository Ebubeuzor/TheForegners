<?php

namespace App\Http\Controllers;

use App\Models\CreateArtist;
use Illuminate\Http\Request;

class CreateArtistController extends Controller
{
    
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'title' => ['required', 'string','max:255'],
            'header' => ['required', 'string','max:255'],
            'artiste' => ['required', 'string','max:255'],
            'Twitter' => ['required', 'string','max:255'],
            'Instagram' => ['required', 'string','max:255'],
            'Spotify' => ['required', 'string','max:255'],
            'apple-music' => ['required', 'string','max:255'],
            'image' => ['required', 'file'],
            'content' => ['required', 'string','max:255'],
        ]);

        
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $file->move('images/create_artist',$imageName);

        $createArtist = new CreateArtist();
        $createArtist->create($inputs);

        if ($createArtist) {
            return redirect('/');
        }else {
            return back();
        }
    }

    
    public function index()
    {
        $musics = CreateArtist::all();
        $randomRow = CreateArtist::inRandomOrder()->first();
        
        return view('pages.music',[
            'musics' => $musics,
            'randomRow' => $randomRow
        ]);
    }
    
    
    public function search(Request $request)
    {
        
        $musics = CreateArtist::all();
        $request->validate(['artiste'=>'required']);
        
        $randomRow = CreateArtist::inRandomOrder()->first();
        $item = $request->input('artiste');
        
        $query = CreateArtist::query();
        
        if($item) {
            $query->where('artiste', 'LIKE', "%$item%")->
            orwhere('title', 'LIKE', "%$item%");
        }
        
        $musics = $query->get();
        
        return view('pages.music',[
            'searchmusics' => $musics,
            'randomRow' => $randomRow,
            'musics' => [
                
            ],
        ]);
    }



}
