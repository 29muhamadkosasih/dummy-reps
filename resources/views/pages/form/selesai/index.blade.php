@extends('layouts/master')
@section('content')

@section('title', 'Form')

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
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Dari</th>
                            <th>Departement</th>
                            <th>Payment Method</th>
                            <th>Kategori
                                Pengajuan</th>
                            <th>Jumlah (Rp)</th>
                            <th>Nama Bank </th>
                            <th>No Rekening </th>
                            <th>Penerima </th>
                            <th class="text-center">Status</th>
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
                                {{ $data->kpengajuan->name }} </td>
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
                                {{ $data->norek->nama_penerima }}
                                @endswitch
                            </td>
                            <td class="text-center">
                                @switch($data)
                                @case($data->status == null)
                                <span class="badge bg-secondary">Pending</span>
                                @break
                                @case($data->status == 4)
                                <a href="{{ route('form-approve.view', $data->id) }}"
                                    class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                @break
                                @case($data->status == 5)
                                <span class="badge bg-secondary">Menunggu Konfirmasi Dana Masuk</span>
                                @break
                                @case($data->status == 6)
                                <span class="badge bg-primary">Menunggu Konfirmasi Pembayaran</span>
                                @break
                                @case($data->status == 7)
                                <a href="{{ route('form-approve.viewDetail', $data->id) }}"
                                    class="btn btn-icon btn-secondary btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                <a href="{{ url('approve/paid', $data->id) }}" class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-check"></span>
                                </a>
                                @break
                                @default
                                <a href="{{ url('form/print', $data->id) }}" target="_blank">
                                    <i class="menu-icon tf-icons ti ti-download"></i>
                                </a> &nbsp;
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