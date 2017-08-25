@if($current_user->id != $user->id)
    <div class="card mb-4">
        <div class="card-block">
            @if ($current_user->followings->where('id', $user->id)->isNotEmpty())
                <h6 class="card-title">フォロー/解除</h6>
                <form action="{{ route('unfollow', ['name' => $user->url_name]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-outline-danger btn-md following" style="width: 7rem;">
                        <span>フォロー中</span>
                        <span>解除</span>
                    </button>
                </form>
            @else
                <form action="{{ route('follow', ['name' => $user->url_name]) }}" method="POST">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-outline-primary btn-md">フォローする</button>
                </form>
            @endif
        </div>
    </div>
@endif