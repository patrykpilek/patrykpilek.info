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
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return StreamResource::collection(Stream::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return StreamResource
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return StreamResource
     */
    public function update(Request $request, $id)
    {
        $stream = Stream::findOrFail($id);
        $stream->update($request->only(['title', 'description']));

//        return new StreamResource($stream);
        return response()->json([
            'message' => 'Update success'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $stream = Stream::findOrFail($id);
        $stream->delete();

        return response()->json([
            'message' => 'Delete success'
        ], 201);
    }
}
