@foreach($comments as $comment)
    <div class="single-comment-item reply-comment">
        <div class="sc-author">
            <img src="{{ asset('site/images/sonImg/blog/blog-details/avatar/avatar-1.jpg') }}" alt="">
        </div>
        <div class="sc-text">
            <span>{{ $comment->created_at->format('F j, Y') }}</span>
            <h5>{{ $comment->name }}</h5>
            <p>{{ $comment->comment }}</p>
            <a href="#" class="comment-btn">{{__('messages.like')}}</a>
            <button type="button" class="btn comment-btn reply-btn" data-toggle="modal"
                    data-target="#replyModal" data-id="{{ $comment->id }}">
                {{__('messages.reply')}}
            </button>
        </div>

        @if (isset($comment->replies) && count($comment->replies) > 0)
                @include('site.comment_array', ['comments' => $comment->replies])
        @endif
    </div>
@endforeach
