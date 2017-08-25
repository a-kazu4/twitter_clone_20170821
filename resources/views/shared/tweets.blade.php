<li class="media list-group-item p-4">
    <article class="d-flex w-100">
        <a class="font-weight-bold text-inherit d-block" href="#">
            <img class="media-object d-flex align-self-start mr-3"
                 src="{{ asset('images/no-thumb.png') }}">
        </a>
        <div class="media-body">
            <div class="mb-2">
                <a class="text-inherit" href="{{ url($tweet->user->url_name) }}">
                    <strong>{{ $tweet->user->display_name }}</strong>
                    <span class="text-muted">&#64;{{ $tweet->user->url_name }}</span>
                </a>
                -
                <time class="small text-muted">{{ $tweet->updated_at }}</time>
            </div>

            <p>{{ $tweet->body }}</p>
        </div>
    </article>
</li>