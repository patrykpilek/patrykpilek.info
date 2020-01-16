<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('movie_id')->paginate(10);
        return view('video.index', compact('videos'));
    }

    public function create(Request $request)
    {
        $movie = Movie::findOrFail($request->movieId);
        $video = new Video();
        return view('video.create', compact('movie', 'video'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'duration' => ['required', 'integer'],
            'description' => ['required'],
            'video_filename' => ['required', 'string'],
        ]);

//        $movie = Movie::findOrFail($request->movieId);

        $filename = Str::slug($request->video_filename, '_');

        $video = new Video();
        $video->movie_id = $request->movieId;
        $video->title = $request->title;
        $video->slug = Str::slug($request->title, '-');
        $video->duration = $request->duration;
        $video->description = $request->description;
        $video->video_filename = Str::slug($request->video_filename, '_');
        $video->video_filename = $filename . '.mp4';

//        if ($request->hasFile('video')) {
//            $file = $request->file('video');
//            $filename = $name . '.' . $file->getClientOriginalExtension();
//
//            $content = fopen($file, 'r+');
//            Storage::disk('s3videos')->put($filename, $content, 'public');
//
//            $video->video_filename = $filename;
//        }


//        $directory = 'public/movies/' . Str::slug($movie->title, '_');
//
//        if(!Storage::directories($directory)) {
//            Storage::makeDirectory($directory);
//        }

        $video->save();

        return redirect('/movies')->with('success', 'Video was added to movie.');
//        return response()->json(['success'=>'You have successfully upload file.']);
    }

    public function show(Video $video)
    {
        //
    }

    public function edit(Video $video)
    {
        $movie = $video->movie;
        return view('video.edit', compact('video', 'movie'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'duration' => ['required', 'integer'],
            'description' => ['required'],
            'video_filename' => ['required', 'string'],
        ]);

        $filename = Str::slug($request->video_filename, '_');

        $video->movie_id = $video->movie->id;
        $video->title = $request->title;
        $video->slug = Str::slug($request->title, '-');
        $video->duration = $request->duration;
        $video->description = $request->description;
        $video->video_filename = $filename . '.mp4';

        $video->save();

        $movie = Movie::findOrFail($video->movie_id);

        return redirect('/movies/videos/'. $movie->slug)->with('success', 'Video was updated.');
    }

    public function destroy(Video $video)
    {
        $movie = Movie::findOrFail($video->movie_id);

        $video->delete();

        if(Storage::exists('/public/movies/' . $video->video_filename)){
            Storage::delete('/public/movies/' . $video->video_filename);
        }

//        if(Storage::exists('/public/movies/'. Str::slug($video->movie->title, '_') . '/' . $video->video_filename)){
//            Storage::delete('/public/movies/'. Str::slug($video->movie->title, '_') . '/' . $video->video_filename);
//        }
//
//        $files = Storage::allFiles('/public/movies/'. Str::slug($video->movie->title, '_'));
//
//        if (empty($files)) {
//            Storage::deleteDirectory('/public/movies/'. Str::slug($video->movie->title, '_'));
//        }

        return redirect('/movies/videos/'. $movie->slug)->with('success', 'Video has been deleted.');
    }

    public function view(Movie $movie)
    {
        $videos = Video::where('movie_id', $movie->id)->orderBy('id')->get();
        return view('video.show', compact('videos'));
    }
}
