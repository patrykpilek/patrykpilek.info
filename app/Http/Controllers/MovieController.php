<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Video;
use App\View;
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
        $movies = Movie::orderBy('created_at', 'DESC')->limit(12)->get();
        return view('movie.movies', compact('movies'));
    }

    public function display(Movie $movie)
    {
        $videos = $movie->videos()->where('movie_id', $movie->id)->get();
        return view('movie.display', compact('movie', 'videos'));
    }

    public function increaseViewVideo(Request $request)
    {
        $videos = Video::all();
        $videoUrl = $request->videoUrl;
        $title = null;

        foreach( $videos as $video ) {
            if(Str::contains($videoUrl, $video->video_filename)) {
                $title = $video->video_filename;
                $video_view = View::where('page_name', $title)->first();
                if($video_view == null) {
                    $newView = new View();
                    $newView->page_name = $title;
                    $newView->view_count = 1;
                    $newView->ip = $request->ip();
                    $newView->save();
                }

                if($video_view->ip != $request->ip()) {
                    $newView = new View();
                    $newView->page_name = $title;
                    $newView->view_count = 1;
                    $newView->ip = $request->ip();
                    $newView->save();
                }

                if($video_view->ip == $request->ip()) {
                    $video_view->increment('view_count');
                }
            }
        }

        return response()->json([
            'videoFileName' => $title,
            'message' => 'Success'
        ], 200);
    }

    public function loadMoreData(Request $request)
    {
        $output = '';
        $id = $request->id;

        $movies = Movie::where('id','<',$id)->orderBy('created_at','DESC')->limit(12)->get();

        if(!$movies->isEmpty()) {
            foreach($movies as $movie)
            {
                $url = url('movie/'.$movie->slug);
                $moviePoster = url('storage/movie_posters/'.$movie->poster_vertical);
                $movieTitle = Str::limit(Str::title($movie->title) , 15, ' (...)');

                $output .= '
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 pb-2">
                        <div class="card bg-dark text-white">
                            <a href="'. $url .'" class="text-decoration-none">
                                <img src="'. $moviePoster .'" class="card-img poster-img" alt="'. $movie->title .'">
                                <div class="card-footer bg-dark text-white">
                                    <small>'. $movieTitle .'</small>
                                </div>
                            </a>
                        </div>
                    </div>';
            }

            $output .= '<div class="row col-6 offset-3 mt-4" id="remove-row">
                            <button id="btn-more" data-id="'.$movie->id.'" class="btn btn-outline-secondary btn-block">Load More</button>
                        </div>';

            echo $output;
        }
    }
}
