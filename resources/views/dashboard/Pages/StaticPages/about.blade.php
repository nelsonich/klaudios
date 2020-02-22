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
                        <th scope="row">{{ $about->id }}</th>
                        <th scope="row">
                            <img src="{{ asset('images/' . $about->image) }}" alt="{{ $about->title }}" class="img-fluid w-50" />
                        </th>
                        <th scope="row">{{ $about->title }}</th>
                        <th scope="row">
                            {!! \App\Helpers\TextLimit::limit($about->description) !!}
                        </th>
                        <td scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editAboutModal{{ $about->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Edit About Modal -->
                    <div class="modal fade" id="editAboutModal{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="editAboutModalTitle{{ $about->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAboutModalTitle{{ $about->id }}">Edit About</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('edit-about') }}" method="post" enctype="multipart/form-data">
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
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" id="image" value="{{ $about->image }}">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@include('dashboard.layouts.messages')
