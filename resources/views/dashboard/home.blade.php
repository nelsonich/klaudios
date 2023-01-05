@extends('dashboard.layouts.app')
@section('title', 'Klaudios | Dashboard')
@section('content')
    @include('dashboard.asides.leftMenu')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Role</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <th scope="row">{{ $user->first_name }}</th>
                            <th scope="row">{{ $user->last_name }}</th>
                            <th scope="row">{{ $user->user_name }}</th>
                            <th scope="row">{{ $user->email }}</th>
                            <th scope="row">{{ $user->role }}</th>
                            <th scope="row">
                                <a type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#editUserModal{{ $user->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </th>
                        </tr>

                        <!-- Edit News Modal -->
                        <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="editUserModalTitle{{ $user->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content p-1">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editUserModalTitle{{ $user->id }}">Edit News
                                            ({{ $user->user_name }})</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('edit-userData', ['id' => $user->id]) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text"
                                                                for="inputGroupSelect{{ $user->id }}">Role</label>
                                                        </div>
                                                        <select class="custom-select" name="role"
                                                            id="inputGroupSelect{{ $user->id }}"
                                                            aria-label="Example select with button addon">
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->role }}"
                                                                    {{ $user->role == $role->role ? 'selected' : '' }}>
                                                                    {{ $role->role }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary"
                                                                type="submit">Edit</button>
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
                        <th>
                            {{ $users->links('pagination::bootstrap-5') }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    @include('dashboard.layouts.messages')
@endsection
