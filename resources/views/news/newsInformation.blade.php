@extends('layouts.app')
@section('title', 'Klaudios | News')

@section('content')
    <div class="row news py-2 m-2">
        <div class="col-md-3 col-sm-3 col-4">
            <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" />
        </div>
        <div class="col-md-9 col-sm-9 col-8">
            <span class="likesCount">
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
            <a href="{{ url('home') }}" class="btn btn-sm btn-info">
                {{ trans('form.back', [], \Session::get('locale')) }}
            </a>
        </div>
    </div>

    @include('news.newsComments')
@endsection
@push('scripts')
    <script src="{{ asset('js/News/newsComments.js') }}"></script>
@endpush
