<form action="{{ url('/') }}">
    <div class="input-group mb-4">
        <input type="text" name="term" class="form-control" placeholder="@lang('app.search_movie_by_title_or_movie_year')" value="{{ request('term') }}" aria-label="Search" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i>&nbsp;@lang('app.search')</button>
        </div>
    </div>
</form>
