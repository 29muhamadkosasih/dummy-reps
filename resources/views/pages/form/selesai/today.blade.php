@extends('layouts/master')
@section('content')

@section('title', 'Form')

<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">Pengajuan Tanggal : {{ $currentDate }}
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Dari</th>
                            <th>Payment Method</th>
                            <th>Kategori
                                Pengajuan</th>
                            <th>Jumlah (Rp)</th>
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
                                {{ $data->payment }}
                            </td>
                            <td>
                                {{ $data->kpengajuan->name }} </td>
                            <td style="text-align :right ">
                                {{ number_format($data->jumlah_total, 0, ',', '.',) }}
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <th colspan="4" style="text-align :right ">TOTAL</th>
                            <td style="text-align :right"> {{ number_format($jumlah_total, 0, ',',
                                '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection