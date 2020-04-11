@extends('layouts.app')
@section('title', 'Klaudios | FAQ')
@section('description', 'On this page of Klaudios you can get the answers to your questions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" title="{{ trans('menu.frequentlyAskedQuestions', [], \Session::get('locale')) }}">{{ trans('menu.frequentlyAskedQuestions', [], \Session::get('locale')) }}</h1>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            @foreach($faq as $item)
                <div class="card">
                    <div class="card-header" id="heading{{ $item->id }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                                {{ $item->title }}
                            </button>
                        </h2>
                    </div>

                    <div id="collapse{{ $item->id }}" class="collapse" aria-labelledby="heading{{ $item->id }}" data-parent="#accordionExample">
                        <div class="card-body">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
