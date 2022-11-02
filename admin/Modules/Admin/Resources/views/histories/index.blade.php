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
            </div>
        </div>
      </div>
    </div>
</div>
@stop

@section('search')
<div class="row">
    <div class="col-12">
        <form class="form-horizontal" method="get" action="{{ route('admin.histories.index') }}">
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
                            <label class="col-sm-3 col-form-label" for="search-symptoms">Symptom</label>
                            <div class="col-sm-7">
                                <input type="text" name="symptoms" class="form-control @error('symptoms') is-invalid @enderror" id="search-symptoms" value="{{ $request->symptoms ?? old('symptoms') }}">
                                @error('symptoms')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="search-disease_name">Disease Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="disease_name" class="form-control @error('disease_name') is-invalid @enderror" id="search-disease_name" value="{{ $request->disease_name ?? old('disease_name') }}">
                                @error('disease_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="search-username">User Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="search-username" value="{{ $request->username ?? old('username') }}">
                                @error('username')
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
                            <th>Symptoms</th>
                            <th>Disease Name</th>
                            <th>User Name</th>
                            <th>Date time</th>
                            <th width="15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($medicalHistories as $medicalHistory)
                            <tr>
                                <td>{{ $medicalHistory->symptoms }}</td>
                                <td>{{ $medicalHistory->disease_name }}</td>
                                <td>{{ $medicalHistory->username }}</td>
                                <td>{{ $medicalHistory->date_time }}</td>
                                <td class="text-center">
                                    <button
                                        class="btn btn-xs btn-danger px-4"onclick="showDeleteModal('{{ route('admin.histories.destroy', $medicalHistory) }}')"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Empty.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $medicalHistories->links('admin::common.pagination', ['request' => $request]) }}
            </div>
        </div>
    </div>
</div>
@include('admin::common.delete')
@stop
