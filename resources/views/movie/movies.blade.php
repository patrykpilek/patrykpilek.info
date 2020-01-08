@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">

        @include('partials.search')

        <div class="row" id="load-data">
            @if( ! $movies->count() )
                <div class="col-12">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <p>No record found.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @else
                @foreach($movies as $movie)
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 pb-2">
                        <div class="card bg-dark text-white">
                            <a href="{{ route('movies.display', $movie) }}" class="text-decoration-none">
                                <img src="{{ url('storage/movie_posters/' . $movie->poster_vertical) }}" class="card-img poster-img" alt="{{ $movie->title }}">
                                <div class="card-footer bg-dark text-white">
                                    <small>{{ Str::limit(Str::title($movie->title) , 15, ' (...)') }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
                @php
                    if(isset($movie)) {
                        $id = $movie->id;
                    } else {
                        $id = 0;
                    }
                @endphp
                @if(!($id == 0))
                    @if($movies->count() >= 12 )
                        <div class="col-12 mt-4" id="remove-row">
                            <button id="btn-more" data-id="{{ $id }}" class="btn btn-outline-secondary btn-block btn-block col-6 offset-3">Load More</button>
                        </div>
                    @endif
                @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','#btn-more',function() {

                let id = $(this).data('id');
                $("#btn-more").html("Loading....");

                $.ajax({
                    url: '{{ url("/loadmore") }}',
                    method: "POST",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "text",

                    success: function (data) {
                        if(data !== '') {
                            $('#remove-row').remove();
                            $('#load-data').append(data);
                        } else {
                            $('#btn-more').html("No More");
                        }
                    }
                });
            });
        });
    </script>
@endpush
