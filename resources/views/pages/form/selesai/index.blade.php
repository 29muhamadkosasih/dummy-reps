@extends('layouts/master')
@section('content')

<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">Data Pengajuan
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr >
                            <th width='10px' style="text-align: center">No</th>
                            <th>Dari</th>
                            <th>Departement</th>
                            <th>Payment Method</th>
                            <th>Kategori
                                Pengajuan</th>
                            <th>Jumlahh / (Rp)</th>
                            <th>Nama Bank </th>
                            <th>No Rekening </th>
                            <th>Penerima </th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($form as $data)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>
                                {{ $data->user->name }}
                            </td>
                            <td>
                                {{ $data->departement->nama_departement }}
                            </td>
                            <td>
                                {{ $data->payment }}
                            </td>
                            <td>
                                {{ $data->ketegori_pengajuan }}
                            </td>
                            <td>
                                {{ number_format($data->jumlah_total, 0, ',', '.',) }}
                            </td>
                            <td>
                                @switch($data)
                                @case($data->norek_id == null)
                                <span class="badge bg-info">
                                    <i data-feather='dollar-sign'></i>
                                    Cash
                                </span>
                                @break
                                @default
                                {{ $data->norek->bank->nama_bank }}
                                @endswitch
                            </td>
                            <td>
                                @switch($data)
                                @case($data->norek_id == null)
                                <span class="badge bg-info">
                                    <i data-feather='dollar-sign'></i>
                                    Cash
                                </span>
                                @break
                                @default
                                {{ $data->norek->no_rekening }} @endswitch
                            </td>
                            <td>
                                @switch($data)
                                @case($data->norek_id == null)
                                <span class=" badge bg-info">
                                    <i data-feather='dollar-sign'></i>
                                    Cash
                                </span>
                                @break
                                @default
                                {{ $data->norek->nama_penerima }} @endswitch
                            </td>
                            <td>
                                @switch($data)
                                @case($data->status == null)
                                <span class="badge bg-secondary">Pending</span>
                                @break
                                @case($data->status == 1)
                                <span class="badge bg-success"> RF Telah DiChecked</span> @break
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
<!-- /Invoice table -->
@endsection
