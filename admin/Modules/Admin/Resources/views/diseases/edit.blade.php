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
            <form class="form-horizontal" method="post" action="{{ route('admin.diseases.update', $disease) }}">
                @method('PUT')
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title pl-2 left-column">Edit Diseases</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="disease_name" class="offset-1 col-sm-2 col-form-label label-required">Diseases name</label>
                            <div class="col-sm-8">
                                <input type="text" name="disease_name"
                                    class="@error('disease_name') is-invalid @enderror form-control" id="disease_name"
                                    value="{{ old('disease_name') ?? $disease->disease_name }}">
                                @error('disease_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description"
                                class="offset-1 col-sm-2 col-form-label label-required">Description</label>
                            <div class="col-sm-8">
                                <textarea rows="8" cols="100" type="text" name="description" class="@error('description') is-invalid @enderror form-control" id="description" value="old('description')">{{ $disease->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <a type="button" class="btn btn-light px-4" href="{{ route('admin.diseases.index') }}">Back</a>
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
