@extends('dashboard.layouts.app')
@section('title', 'Klaudios | News')
@section('content')
@include('dashboard.asides.leftMenu')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($news as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <th scope="row">
                        <img src="{{ asset('images/news/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid" />    
                    </th>
                    <th scope="row">{{ $item->title }}</th>
                    <th scope="row">
                        {!! \App\Helpers\TextLimit::limit($item->description) !!}    
                    </th>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
