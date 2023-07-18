@extends('layout.master')

@section('content')
<div class="content-body">
    <section id="dashboard-ecommerce">
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
                                    <div class="fw-bolder mb-1">
                                        <div>
                                            <h1 class="fw-bolder">Rp.{{ number_format($bulan, 0, ',', '.',) }} / {{
                                                $namaBulan }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Total RF Perbulan</h4>
                                    </div>
                                    <div class="fw-bolder m-1">
                                        <div>
                                            <h1 class="fw-bolder">{{ $total }} / {{ $namaBulan }} </h1>
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
            </div>
            <!--/ Revenue Report Card -->
        </div>

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
                                            <span class="badge bg-danger">Cancel</span>
                                            @break
                                            @case($data->status == 3)
                                            <span class="badge bg-info">Process</span>
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
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
</script>
@endsection