<div class="card-body">

    <input name="movieId" type="hidden" value="{{ $movie->id }}">

    <div class="form-group ">
        <label for="movieTitle">Movie Title</label>
        <input type="text" id="movieTitle" class="form-control" value="{{ Str::title($movie->title) }}" readonly>
    </div>

    <div class="form-group ">
        <label for="title">Video Title</label>

        <input id="title"
               type="text"
               class="form-control @error('title') is-invalid @enderror"
               value="{{ $video->title ?: old('title') }}"
               name="title" >
        @error('title')
        <span class="invalid-feedback" role="alert">
            <small><strong>{{ $message }}</strong></small>
        </span>
        @enderror
    </div>

    <div class="form-group ">
        <label for="duration">Duration</label>

        <input id="duration"
               type="text"
               name="duration"
               class="form-control @error('duration') is-invalid @enderror"
               value="{{ $video->duration ?: old('duration') }}"
               aria-describedby="durationHelp" >

        @error('duration')
        <span class="invalid-feedback" role="alert">
            <small><strong>{{ $message }}</strong></small>
        </span>
        @enderror
        <small id="durationHelp" class="form-text text-muted">Please write duration in minutes. example: 110.</small>
    </div>

{{--    <input type="file" name="video" id="video">--}}

    <div class="forum-group mb-3">
        <label for="video_filename">Video Filename</label>

        <input id="video_filename"
               type="text"
               class="form-control @error('video_filename') is-invalid @enderror"
               name="video_filename"
               value="{{ Str::before($video->video_filename, '.mp4') ?: old('video_filename') }}"
               aria-describedby="durationHelp" >

        @error('video_filename')
        <span class="invalid-feedback" role="alert">
            <small><strong>{{ $message }}</strong></small>
        </span>
        @enderror
        <small id="filenameHelp" class="form-text text-muted">Example: moviename, or serialname_S01E01.</small>
    </div>

    <div class="form-group">
        <label for="description">Video Description</label>

        <textarea id="description"
                  class="form-control @error('description') is-invalid @enderror"
                  name="description"
                  rows="7">{{ $video->description ?: old('description') }}</textarea>

        @error('description')
        <span class="invalid-feedback" role="alert">
            <small><strong>{{ $message }}</strong></small>
        </span>
        @enderror
    </div>

</div>
