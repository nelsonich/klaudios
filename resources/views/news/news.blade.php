@push('css')
    <link rel="stylesheet" href="{{ asset('css/news/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
@endpush

<div class="row text-center title">
    <h1 title="News">News.</h1>
</div>

<div class="searchNews" data-routeName="{{ route('get-news-name') }}">
    <form method="get" action="{{ route('search-news') }}" role="search" class="form-inline d-flex justify-content-center md-form form-sm mt-0 needs-validation" novalidate>
        @csrf
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="{{ trans('form.search', [], \Session::get('locale')) }}"
               aria-label="Search" id="searchNews" aria-describedby="inputGroupPrepend2" name="searchNewsName" value="{{ old('searchNewsName') }}" required>
        <button type="submit" class="btn btn-sm btn-success searchButton">
            <i class="fas fa-search" aria-hidden="true"></i>
            {{ trans('form.search', [], \Session::get('locale')) }}
        </button>
    </form>
</div>

<div class="row">
    @if(isset($news))
        @foreach ($news as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('images/news/' . $item->image) }}" alt="{{ $item->title }}" style="height: 250px;">
                        <a><div class="mask rgba-white-slight"></div></a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <hr>
                        <p class="card-text">{!! \App\Helpers\TextLimit::limit($item->description, 80) !!}</p>
                    </div>
                    <a href="{{ url('home/item', [$item->id]) }}" class="btn btn-sm btn-info">
                        {{ trans('form.readMore', [], \Session::get('locale')) }}
                        <i class="fas fa-chevron-right pl-1"></i>
                    </a>

                    <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                        <ul class="list-unstyled list-inline font-small">
                            <li class="list-inline-item pr-2 white-text">
                                <i class="far fa-clock pr-1"></i>
                                {{ $item->created_at->format('Y-m-d') }}
                            </li>
                            <li class="list-inline-item pr-2">
                                <a href="{{ url('home/item', [$item->id]) }}" class="white-text" title="comments">
                                    <i class="far fa-comments pr-1"></i>
                                    {{ count($item['getNewsCommentCount']) }}
                                </a>
                            </li>
                            <li class="list-inline-item pr-2">
                            <span class="likeNews {{ !$item['getNewsLikes']->isEmpty() ? "activeLike" : "" }}"
                                  data-newsId="{{ $item->id }}"
                                  title="{{ $item['getNewsLikes']->isEmpty() ? "like" : "dislike" }}"
                                  data-routeName="{{ route('like-news') }}">
                                <i class="far fa-heart"></i>
                            </span>
                            <span class="likesCount text-white">
                                {{ count($item['getNewsLikesCounts']) > 0 ? count($item['getNewsLikesCounts']) . " likes" : "No Likes" }}
                                @if(count($item['getNewsLikesCounts']) > 0)
                                    <div class="likedUsers">
                                        {!! App\Helpers\getLikedUser::getUserName($item) !!}
                                    </div>
                                @endif
                            </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        {!! $news->render() !!}
    @else
        <p class="text-center mx-auto">
            {{ trans('form.noResults', [], \Session::get('locale')) }}
        </p>
    @endif
</div>


@push('scripts')
    <script src="{{ asset('js/News/likeNews.js') }}"></script>
    <script src="{{ asset('js/News/searchNews.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
@endpush
