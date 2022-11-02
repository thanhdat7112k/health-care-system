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
            <form class="form-horizontal" method="post" action="{{ route('admin.symptoms.store') }}">
                @csrf
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title pl-2 left-column">{{ $title }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="symptom_name" class="offset-1 col-sm-2 col-form-label label-required">Symptom_name</label>
                            <div class="col-sm-8">
                                <input type="text" name="symptom_name" class="@error('symptom_name') is-invalid @enderror form-control" id="symptom_name" value="{{ old('symptom_name') }}">
                                @error('symptom_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="offset-1 col-sm-2 col-form-label label-required">Weight (From 1 to 10)</label>
                            <div class="col-sm-8">
                                <input type="text" name="weight" class="@error('weight') is-invalid @enderror form-control" id="weight" value="{{ old('weight') }}">
                                @error('weight')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="disease_name" class="offset-1 col-sm-2 col-form-label label-required">Disease Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="disease_name" class="@error('disease_name') is-invalid @enderror form-control" id="disease_name" value="{{ old('disease_name') }}">
                                @error('disease_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <a type="button" class="btn btn-light px-4" href="{{ route( 'admin.symptoms.index')}}">Back</a>
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

@section('js')

@stop
