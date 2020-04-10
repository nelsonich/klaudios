@extends('layouts.app')
@section('title', 'Klaudios | News')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/news/newsComments.css') }}">
@endpush
@section('content')
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
                    <!-- Linkedin -->
{{--                    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>--}}
                    <div class="d-flex">
                        <a href="{{ url('https://twitter.com/share?ref_src=twsrc%5Etfw') }}" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="{{ url('https://platform.twitter.com/widgets.js') }}" charset="utf-8"></script>
                        <iframe src="https://www.facebook.com/plugins/share_button.php?href={{\Request::url()}}&layout=button_count&size=small&width=119&height=28&appId" width="119" height="28" style="border:none;overflow:hidden;margin-left: 5px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('news.newsComments')
@endsection
@push('scripts')
    <script src="{{ asset('js/News/newsComments.js') }}"></script>
@endpush
