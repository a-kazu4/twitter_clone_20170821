@extends('layout')

@section('content')

    @include('shared.navbar', ['current_user' => $current_user])

    <div class="container pt-4">
        <div class="row">

            <div class="col-lg-3">
                @include('shared.user.current_user_data', ['current_user' => $current_user, 'followings' => $followings, 'followers' => $followers])
                @include('shared.user.button_account_and_profile', ['current_user' => $current_user])
            </div>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header" style="background-color: #FFFFFF;">
                        <strong>アカウント</strong>
                    </div>
                    <div class="card-block">
                        <form method="POST" action="{{ route('account_update') }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group row {{ $errors->has('url_name') ? ' has-danger' : '' }}">
                                <label for="url_name" class="col-4 col-form-label">ユーザー名</label>
                                <div class="col-8">
                                    <input name="url_name" type="text" maxlength="15" id="url_name" class="form-control"
                                           value="{{ $current_user->url_name }}">

                                    @if ($errors->has('url_name'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('url_name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="email" class="col-4 col-form-label">メールアドレス</label>
                                <div class="col-8">
                                    <input name="email" type="email" id="email" class="form-control"
                                           value="{{ $current_user->email }}">

                                    @if ($errors->has('email'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label for="password" class="col-4 col-form-label">パスワード</label>
                                <div class="col-8">
                                    <input name="password" type="password" id="password" class="form-control" value="{{ $current_user->password }}">

                                    @if ($errors->has('password'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-4 col-form-label">パスワード(確認)</label>
                                <div class="col-8">
                                    <input name="password_confirmation" type="password" id="password_confirmation"
                                           class="form-control" value="{{ $current_user->password_confirmation }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button type="submit" class="btn btn-success mt-4">保存する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="hidden-lg-up">
                    @include('shared.footer')
                </div>
            </div>
        </div>
    </div>

    @include('shared.js.jQuery_tether_bootstrap')
    @include('shared.js.add_class')
@endsection
