<div class="card-body">

    <input name="movieId" type="hidden" value="{{ $movie->id }}">

    <div class="form-group ">
        <label for="movieTitle">@lang('app.movie_title')</label>
        <input type="text" id="movieTitle" class="form-control" value="{{ Str::title($movie->title) }}" readonly>
    </div>

    <div class="form-group ">
        <label for="title">@lang('app.video_title')</label>

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
        <label for="duration">@lang('app.duration')</label>

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
        <small id="durationHelp" class="form-text text-muted">@lang('app.please_write_duration_in_minutes')</small>
    </div>

{{--    <input type="file" name="video" id="video">--}}

    <div class="forum-group mb-3">
        <label for="video_filename">@lang('app.video_filename')</label>

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
        <small id="filenameHelp" class="form-text text-muted">@lang('app.example_moviename_or_serialname')</small>
    </div>

    <div class="form-group">
        <label for="description">@lang('app.video_description')</label>

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
