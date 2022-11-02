@extends('admin::layouts.app')

@section('title', $title)

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-right">
                        <a href="{{ route('admin.customers.create') }}" class="btn btn-primary px-4">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('search')
    <div class="row">
        <div class="col-12">
            <form class="form-horizontal" method="get" action="{{ route('admin.customers.index') }}">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title pl-2 left-column">Search</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="search-username"> User name</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            id="search-username" value="{{ $request->username ?? old('username') }}">
                                        @error('username')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="search-customer-email">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="search-customer-email" value="{{ $request->email ?? old('email') }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="search-phonenumber">Phone</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="phonenumber"
                                            class="form-control @error('phonenumber') is-invalid @enderror"
                                            id="search-phonenumber"
                                            value="{{ $request->phonenumber ?? old('phonenumber') }}">
                                        @error('phonenumber')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-secondary px-4">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phonenumber }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.customers.edit', $user) }}"
                                                class="btn btn-xs btn-info px-4"><i class="far fa-edit"></i></a>
                                            <button
                                                class="btn btn-xs btn-danger px-4"onclick="showDeleteModal('{{ route('admin.customers.destroy', $user) }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">{{ trans('messages.empty') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $users->links('admin::common.pagination', ['request' => $request]) }}
                </div>
            </div>
        </div>
    </div>
    @include('admin::common.delete')
@stop
