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
                        <th scope="col">Image</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answers</th>
                        <th scope="col">Edit</th>
                        <th scope="col">
                            <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addGameModal">
                                <i class="fas fa-plus-square"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <th scope="row">{{ $game->id }}</th>
                            <th scope="row">
                                @if($game->image)
                                    <img src="{{ asset('images/Games/games/' . $game->image) }}" alt="Image" class="w-75">
                                @endif
                            </th>
                            <th scope="row" title="{!! $game->question !!}">{!! \App\Helpers\TextLimit::limit($game->question, 20) !!}</th>
                            <th scope="row">
                                @if(!$game['getGameAnswers']->isEmpty())
                                    <div class="row justify-content-center">
                                        @foreach($game['getGameAnswers'] as $item)
                                            <div class="col-md-2 gameAnswers m-2 {{ $item->id == $game['getGameRightAnswer']['answer_id'] ? "rightAnswer" : "" }}" data-answerId="{{ $item->id }}" data-gameId="{{ $game->id }}">
                                                {{ $item->answer != null ? $item->answer : "" }}

                                                @if($item->image != null)
                                                    <img src="{{ asset('images/Games/answers/' . $item->image) }}" alt="Image" class="w-50" style="height: 70px;">
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </th>
                            <th scope="row">
                                <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editGameModal{{ $game->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </th>
                            <th scope="row"></th>
                        </tr>

                        <!-- Edit News Modal -->
                        <div class="modal fade" id="editGameModal{{ $game->id }}" tabindex="-1" role="dialog" aria-labelledby="editGameModalTitle{{ $game->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content p-1">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editGameModalTitle{{ $game->id }}">Edit Game ({{ $game->id }})</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body position-relative">
                                        <form action="{{ route('edit-game', ['id' => $game->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="answer">Answer 1</span>
                                                        </div>
                                                        <input type="text" name="answer[]" class="form-control" aria-label="Title" aria-describedby="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload 1</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image[]" id="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="answer">Answer 2</span>
                                                        </div>
                                                        <input type="text" name="answer[]" class="form-control" aria-label="Title" aria-describedby="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload 2</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image[]" id="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="answer">Answer 3</span>
                                                        </div>
                                                        <input type="text" name="answer[]" class="form-control" aria-label="Title" aria-describedby="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload 3</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image[]" id="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="answer">Answer 4</span>
                                                        </div>
                                                        <input type="text" name="answer[]" class="form-control" aria-label="Title" aria-describedby="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload 4</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image[]" id="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
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
                        {{ $games->links('pagination::bootstrap-5') }}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <!-- Add Game Modal -->
        <div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="addGameModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGameModalTitle">Add Game</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add-game') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{--<div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="title">Question</span>
                                        </div>
                                        <input type="text" name="title" class="form-control" aria-label="Title" aria-describedby="title" value="{{ @old('title') }}">
                                    </div>
                                </div>
                            </div>--}}
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
                                <label for="editor">Question</label>
                                <textarea class="form-control editor" name="question">
                                    {{ @old('description') }}
                                </textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelectGameCategory">Category</label>
                                        </div>
                                        <select class="custom-select" name="game_category_id" id="inputGroupSelectGameCategory" aria-label="Example select with button addon">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }} ({{ $category['getCategoryComplexity']['name'] }})</option>
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
