@extends('layout.master')

@section('content')
<div class="content-body">
    <section id="dashboard-ecommerce">
        <div class="row match-height">
            <div class="col-lg-4 col-12">
                <div class="row match-height">
                    <!-- Bar Chart - Orders -->
                    <div class="col-lg-6 col-md-3 col-6">
                        <div class="card">
                            <div class="card-body pb-50">
                                <h6>Total Pengajuan Bulanan</h6>
                                <h2 class="fw-bolder mb-1">
                                    Rp.{{ number_format($form, 0, ',', '.',) }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!--/ Bar Chart - Orders -->

                    <!-- Line Chart - Profit -->
                    <div class="col-lg-6 col-md-3 col-6">
                        <div class="card card-tiny-line-stats">
                            <div class="card-body pb-50">
                                <h6>Total RF Bulanan</h6>
                                <h1 class="fw-bolder mb-1">{{ $formss }}</h1>
                            </div>
                        </div>
                    </div>
                    <!--/ Line Chart - Profit -->

                    {{--
                    <!-- Earnings Card -->
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card earnings-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title mb-1">Earnings</h4>
                                        <div class="font-small-2">This Month</div>
                                        <h5 class="mb-1">$4055.56</h5>
                                        <p class="card-text text-muted font-small-2">
                                            <span class="fw-bolder">68.2%</span><span> more earnings than last
                                                month.</span>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div id="earnings-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Earnings Card --> --}}
                </div>
            </div>

            <!-- Revenue Report Card -->
            <div class="col-lg-8 col-12">
                <div class="card card-revenue-budget">
                    <div class="row mx-0">
                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-50 mb-sm-0 mt-2">Request Form Report</h4>
                        </div>
                        <div id="revenue-report-chart"></div>
                        {{-- <canvas id="laporanChart"></canvas> --}}
                        <div id="grafik"></div>


                    </div>
                </div>
            </div>
            <!--/ Revenue Report Card -->
        </div>

        <div class="row match-height">
            <!-- Company Table Card -->
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
                                        {{-- <th width='150px' style="text-align: center">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($forms as $data)
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
                                            {{-- {{ $data->status }} --}}
                                            @switch($data)
                                            @case($data->status == null)
                                            <span class="badge bg-secondary">Pending</span>
                                            @break
                                            @case($data->status == 2)
                                            <span class="badge bg-danger">Reject</span>
                                            @break
                                            @default
                                            <span class="badge bg-success">Process</span>
                                            @endswitch
                                        </td>
                                        {{-- <td style="text-align: center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('form.destroy', $data->id) }}" method="POST">

                                                <a href="{{ route('form.show', $data->id) }}"
                                                    class="btn btn-secondary btn-sm"><i data-feather='eye'></i></a>

                                                <a href="{{ route('form.edit', $data->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i data-feather='edit'></i>
                                                </a>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i data-feather='check'></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i data-feather='trash'></i>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Company Table Card -->
        </div>
    </section>
</div>
@endsection
