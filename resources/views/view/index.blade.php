@extends('layouts.app')

@section('title', __('app.views'))

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-white">
                @lang('app.views')
                <div class="float-right">
                    <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-backward"></i>&nbsp;@lang('app.back')</a>
                </div>
            </div>

            @if( ! $views->count() )
                <div class="card-body">
                    @lang('app.no_record_found')
                </div>
            @else
                <div class="card-body">
                    <div class="table-responsive-sm table-responsive-md">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">@lang('app.video_file_name')</th>
                                <th scope="col" class="text-center">@lang('app.view_count')</th>
                                <th scope="col" class="text-center">@lang('app.ip_address')</th>
                                <th scope="col" class="text-center">@lang('app.updated_at')</th>
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
