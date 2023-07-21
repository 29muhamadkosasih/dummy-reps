@extends('layout.master')

@section('content')
<div class="content-body">
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ $total }}</h3>
                            <span>Total Pengajuan</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <i data-feather="user" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{$paid}}</h3>
                            <span>Paid Pengajuan</span>
                        </div>
                        <div class="avatar bg-light-danger p-50">
                            <span class="avatar-content">
                                <i data-feather="user-plus" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ $process }}</h3>
                            <span>Process Pengajuan</span>
                        </div>
                        <div class="avatar bg-light-success p-50">
                            <span class="avatar-content">
                                <i data-feather="user-check" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ $cancel }}</h3>
                            <span>Cancel Pengajuan</span>
                        </div>
                        <div class="avatar bg-light-warning p-50">
                            <span class="avatar-content">
                                <i data-feather="user-x" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-lg-4 col-12">
                <div class="row match-height">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Total Pengajuan Perbulan</h4>
                                    </div>
                                    <div class="fw-bolder">
                                        <div>
                                            <h1 class="fw-bolder">{{ $reports }} /
                                                {{
                                                $namaBulan }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Report Card -->
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Total Pengajuan Perbulan</h4>
                                    </div>
                                    <div class="fw-bolder">
                                        <div>
                                            <h1 class="fw-bolder">
                                                Rp. {{ number_format($jumlah_total, 0, ',', '.',)}} / {{ $namaBulan }}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Total Pengajuan</h4>
                                    </div>
                                    <div class="fw-bolder">
                                        <div>
                                            <h1 class="fw-bolder">Rp. {{ number_format($jumlah_total_all, 0, ',',
                                                '.',)}}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Total Pengajuan Perbulan</h4>
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="75"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Total pengajuan Perbulan</h4>
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="75"></canvas></div>
                </div>
            </div>
        </div>

        <!--/ Revenue Report Card -->
        <div class="row match-height">
            <div class="col-lg-12 col-12">
                <div class="card card-company-table">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Data Pengajuan </h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered zero-configuration">
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
        </div>

</div>

</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
@endsection
