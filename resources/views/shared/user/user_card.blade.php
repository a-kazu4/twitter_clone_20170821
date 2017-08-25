<li class="col-xl-4 col-md-6">
    <div class="card card-profile mb-4">
        <div class="card-header bg-danger"></div>
        <div class="card-block">
            <a href="#">
                <img class="avatar card-profile-img" src="{{ asset('images/no-thumb.png') }}">
            </a>
                <span class="float-right">
                    @if (\Illuminate\Support\Facades\Auth::user()->followings->where('id', $user->id)->isNotEmpty())
                    <form action="{{ route('unfollow', ['name' => $user->url_name]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-outline-danger btn-sm following"
                                style="width: 6rem;">
                            <span>フォロー中</span>
                            <span>解除</span>
                        </button>
                    </form>
                    @else
                        <form action="{{ route('follow', ['name' => $user->url_name]) }}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-outline-primary btn-sm">フォローする</button>
                        </form>
                    @endif
                </span>

            <strong class="card-title d-block">
                <a class="text-inherit" href="{{ route('user_show', ['name' => $user->url_name]) }}">{{ $user->display_name }}</a>
            </strong>

            <p class="mb-4">
                {{ $user->description }}
            </p>
        </div>
    </div>
</li>