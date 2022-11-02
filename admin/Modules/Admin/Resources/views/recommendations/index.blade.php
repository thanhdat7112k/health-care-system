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
                <a href="{{ route('admin.recommendations.create') }}" class="btn btn-primary px-4">Add</a>
            </div>
        </div>
      </div>
    </div>
</div>
@stop

@section('search')
<div class="row">
    <div class="col-12">
        <form class="form-horizontal" method="get" action="{{ route('admin.recommendations.index') }}">
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
                            <label class="col-sm-3 col-form-label" for="search-recommendations">Recommendation</label>
                            <div class="col-sm-7">
                                <input type="text" name="recommendation" class="form-control @error('recommendation') is-invalid @enderror" id="search-recommendations" value="{{ $request->recommendation ?? old('recommendation') }}">
                                @error('recommendation')
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
                            <th>Recommendation</th>
                            <th>Disease_name</th>
                            <th width="15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($recommendations as $recommendation)
                            <tr>
                                <td>{{ $recommendation->recommendation }}</td>
                                <td>{{ $recommendation->disease_name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.recommendations.edit', $recommendation) }}" class="btn btn-xs btn-info px-4"><i class="far fa-edit"></i></a>
                                    <button
                                        class="btn btn-xs btn-danger px-4"onclick="showDeleteModal('{{ route('admin.recommendations.destroy', $recommendation) }}')"
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
                {{ $recommendations->links('admin::common.pagination', ['request' => $request]) }}
            </div>
        </div>
    </div>
</div>
@include('admin::common.delete')
@stop
