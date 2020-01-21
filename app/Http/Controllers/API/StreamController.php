<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\StreamResource;
use App\Stream;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class StreamController extends Controller
{

    public function index()
    {
        return StreamResource::collection(Stream::all());
    }

    public function store(Request $request)
    {
        Stream::create([
            'userId' => $request->userId,
            'title' => $request->title,
            'description' => $request->description,
        ]);

//        return new StreamResource($stream);

        return response()->json([
            'message' => 'Create success'
        ], 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $stream = Stream::findOrFail($id);
        $stream->update($request->only(['title', 'description']));

//        return new StreamResource($stream);
        return response()->json([
            'message' => 'Update success'
        ], 201);
    }

    public function destroy($id)
    {
        $stream = Stream::findOrFail($id);
        $stream->delete();

        return response()->json([
            'message' => 'Delete success'
        ], 201);
    }
}
