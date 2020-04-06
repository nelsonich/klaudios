@extends('layouts.app')
@section('title', 'Klaudios | News')
@section('content')
    {{--<div class="row news py-2 m-2">
        <div class="col-md-3 col-sm-3 col-4">
            <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" />
        </div>
        <div class="col-md-9 col-sm-9 col-8">
            <span class="likesCount" data-toggle="tooltip" data-placement="bottom" data-html="true" title="{{ App\Helpers\getLikedUser::getUserName($news) }}">
                {{ count($news['getNewsLikesCounts']) > 0 ? count($news['getNewsLikesCounts']) . " likes" : "No Likes" }}
            </span>
            <span class="likeNews {{ !$news['getNewsLikes']->isEmpty() ? "activeLike" : "" }}"
                  data-newsId="{{ $news->id }}"
                  title="{{ $news['getNewsLikes']->isEmpty() ? "like" : "dislike" }}"
                  data-routeName="{{ route('like-news') }}">
                <i class="far fa-heart"></i>
            </span>
        </div>
        <div class="col-md-12 py-5">
            <h2 title="{{ $news->title }}">{{ $news->title }}</h2>
            <p>{!! $news->description !!}</p>
            <a href="{{ \URL::previous() }}" class="btn btn-sm btn-info">
                {{ trans('form.back', [], \Session::get('locale')) }}
            </a>
        </div>
    </div>--}}
    <div class="container mb-3">
        <div class="row">
            <div class="card card-cascade wider reverse">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top w-25 ml-auto mr-auto mt-3" src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" />
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="card-title"><strong>{{ $news->title }}</strong></h4>
                    <!-- Text -->
                    <p class="card-text">{!! $news->description !!}</p>
                    <div class="sharethis-inline-share-buttons mt-3"></div>
                    <a href="{{ \URL::previous() }}" class="btn btn-sm btn-info float-right">
                        {{ trans('form.back', [], \Session::get('locale')) }}
                    </a>
                    {{--<!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{ url('https://twitter.com/share?ref_src=twsrc%5Etfw') }}" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="{{ url('https://platform.twitter.com/widgets.js') }}" charset="utf-8"></script>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://klaudios.loc/home/item/1&layout=button_count&size=small&width=119&height=28&appId" width="119" height="28" style="border:none;overflow:hidden; position: absolute;bottom: 10px; left: 20px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    --}}
                </div>
            </div>
        </div>
    </div>

    @include('news.newsComments')
@endsection
@push('scripts')
    <script src="{{ asset('js/News/newsComments.js') }}"></script>
@endpush
