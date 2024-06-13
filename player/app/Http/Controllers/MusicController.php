<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;


class MusicController extends Controller
{

    public function get_all()
    {
        return Music::all('id', 'name', 'album', 'artist', 'year');
    }

    public function get_by_id(Request $request)
    {
        return Music::select('id', 'name', 'album', 'artist', 'year')->firstWhere('id', $request->id);
    }

    public function get_audio_by_id(Request $request)
    {
        $path = Music::select('audio_path')->firstWhere('id', $request->id)['audio_path'];
        
        return response()->file($path);
    }

    public function get_image_by_id(Request $request)
    {
        $path = Music::select('image_path')->firstWhere('id', $request->id)['image_path'];
        
        return response()->file($path);
    }

    public function add(Request $request)
    {
        $music = new Music;

        $music->name = $request->name;
        $music->artist = $request->artist;
        $music->album = $request->album;
        $music->year = $request->year;
        $music->audio_path = $request->audio_path;
        $music->image_path = $request->image_path;

        $music->save();

        return redirect('/api/music');
    }

    public function remove(Request $request)
    {
        Music::destroy($request->id);

        return redirect('/api/music');
    }
}

