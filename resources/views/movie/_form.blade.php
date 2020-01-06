<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 mb-3">
        <div class="card">
            <div class="card-body text-center">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                        <img src="{{ $movie->poster_vertical ? $movie->movie_poster_vertical_path : "https://via.placeholder.com/200x150?text=Poster+Vertical"}}" alt="Poster Vertical">
                    </div>
                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-outline btn-outline-success btn-file btn-sm">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="poster_vertical">
                        </span>
                        <a href="#" class="btn btn-outline btn-outline-danger fileinput-exists btn-sm" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                @error('poster_vertical')
                <div class="text-danger">
                    <small><strong>{{ $message }}</strong></small>
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-6 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group ">
                    <label for="title">Title</label>

                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title"
                           value="{{ $movie->title ?: old('title') }}">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input id="year"
                               name="year"
                               value="{{ $movie->year ?: old('year') }}"
                               type="text"
                               class="form-control datetimepicker-input @error('year') is-invalid @enderror"
                               data-target="#datetimepicker1"
                               aria-describedby="yearHelp"/>
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    @error('year')
                    <small id="yearHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>

                    <textarea id="description"
                              class="form-control @error('description') is-invalid @enderror"
                              name="description"
                              rows="7">{{ $movie->description ?: old('description') }}</textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <small><strong>{{ $message }}</strong></small>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 mb-3">
        <div class="card">
            <div class="card-body text-center">

                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                        <img src="{{ $movie->poster_horizontal ? $movie->movie_poster_horizontal_path  : "https://via.placeholder.com/200x150?text=Poster+Horizontal"}}" alt="Poster Horizontal">
                    </div>
                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-outline btn-outline-success btn-file btn-sm">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="poster_horizontal">
                        </span>
                        <a href="#" class="btn btn-outline btn-outline-danger fileinput-exists btn-sm" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                @error('poster_horizontal')
                <div class="text-danger">
                    <small><strong>{{ $message }}</strong></small>
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
