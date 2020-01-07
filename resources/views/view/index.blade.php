@extends('layouts.app')

@section('title', 'Views')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                Views
                <div class="float-right">
                    <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;Back</a>
                </div>
            </div>

            @if( ! $views->count() )
                <div class="card-body">
                    No record found.
                </div>
            @else
                <div class="card-body">
                    <div class="table-responsive-sm table-responsive-md">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Video File Name</th>
                                <th scope="col" class="text-center">View Count</th>
                                <th scope="col" class="text-center">IP Address</th>
                                <th scope="col" class="text-center">Updated At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($views as $view)
                                <tr>
                                    <th scope="row" class="text-center">{{ $view->id }}</th>
                                    <td class="text-center">{{ $view->page_name }}</td>
                                    <td class="text-center">{{ $view->view_count }}</td>
                                    <td class="text-center">{{ $view->ip }}</td>
                                    <td class="text-center">{{ $view->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            <div class="card-footer bg-white">
                {{ $views->links() }}
            </div>
        </div>
    </div>
@endsection
