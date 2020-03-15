@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Changed Games')
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
                                        <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editGameAnswerModal{{ $item->id }}" style="display: contents;">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <!-- Edit News Modal -->
                                        <div class="modal fade" id="editGameAnswerModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editGameAnswerModalTitle{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content p-1">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-dark" id="editGameAnswerModalTitle{{ $item->id }}">Edit Game Answer ({{ $item->id }})</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body position-relative">
                                                        <form action="{{ route('edit-changed-game', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="input-group input-group-sm mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="answer">Answer</span>
                                                                        </div>
                                                                        <input type="text" name="answer" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $item->answer != null ? $item->answer : "" }}">
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
                                                                            <input type="file" class="custom-file-input" name="image" id="image">
                                                                            <input type="hidden" class="custom-file-input" name="oldImage" value="{{ $item->image != null ? $item->image : "" }}">
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
                                </div>
                            @endif
                        </th>
                        <th scope="row"></th>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        {{ $games->links() }}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @include('dashboard.layouts.messages')
@endsection
