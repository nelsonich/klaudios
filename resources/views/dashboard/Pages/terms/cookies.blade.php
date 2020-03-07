@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Cookies Policy')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Lang</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cookies as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th scope="row">{!! \App\Helpers\TextLimit::limit($item->description, 200) !!}</th>
                        <th scope="row">{{ $item->lang }}</th>
                        <th scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editCookiesModal{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                    </tr>

                    <!-- Edit News Modal -->
                    <div class="modal fade" id="editCookiesModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editCookiesModalTitle{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCookiesModalTitle{{ $item->id }}">Edit Privacy ({{ $item->lang }})</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('edit-cookies', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <label for="editor">Description</label>
                                            <textarea class="form-control editor" name="description">
                                              {{ $item->description }}
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
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('dashboard.layouts.messages')
@endsection
