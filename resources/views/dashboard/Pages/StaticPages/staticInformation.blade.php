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
                        <th scope="col">Description</th>
                        <th scope="col">Place</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $staticInfo->id }}</th>
                        <th scope="row">
                            <img src="{{ asset('images/' . $staticInfo->logo) }}" alt="Logo" class="img-fluid w-50" />
                        </th>
                        <th scope="row">
                            {!! \App\Helpers\TextLimit::limit($staticInfo->description, 100) !!}
                        </th>
                        <th scope="row">{{ $staticInfo->place }}</th>
                        <th scope="row">{{ $staticInfo->phone }}</th>
                        <th scope="row">
                            <span class="threePoints">
                                {{ $staticInfo->email }}
                            </span>
                        </th>
                        <th scope="row">
                            <span class="threePoints">
                                {{ $staticInfo->instagram_link }}
                            </span>
                        </th>
                        <th scope="row">
                            <span class="threePoints">
                                {{ $staticInfo->facebook_link }}
                            </span>
                        </th>
                        <th scope="row">
                            <span class="threePoints">
                                {{ $staticInfo->twitter_link }}
                            </span>
                        </th>
                        <th scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editStaticInfoModal{{ $staticInfo->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                    </tr>

                <!-- Edit Static Info. Modal -->
                <div class="modal fade" id="editStaticInfoModal{{ $staticInfo->id }}" tabindex="-1" role="dialog" aria-labelledby="editStaticInfoModalTitle{{ $staticInfo->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content p-1">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editStaticInfoModalTitle{{ $staticInfo->id }}">Edit Static Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('edit-static-information') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="logo" id="logo" value="{{ $staticInfo->logo }}">
                                                    <label class="custom-file-label" for="logo">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="place">Place</span>
                                                </div>
                                                <input type="text" name="place" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->place }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="phone">Phone</span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->phone }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="email">Email</span>
                                                </div>
                                                <input type="text" name="email" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="instagram">Instagram</span>
                                                </div>
                                                <input type="text" name="instagram_link" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->instagram_link }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="facebook">Facebook</span>
                                                </div>
                                                <input type="text" name="facebook_link" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->facebook_link }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="twitter">Twitter</span>
                                                </div>
                                                <input type="text" name="twitter_link" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $staticInfo->twitter_link }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="editor">Description</label>
                                        <textarea id="editor" class="form-control editor" name="description">
                                            {{ $staticInfo->description }}
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
                        </div>
                    </div>
                </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@include('dashboard.layouts.messages')
