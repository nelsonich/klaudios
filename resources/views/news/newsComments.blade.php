@push('css')
    <link rel="stylesheet" href="{{ asset('css/news/news.css') }}">
@endpush
<div class="comment_block"
     data-routeName="{{ route('comments-news') }}"
     data-createCommentRouteName="{{ route('create-comment-news') }}"
     data-likeCommentRouteName="{{ route('like-comment-news') }}">
    <h1 title="Comments...">{{ trans('form.comments', [], \Session::get('locale')) }}...</h1>
    <div class="create_new_comment">
        <div class="user_avatar">
            <img src="{{ asset('images/klaudios.png') }}" alt="Klaudios" />
        </div>
        <div class="input_comment">
            <input type="text" placeholder="{{ trans('form.pressEnter', [], \Session::get('locale')) }}" id="createComment" />
        </div>
    </div>

    <!-- new comments -->
    <div class="new_comment_container"></div>
</div>
