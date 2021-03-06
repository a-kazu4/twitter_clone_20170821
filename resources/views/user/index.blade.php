@extends('layout')

@section('content')
    @include('shared.navbar', ['current_user' => $current_user])

    @include('shared.user.user_profile_header', ['user' => $user, 'followings' => $followings, 'followers' => $followers])

    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-3">
                @include('shared.user.follow-action', ['current_user' => $current_user, 'user' => $user])
            </div>

            <div class="col-lg-6">
                <ul class="list-group media-list-stream mb-4">
                    @each('shared.tweets', $tweets, 'tweet')
                </ul>
            </div>

            <div class="col-lg-3">
                @include('shared.footer')
            </div>

        </div>
    </div>
    @include('shared.js.jQuery_tether_bootstrap')
@endsection
