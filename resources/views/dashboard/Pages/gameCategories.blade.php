@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Games')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Complexity</th>
                    <th scope="col">Edit</th>
                    <th scope="col">
                        <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addGameCategoryModal">
                            <i class="fas fa-plus-square"></i>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <th scope="row" style="width: 300px;">{!! $category->name !!}</th>
                        <th scope="row" style="width: 300px;">
                            <img src="{{ asset('images/Games/categories/' . $category->image) }}" alt="Image" class="w-50">
                        </th>
                        <th scope="row">{{ $category['getCategoryComplexity']['name'] }}</th>
                        <th scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editGameCategoryModal{{ $category->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                        <th scope="row"></th>
                    </tr>

                    <!-- Edit Game Category Modal -->
                    <div class="modal fade" id="editGameCategoryModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="editGameCategoryModalTitle{{ $category->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editGameCategoryModalTitle{{ $category->id }}">Edit Game Category ({{ $category->name }})</h5>
                                    <input type="checkbox" class="changeGameCatStatus" id="catStatus{{ $category->id }}" data-catId="{{ $category->id }}" {{ $category->status == 1 ? "checked" : "" }} name="status" value="{{ $category->status }}">
                                    <label for="catStatus{{ $category->id }}"></label>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body position-relative">
                                    <form action="{{ route('edit-gameCategory', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="name">Name</span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $category->name }}">
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
                                                        <input type="file" class="custom-file-input" name="image" id="image" value="{{ $category->image }}">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelectGameComplexity">Complexity</label>
                                                    </div>
                                                    <select class="custom-select" name="complexity_id" id="inputGroupSelectGameComplexity" aria-label="Example select with button addon">
                                                        @foreach($complexities as $complexity)
                                                            <option {{ $complexity->id === $category['getCategoryComplexity']['id'] ? "selected" : "" }} value="{{ $complexity->id }}">{{ $complexity->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
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
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        {{ $categories->links() }}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <!-- Add Game Category Modal -->
        <div class="modal fade" id="addGameCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addGameCategoryModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGameCategoryModalTitle">Add Game Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add-gameCategory') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="name">Game Category Name</span>
                                        </div>
                                        <input type="text" name="name" class="form-control" aria-label="Name" aria-describedby="name" value="{{ @old('name') }}">
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
                                            <input type="file" class="custom-file-input" name="image" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelectGameComplexity">Complexity</label>
                                        </div>
                                        <select class="custom-select" name="complexity_id" id="inputGroupSelectGameComplexity" aria-label="Example select with button addon">
                                            @foreach($complexities as $complexity)
                                                <option value="{{ $complexity->id }}">{{ $complexity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('dashboard.layouts.messages')
@endsection
