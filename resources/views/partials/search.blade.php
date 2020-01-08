<form action="{{ url('/') }}">
    <div class="input-group mb-4">
        <input type="text" name="term" class="form-control" placeholder="Search movie by title or movie year..." value="{{ request('term') }}" aria-label="Search" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i>&nbsp;Search</button>
        </div>
    </div>
</form>
