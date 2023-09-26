<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function viewForm()
    {
        return view('form-anime');
    }

    public function addAnime(Request $request)
    {
        $request->validate(
            [
                'character_name' => 'required|max:255',
                'anime_name' => 'required|max:255',
                'character_rating' => 'required|numeric|between:2.50,99.99',
                'email_sender' => 'required|email:rfc',
                'character_image' => 'required|max:2048|mimes:jpg,jpeg,png'
            ]
        );

        $file_name = "{$request->email_sender}-{$request->character_image->getClientOriginalName()}";
        $request->character_image->storeAs('public/images', $file_name);

        Anime::create([
            'character_name' => $request->character_name,
            'anime_name' => $request->anime_name,
            'character_rating' => $request->character_rating,
            'email_sender' => $request->email_sender,
            'character_image' => $file_name
        ]);

        return redirect('/list')->with(['status' => 'Success Inserting New Character']);
    }

    public function showAnime()
    {
        $animes = Anime::all();

        return view(
            'anime-list',
            [
                'animes' => $animes
            ]
        );
    }
}
