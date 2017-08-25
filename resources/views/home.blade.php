@extends('layout')

@section('content')
    @include('shared.navbar', ['current_user' => $current_user])

    <div class="container pt-4">
        <div class="row">

            <div class="col-lg-3">
                @include('shared.user.current_user_data', ['current_user' => $current_user, 'followings' => $followings, 'followers' => $followers])
            </div>

            <div class="col-lg-6">
                <ul class="list-group media-list-stream mb-4">
                    <li class="media list-group-item p-4 {{ $errors->has('body') ? 'has-danger' : '' }}">
                        <form method="POST" action="{{ route('post') }}" class="input-group">
                            {{ csrf_field() }}

                            <input name="body" type="text" class="form-control" placeholder="いまどうしてる？">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-secondary">
                                    <span class="icon icon-new-message"></span>
                                </button>
                            </div>
                        </form>

                        @if($errors->has('body'))
                            <div class="form-control-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif
                    </li>
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
