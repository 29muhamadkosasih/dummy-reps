@extends('layouts.master')

@section('content')
@section('title', 'Dashboard')

<div class="col-sm-6 col-xl-3 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                    <h5 class="card-title mb-0">Total RF</h5>
                    <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">{{ $reportss }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                    <h5 class="card-title mb-0">Total Amount RF</h5>
                    <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">{{ number_format($jumlah_total, 0, ',', '.',) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                    <h5 class="card-title mb-0">Total RF Perbulan</h5>
                    <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">{{ $reports }} / {{ $namaBulan }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                    <h5 class="card-title mb-0">Amount RF Perbulan</h5>
                    <div class="d-flex align-items-center my-1">
                        <h4 class="mb-0 me-2">{{ number_format($jumlah_total2, 0, ',', '.',) }} /
                            {{
                            $namaBulan }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-xl-4 col-12">
    <div class="row">
        <!-- Expenses -->
        <div class="col-xl-6 mb-4 col-md-3 col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Total RF</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">{{ $reportss }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expenses -->

        <!-- Profit last month -->
        <div class="col-xl-6 mb-4 col-md-3 col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">RF Perbulan</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">
                            {{ $reports }} / {{ $namaBulan }} </h4>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Profit last month -->

        <!-- Generated Leads -->
        <div class="col-xl-12 mb-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Total RF</h5>
                                <small></small>
                            </div>
                            <div class="chart-statistics">
                                <h3 class="card-title mb-1">{{ number_format($jumlah_total, 0, ',', '.',) }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 mb-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Total RF Perbulan</h5>
                                <small></small>
                            </div>
                            <div class="chart-statistics">
                                <h3 class="card-title mb-1">Rp.
                                    {{ number_format($jumlah_total, 0, ',', '.',) }} /
                                    {{
                                    $namaBulan }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Generated Leads -->
    </div>
</div>

<div class="col-lg-8 col-12">
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0 card-title">Total Pengajuan Perbulan</h5>

                </div>
                <div class="card-body mb-2"><canvas id="myAreaChart" width="100%" height="75"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0 card-title">Total Pengajuan Perbulan</h5>
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="75"></canvas></div>
            </div>
        </div>
    </div>
</div> --}}
<!--/ Revenue Report -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data RF</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Tgl Pengajuan</th>
                            {{-- <th>Dari</th>
                            <th>Departement</th> --}}
                            <th>Untuk</th>
                            <th>Pengajuan</th>
                            <th>Payment</th>
                            <th>Tgl Kebutuhan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($form as $data)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>
                                {{ $data->created_at->format('Y-m-d')}}
                            </td>
                            {{-- <td>
                                {{ $data->user->name }}
                            </td>
                            <td>
                                {{ $data->departement->nama_departement }}
                            </td> --}}
                            <td>
                                {{ $data->rujukan->name }}
                            </td>
                            <td>
                                {{ $data->kpengajuan->name }}
                            </td>
                            <td>
                                {{ $data->payment }}
                            </td>
                            <td>
                                {{ $data->tanggal_kebutuhan }}
                            </td>
                            <td>
                                @switch($data)
                                @case($data->status == null)
                                <span class="badge bg-secondary">Pending</span>
                                @break
                                @case($data->status == 2)
                                <span class="badge bg-danger">Reject</span>
                                @break
                                @case($data->status == 3)
                                <span class="badge bg-warning">Approve</span>
                                @break
                                @default
                                <span class="badge bg-success">PAID</span>
                                @endswitch
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
@endsection
