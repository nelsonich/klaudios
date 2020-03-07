@extends('dashboard.layouts.app')
@section('title', 'Klaudios | News')
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
                <th scope="col">Delete</th>
                <th scope="col">
                  <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewsModal">
                    <i class="fas fa-plus-square"></i>
                  </a>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($news as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <th scope="row">
                        <img src="{{ asset('images/news/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid w-50" />
                    </th>
                    <th scope="row">{{ $item->title }}</th>
                    <th scope="row">
                        {!! \App\Helpers\TextLimit::limit($item->description) !!}
                    </th>
                    <th scope="row">
                      <a type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editNewsModal{{ $item->id }}">
                        <i class="fas fa-edit"></i>
                      </a>
                    </th>
                    <th scope="row">
                      <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteNewsModal{{ $item->id }}">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </th>
                    <th scope="row"></th>
                </tr>


                <!-- Delete News Modal -->
                <div class="modal fade" id="deleteNewsModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteNewsModalTitle{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content p-1">
                      <div class="modal-header">
                        <h5 class="modal-title" id="deleteNewsModalTitle{{ $item->id }}">Delete News ({{ $item->title }})</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('delete-news', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                              <p>
                                Are You sure <strong>Delete</strong> this news ({{ $item->title }})
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
                <div class="modal fade" id="editNewsModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editNewsModalTitle{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content p-1">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editNewsModalTitle{{ $item->id }}">Edit News ({{ $item->title }})</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('edit-news', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
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
                            <div class="col-md-12 col-sm-12">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="image" value="{{ $item->image }}">
                                  <label class="custom-file-label" for="image">Choose file</label>
                                </div>
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
                    </div>
                  </div>
                </div>
              @endforeach
            </tbody>
            <tfoot>
                <tr>
                  <td>
                    {{ $news->links() }}
                  </td>
                </tr>
            </tfoot>
          </table>
    </div>

  <!-- Add News Modal -->
  <div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="addNewsModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-1">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewsModalTitle">Add News</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('add-news') }}" method="post" enctype="multipart/form-data">
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
