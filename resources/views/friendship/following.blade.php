@extends('layout')

@section('content')
    @include('shared.navbar', ['current_user' => $current_user])
    @include('shared.user.user_profile_header', ['user' => $user, 'followings' => $followings, 'followers' => $followers])

    <div class="container pt-4">
        <div class="row">

            <div class="col-lg-3">
                @include('shared.user.follow-action', ['current_user' => $current_user, 'user' => $user])

                <div class="hidden-md-down">
                    @include('shared.footer')
                </div>
            </div>

            <div class="col-lg-9">
                <ul class="row list-unstyled">
                    @each('shared.user.user_card', $followings, 'user')
                </ul>

                <div class="hidden-lg-up">
                    @include('shared.footer')
                </div>
            </div>

        </div>
    </div>
    @include('shared.js.jQuery_tether_bootstrap')

@endsection
