<div class="comment_block"
     data-routeName="{{ route('comments-news') }}"
     data-createCommentRouteName="{{ route('create-comment-news') }}">
    <h1 title="Comments...">Comments...</h1>
    <div class="create_new_comment">
        <div class="user_avatar">
            <img src="{{ asset('images/klaudios.png') }}" alt="Klaudios" />
        </div>
        <div class="input_comment">
            <input type="text" placeholder="Press Enter By Create Comment" id="createComment" />
        </div>
    </div>

    <!-- new comments -->
    <div class="new_comment_container"></div>
</div>
