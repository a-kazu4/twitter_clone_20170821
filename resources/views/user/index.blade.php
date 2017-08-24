@extends('layout')

@section('content')
    @include('shared.navbar',['current_user' => $current_user])

    @include('shared.follow.user_profile_header', ['user' => $user])

    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-block">
                        <h6 class="card-title">フォロー/解除</h6>
                        <form action="#" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-outline-danger btn-md following" style="width: 7rem;">
                                <span>フォロー中</span>
                                <span>解除</span>
                            </button>
                        </form>

                        {{--<form action="#" method="POST">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<button type="submit" class="btn btn-outline-primary btn-md">フォローする</button>--}}
                        {{--</form>--}}
                    </div>
                </div>
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
