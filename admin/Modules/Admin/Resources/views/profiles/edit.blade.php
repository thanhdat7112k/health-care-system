@extends('admin::layouts.app')

@section('title', $title)

@section('css')

@stop

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$title}}</h1>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form class="form-horizontal" method="post" action="{{ route('admin.profiles.update') }}">
                @method('PUT')
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title pl-2 left-column">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="admin-name" class="offset-1 col-sm-2 col-form-label label-required">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="@error('name') is-invalid @enderror form-control"
                                       id="admin-name" value="{{old('name') ?? $admin->name}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admin-phone"
                                   class="offset-1 col-sm-2 col-form-label label-required">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" name="phone"
                                       class="@error('phone') is-invalid @enderror form-control" id="admin-phone"
                                       value="{{old('phone') ?? $admin->phone}}">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admin-email"
                                   class="offset-1 col-sm-2 col-form-label label-required">Email</label>
                            <div class="col-sm-8">
                                <input type="text" name="email"
                                       class="@error('email') is-invalid @enderror form-control" id="admin-email"
                                       value="{{old('email') ?? $admin->email}}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admin-password"
                                   class="offset-1 col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" name="password"
                                       class="@error('password') is-invalid @enderror form-control" id="admin-password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admin-address"
                                   class="offset-1 col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="address"
                                       class="@error('address') is-invalid @enderror form-control" id="admin-address"
                                       value="{{old('address') ?? $admin->address}}">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

