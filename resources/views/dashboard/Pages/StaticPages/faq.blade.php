@extends('dashboard.layouts.app')
@section('title', 'Klaudios | FAQ')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark mb-5">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">
                        <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addFaqModal">
                            <i class="fas fa-plus-square"></i>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($faq as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th scope="row">{{ $item->title }}</th>
                        <th scope="row">
                            {!! \App\Helpers\TextLimit::limit($item->description) !!}
                        </th>
                        <th scope="row">
                            <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editFaqsModal{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                        <th scope="row">
                            <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteFaqModal{{ $item->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </th>
                        <th scope="row"></th>
                    </tr>


                    <!-- Delete News Modal -->
                    <div class="modal fade" id="deleteFaqModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteFaqModalTitle{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteFaqModalTitle{{ $item->id }}">Delete Faq ({{ $item->title }})</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('delete-faq', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <p>
                                                Are You sure <strong>Delete</strong> this faq ({{ $item->title }})
                                            </p>
                                        </div>
                                        <div class="row justify-content-center mt-2">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger ml-1">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit News Modal -->
                    <div class="modal fade" id="editFaqsModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editFaqModalTitle{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editFaqModalTitle{{ $item->id }}">Edit FAQ ({{ $item->title }})</h5>
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
                                                <form action="{{ route('edit-faq', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="title">Title</span>
                                                                </div>
                                                                <input type="text" name="title" class="form-control" aria-label="Title" aria-describedby="title" value="{{ $item->title }}">
                                                            </div>
                                                        </div>
                                                    </div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        {{ $faq->links() }}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        <!-- Add News Modal -->
        <div class="modal fade" id="addFaqModal" tabindex="-1" role="dialog" aria-labelledby="addFaqModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFaqModalTitle">Add FAQ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add-faq') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="title">Title</span>
                                        </div>
                                        <input type="text" name="title" class="form-control" aria-label="Title" aria-describedby="title" value="{{ @old('title') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="editor">Description</label>
                                <textarea class="form-control editor" name="description">
                                    {{ @old('description') }}
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
