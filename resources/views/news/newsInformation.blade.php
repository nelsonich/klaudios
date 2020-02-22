@extends('layouts.app')
@section('title', 'Klaudios | News')

@section('content')
    <div class="row news py-2 m-2">
        <div class="col-md-3">
            <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" />
        </div>
        <div class="col-md-7 py-5">
            <h2 title="{{ $news->title }}">{{ $news->title }}</h2>
            <p>{!! $news->description !!}</p>
        </div>
        <div class="col-md-2">
            <span class="likesCount">
                {{ count($news['getNewsLikesCounts']) > 0 ? count($news['getNewsLikesCounts']) . " likes" : "No Likes" }}
            </span>
            <span class="likeNews {{ !$news['getNewsLikes']->isEmpty() ? "activeLike" : "" }}"
                  data-newsId="{{ $news->id }}"
                  title="{{ $news['getNewsLikes']->isEmpty() ? "like" : "dislike" }}"
                  data-routeName="{{ route('like-news') }}">
                <i class="far fa-heart"></i>
            </span>
            <a href="{{ url('home') }}" class="btn btn-sm btn-info">Back</a>
        </div>
    </div>

    @include('news.newsComments')
@endsection
