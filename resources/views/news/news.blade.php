<div class="row text-center title">
    <h1 title="News">News.</h1>
</div>

@foreach ($news as $item)
    <div class="row news py-2 m-2">
        <div class="col-md-3">
            <img src="{{ asset('images/news/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid" />
        </div>
        <div class="col-md-7 py-5">
            <h2 title="{{ $item->title }}">{{ $item->title }}</h2>
            <p>{!! \App\Helpers\TextLimit::limit($item->description) !!}</p>
        </div>
        <div class="col-md-2">
            <span class="likesCount">
                {{ count($item['getNewsLikesCounts']) > 0 ? count($item['getNewsLikesCounts']) . " likes" : "No Likes" }}
            </span>
            <span class="likeNews {{ !$item['getNewsLikes']->isEmpty() ? "activeLike" : "" }}"
                  data-newsId="{{ $item->id }}"
                  title="{{ $item['getNewsLikes']->isEmpty() ? "like" : "dislike" }}"
                  data-routeName="{{ route('like-news') }}">
                <i class="far fa-heart"></i>
            </span>
            <a href="{{ url('home/item', [$item->id]) }}" class="btn btn-sm btn-info">
                {{ trans('form.readMore', [], \Session::get('locale')) }}
            </a>
        </div>
    </div>
@endforeach

{{ $news->links() }}
