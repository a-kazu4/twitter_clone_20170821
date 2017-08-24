@extends('layout')

@section('content')
    @include('shared.navbar', ['current_user' => $current_user])
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

                <div class="hidden-md-down">
                    <div class="card card-link-list mb-4">
                        <div class="card-block">&copy; AsiaQuest Co., Ltd</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <ul class="row list-unstyled">
                    <li class="col-xl-4 col-md-6">
                        <div class="card card-profile mb-4">
                            <div class="card-header bg-danger"></div>
                            <div class="card-block">
                                <a href="#">
                                    <img class="avatar card-profile-img" src="{{ asset('images/no-thumb.png') }}">
                                </a>

                                <span class="float-right">
                                <form action="#" method="POST">
                                    {{ csrf_field() }}

                                    <button type="submit" class="btn btn-outline-danger btn-sm following"
                                            style="width: 6rem;">
                                        <span>フォロー中</span>
                                        <span>解除</span>
                                    </button>
                                </form>

                                    {{--<form action="#" method="POST">--}}
                                    {{--{{ csrf_field() }}--}}

                                    {{--<button type="submit" class="btn btn-outline-primary btn-sm">フォローする</button>--}}
                                    {{--</form>--}}
                            </span>

                                <strong class="card-title d-block">
                                    <a class="text-inherit" href="#">牧野</a>
                                </strong>

                                <p class="mb-4">
                                    Software engineer（JavaとかDBとかAWSとか） 空前絶後のKotlinブーム中
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="hidden-lg-up">
                    <div class="card card-link-list mb-4">
                        <div class="card-block">&copy; AsiaQuest Co., Ltd</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('shared.js.jQuery_tether_bootstrap')
@endsection
