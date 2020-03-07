@extends('dashboard.layouts.app')
@section('title', 'Klaudios | About')
@section('content')
@include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $abouts[0]->id }}</th>
                        <th scope="row">
                            <img src="{{ asset('images/' . $abouts[0]->image) }}" alt="{{ $abouts[0]->title }}" class="img-fluid w-50" />
                        </th>
                        <th scope="row">{{ $abouts[0]->title }}</th>
                        <th scope="row">
                            {!! \App\Helpers\TextLimit::limit($abouts[0]->description) !!}
                        </th>
                        <th scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editAboutModal{{ $abouts[0]->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                    </tr>

                    <!-- Edit About Modal -->
                    <div class="modal fade" id="editAboutModal{{ $abouts[0]->id }}" tabindex="-1" role="dialog" aria-labelledby="editAboutModalTitle{{ $abouts[0]->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAboutModalTitle{{ $abouts[0]->id }}">Edit About</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="en-tab" data-toggle="tab" href="#en" role="tab" aria-controls="en" aria-selected="true">EN</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ru-tab" data-toggle="tab" href="#ru" role="tab" aria-controls="ru" aria-selected="false">RU</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="am-tab" data-toggle="tab" href="#am" role="tab" aria-controls="am" aria-selected="false">AM</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        @foreach($abouts as $about)
                                            <div class="tab-pane fade show {{ $about->lang == 'en' ? "active" : "" }}" id="{{ $about->lang }}" role="tabpanel" aria-labelledby="{{ $about->lang }}-tab">
                                                <form action="{{ route('edit-about', ['lang' => $about->lang]) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="title">Title</span>
                                                                </div>
                                                                <input type="text" name="title" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $about->title }}">
                                                            </div>
                                                        </div>
                                                    </div>
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-12 col-sm-12">--}}
{{--                                                            <div class="input-group mb-3">--}}
{{--                                                                <div class="input-group-prepend">--}}
{{--                                                                    <span class="input-group-text">Upload</span>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="custom-file">--}}
{{--                                                                    <input type="file" class="custom-file-input" name="image" id="image" value="{{ $about->image }}">--}}
{{--                                                                    <label class="custom-file-label" for="image">Choose file</label>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <div class="row">
                                                        <label for="editor">Description</label>
                                                        <textarea id="editor" class="form-control editor" name="description">
                                                            {{ $about->description }}
                                                        </textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
@include('dashboard.layouts.messages')
@endsection
