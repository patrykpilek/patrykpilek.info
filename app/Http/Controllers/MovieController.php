<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('title')->paginate(10);
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        $movie = new Movie();
        return view('movie.create', compact('movie'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required'],
            'year' => ['required', 'integer'],
            'poster_vertical' => ['required', 'image', 'mimes:jpeg,bmp,jpg,png,gif', 'max:2048'],
            'poster_horizontal' => ['required', 'image', 'mimes:jpeg,bmp,jpg,png,gif', 'max:2048']
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->slug = Str::slug($request->title, '-');
        $movie->description = $request->description;
        $movie->year = $request->year;

        if ($request->hasFile('poster_vertical')) {
            $name = Str::slug(strtolower($request->title), '_');
            $posterVerticalName = $name . '_poster_vertical' . '.' . request()->poster_vertical->getClientOriginalExtension();
            $request->poster_vertical->storeAs('public/movie_posters', $posterVerticalName);
            $movie->poster_vertical = $posterVerticalName;
        }

        if ($request->hasFile('poster_horizontal')) {
            $name = Str::slug(strtolower($request->title), '_');
            $posterHorizontalName = $name . '_poster_horizontal' . '.' . request()->poster_horizontal->getClientOriginalExtension();
            $request->poster_horizontal->storeAs('public/movie_posters', $posterHorizontalName);
            $movie->poster_horizontal = $posterHorizontalName;
        }

        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie was added.');
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required'],
            'year' => ['required', 'integer'],
        ]);

        $oldPosterVertical = $movie->poster_vertical;
        $oldPosterHorizontal = $movie->poster_horizontal;

        $movie->title = $request->title;
        $movie->slug = Str::slug($request->title, '-');
        $movie->description = $request->description;
        $movie->year = $request->year;

        if ($request->hasFile('poster_vertical')) {
            $name = Str::slug(strtolower($request->title), '_');
            $posterVerticalName = $name . '_poster_vertical' . '.' . request()->poster_vertical->getClientOriginalExtension();
            $request->poster_vertical->storeAs('public/movie_posters', $posterVerticalName);
            $movie->poster_vertical = $posterVerticalName;
            if($oldPosterVertical != 'default.png') {
                if(Storage::exists('/public/movie_posters/'. $oldPosterVertical)){
                    Storage::delete('/public/movie_posters/'. $oldPosterVertical);
                }
            }
        }

        if ($request->hasFile('poster_horizontal')) {
            $name = Str::slug(strtolower($request->title), '_');
            $posterHorizontalName = $name . '_poster_horizontal' . '.' . request()->poster_horizontal->getClientOriginalExtension();
            $request->poster_horizontal->storeAs('public/movie_posters', $posterHorizontalName);
            $movie->poster_horizontal = $posterHorizontalName;
            if($oldPosterHorizontal != 'default.png') {
                if(Storage::exists('/public/movie_posters/'. $oldPosterHorizontal)){
                    Storage::delete('/public/movie_posters/'. $oldPosterHorizontal);
                }
            }
        }

        $movie->save();

        return redirect()->route('movies.edit', $movie)->with('success', 'Movie was updated.');
    }

    public function destroy(Movie $movie)
    {
        if(Storage::exists('/public/movie_posters/'. $movie->poster_vertical)){
            Storage::delete('/public/movie_posters/'. $movie->poster_vertical);
        }

        if(Storage::exists('/public/movie_posters/'. $movie->poster_horizontal)){
            Storage::delete('/public/movie_posters/'. $movie->poster_horizontal);
        }

        $movie->delete();

        return redirect(route('movies.index'))->with('success', 'Movie has been deleted.');
    }

    public function movies()
    {
        $movies = Movie::orderBy('title', 'asc')->get();
        return view('movie.movies', compact('movies'));
    }

    public function display(Movie $movie)
    {
        $videos = $movie->videos()->where('movie_id', $movie->id)->get();
        return view('movie.display', compact('movie', 'videos'));
    }
}
