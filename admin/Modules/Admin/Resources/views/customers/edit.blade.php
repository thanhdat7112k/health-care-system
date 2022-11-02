@extends('admin::layouts.app')

@section('title', $title)

@section('css')

@stop

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form class="form-horizontal" method="post" action="{{ route('admin.customers.update', $user) }}">
                @method('PUT')
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title pl-2 left-column">Edit Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="user-name" class="offset-1 col-sm-2 col-form-label label-required">User Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="@error('username') is-invalid @enderror form-control"
                                       id="user-name" value="{{ old('username') ?? $user->username }}">
                                @error('username')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first-name" class="offset-1 col-sm-2 col-form-label label-required">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="@error('firstname') is-invalid @enderror form-control"
                                       id="first-name" value="{{ old('firstname') ?? $user->firstname }}">
                                @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last-name" class="offset-1 col-sm-2 col-form-label label-required">Last Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="lastname" class="@error('lastname') is-invalid @enderror form-control"
                                       id="last-name" value="{{ old('lastname') ?? $user->lastname }}">
                                @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user-email" class="offset-1 col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="@error('email') is-invalid @enderror form-control"
                                       id="user-email" value="{{ old('email') ?? $user->email }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="menu-duration" class="offset-1 col-sm-2 col-form-label label-required">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" name="phonenumber" class="@error('phonenumber') is-invalid @enderror form-control"
                                       id="user-phone" value="{{ old('phonenumber') ?? $user->phonenumber }}">
                                @error('phonenumber')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <a type="button" class="btn btn-light px-4" href="{{ route( 'admin.customers.index') }}">
                                Back</a>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
