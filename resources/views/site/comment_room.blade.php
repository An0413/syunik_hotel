@foreach($comments as $comment)
    <div class="single-comment-item reply-comment review-item mt-5">
        <div class="sc-author ri-pic">
            <img src="{{ asset('site/images/sonImg/com-user.jpg') }}" alt="comment-img" class="comment_img">
        </div>
        <div class="sc-text ri-text">
            <span class="date_comment">{{ $comment->created_at->format('d/m/Y') }}</span>
            <h5 class="comment_user">{{ $comment->name }}</h5>
            <p>{{ $comment->comment }}</p>
            <button type="button" class="btn comment-btn reply-btn" data-toggle="modal"
                    data-target="#replyModal" data-id="{{ $comment->id }}">
                {{__('messages.reply')}}
            </button>
        </div>

        @if (isset($comment->replies) && count($comment->replies) > 0)
                @include('site.comment_room', ['comments' => $comment->replies])
        @endif
    </div>
@endforeach
