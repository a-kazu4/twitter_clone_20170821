<div class="card card-profile mb-4">
    <div class="card-header bg-danger"></div>
    <div class="card-block text-center">
        <a href="#">
            <img class="avatar card-profile-img" src="{{ asset('images/no-thumb.png') }}">
        </a>

        <div class="card-title my-2">
            <a href="{{ url($current_user->url_name) }}" class="font-weight-bold text-inherit d-block">
                {{ $current_user->display_name }}
            </a>
            <a href="{{ url($current_user->url_name) }}" class="text-inherit text-muted">
                &#64;{{ $current_user->url_name }}
            </a>
        </div>

        <p class="mb-4">{{ $current_user->description }}</p>

        <ul class="card-profile-stats">
            <li class="card-profile-stat">
                <a href="#" class="text-inherit">
                    <span class="text-muted">フォロー</span>
                    <strong class="d-block">30</strong>
                </a>
            </li>
            <li class="card-profile-stat">
                <a href="#" class="text-inherit">
                    <span class="text-muted">フォロワー</span>
                    <strong class="d-block">7</strong>
                </a>
            </li>
        </ul>
    </div>
</div>