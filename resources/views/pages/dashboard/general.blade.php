@extends('layouts.master')

@section('content')

<div class="col-xl-3 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="badge p-2 bg-label-danger mb-2 rounded">
                <i class="ti ti-currency-dollar ti-md"></i>
            </div>
            <h5 class="card-title mb-1 pt-2">Total Pengajuan</h5>
            <h5 class="card-title mb-1 pt-2">{{ $total }}</h5>

        </div>
    </div>
</div>

<!-- Total Profit -->
<div class="col-xl-3 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="badge p-2 bg-label-danger mb-2 rounded">
                <i class="ti ti-currency-dollar ti-md"></i>
            </div>
            <h5 class="card-title mb-1 pt-2">Paid Pengajuan</h5>
            <h5 class="card-title mb-1 pt-2">{{$paid}}</h5>
        </div>
    </div>
</div>

<!-- Total Sales -->
<div class="col-xl-3 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
            <h5 class="card-title mb-1 pt-2">Process Pengajuan</h5>
            <h5 class="card-title mb-1 pt-2">{{ $process }}</h5>
        </div>
    </div>
</div>

<div class="col-xl-3 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
            <h5 class="card-title mb-1 pt-2">Cancel Pengajuan</h5>
            <h5 class="card-title mb-1 pt-2">{{ $cancel }}</h5>
        </div>
    </div>
</div>


<div class="col-xl-4 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 pt-2">Total Pengajuan</h5>
            <h5 class="card-title mb-1 pt-2">Rp. {{ number_format($jumlah_total, 0, ',', '.',)}} / {{ $namaBulan }}</h5>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 pt-2">Total Pengajuan Perbulan</h5>
            <h5 class="card-title mb-1 pt-2">
                Rp. {{ number_format($jumlah_total, 0, ',', '.',)}} / {{ $namaBulan }}
            </h5>
        </div>
    </div>
</div>

<div class="col-xl-4 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 pt-2">Total Pengajuan Perbulan</h5>
            <h5 class="card-title mb-1 pt-2">{{ $reports }} /
                {{$namaBulan }}</h5>
        </div>
    </div>
</div>

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

<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Pengajuan</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Dari</th>
                            <th>Departement</th>
                            <th>Untuk</th>
                            <th>Pengajuan</th>
                            <th>Payment</th>
                            <th>Tanggal Kebutuhan</th>
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
                            <td>
                                {{ $data->user->name }}
                            </td>
                            <td>
                                {{ $data->departement->nama_departement }}
                            </td>
                            <td>
                                {{ $data->to }}
                            </td>
                            <td>
                                {{ $data->ketegori_pengajuan }}
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
