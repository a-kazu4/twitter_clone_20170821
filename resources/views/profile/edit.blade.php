@extends('layout')

@section('content')

    @include('shared.navbar')

    <div class="container pt-4">
        <div class="row">

            <div class="col-lg-3">
                @include('shared.user.current_user_data', ['current_user' => $current_user, 'followings' => $followings, 'followers' => $followers])
                @include('shared.user.button_account_and_profile', ['current_user' => $current_user])
            </div>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header" style="background-color: #FFFFFF;">
                        <strong>プロフィール</strong>
                    </div>
                    <div class="card-block">
                        <form method="POST" action="{{ route('profile_update') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group row {{ $errors->has('display_name') ? ' has-danger' : '' }}">
                                <label for="display_name" class="col-3 col-form-label">表示名</label>
                                <div class="col-9">
                                    <input name="display_name" type="text" id="display_name" class="form-control"
                                           value="{{ $current_user->display_name }}">

                                    @if ($errors->has('display_name'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('display_name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ $errors->has('avatar') ? 'has-danger' : '' }}">
                                <label for="avatar" class="col-3 col-form-label">アバター</label>
                                <div class="col-9">
                                    <img src="{{ asset('images/no-thumb.png') }}" class="avatar">
                                    <input name="avatar" type="file" id="avatar" class="form-control-file">

                                    @if ($errors->has('avatar'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label for="description" class="col-3 col-form-label">自己紹介</label>
                                <div class="col-9">
                                    <input name="description" type="text" id="description" class="form-control"
                                           value="{{ $current_user->description }}" maxlength="160">

                                    @if ($errors->has('description'))
                                        <div class="form-control-feedback">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-3 col-9">
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
