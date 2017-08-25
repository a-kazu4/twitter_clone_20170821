@extends('layout')

@section('content')
    @include('shared.navbar', ['user' => $current_user])

    <div class="container pt-4">
        <div class="row">

            <div class="col-lg-3">
                <div class="card card-link-list mb-4">
                    <div class="card-block">
                        <h6 class="card-title">Search</h6>
                        {{ $keyword }}
                    </div>
                </div>
                @include('shared.footer')
            </div>

            <div class="col-lg-6">
                <ul class="list-group media-list-stream mb-4">
                    @each('shared.tweets', $tweets, 'tweet')
                </ul>
            </div>

        </div>
    </div>
    @include('shared.js.jQuery_tether_bootstrap')
@endsection
