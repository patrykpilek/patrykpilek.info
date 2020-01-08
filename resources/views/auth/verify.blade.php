@extends('layouts.app')

@section('title', __('app.verify_your_email_address'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
            <div class="card">

                <h4 class="text-center mt-3">@lang('app.verify_your_email_address')</h4>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('app.a_fresh_verification_link_has_been_sent_to_your_email_address')
                        </div>
                    @endif

                    @lang('app.before_proceeding_please_check_your_email_for_a_verification_link')
                    @lang('app.if_you_did_not_receive_the_email'), <a href="{{ route('verification.resend') }}">@lang('app.click_here_to_request_another')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
