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

@section('search_rate')
    <div class="row">
        <div class="col-12">
            <form class="form-horizontal" method="get" action="{{ route('admin.feedbacks.index') }}">
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
                                    <label class="col-sm-3 col-form-label" for="search-rate">Rate</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="rate"
                                            class="form-control @error('rate') is-invalid @enderror" id="search-rate"
                                            value="{{ $request->rate ?? old('rate') }}">
                                        @error('rate')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="search-username">User Name</label>
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

@section('rates')
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <div id="chart" style="height:450px;"></div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="card card-primary">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Rate</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rate 1*</td>
                                <td>{{ $rate1 }}</td>
                            </tr>
                            <tr>
                                <td>Rate 2*</td>
                                <td>{{ $rate2 }}</td>
                            </tr>
                            <tr>
                                <td>Rate 3*</td>
                                <td>{{ $rate3 }}</td>
                            </tr>
                            <tr>
                                <td>Rate 4*</td>
                                <td>{{ $rate4 }}</td>
                            </tr>
                            <tr>
                                <td>Rate 5*</td>
                                <td>{{ $rate5 }}</td>
                            </tr>
                            <tr>
                                <td>Sum</td>
                                <td>{{ $rate }}</td>
                            </tr>
                            <tr>
                                <td>Customer Satisfaction (from 4* to 5*)</td>
                                <td>{{ ($rate4+$rate5)*100/$rate }} %</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                                    <th>Rate (from 1 to 5)</th>
                                    <th>Feedback</th>
                                    <th>User Name</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $feedback->rate }}</td>
                                        <td>{{ $feedback->feedback }}</td>
                                        <td>{{ $feedback->username }}</td>
                                        <td class="text-center">
                                            <button
                                                class="btn btn-xs btn-danger px-4"onclick="showDeleteModal('{{ route('admin.feedbacks.destroy', $feedback) }}')">
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
                    {{ $feedbacks->links('admin::common.pagination', ['request' => $request]) }}
                </div>
            </div>
        </div>
    </div>
    @include('admin::common.delete')
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        var donut = new Morris.Donut({
            // ID of the element in which to draw the chart.
            element: 'chart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.

            data: [
                {label: "Rate: 1*", value: {{$rate1*100/$rate}}},
                {label: "Rate: 2*", value: {{$rate2*100/$rate}}},
                {label: "Rate: 3*", value: {{$rate3*100/$rate}}},
                {label: "Rate: 4*", value: {{$rate4*100/$rate}}},
                {label: "Rate: 5*", value: {{$rate5*100/$rate}}}
                ],
            labelColor: '#000000',
            colors: ['#766B56', '#A4ADD3', '#819C79', '#fc8710', '#FF6541'],
            formatter: function (x) { return x +"%"}
        });
    })

</script>
@stop
