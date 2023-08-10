@extends('layouts/master')

@section('title', 'Report PPH 23')

@section('content')
<!-- Invoice table -->
<div class="col-xl-12 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">Data Report PPH 23
                </div>
            </div>
            <form action="{{ route('laporan.getLaporan.reportpph') }}" method="POST">
                @csrf
                <label for="from" class="mb-2">Start Date</label><br>
                <input type="text" name="from" class="form-control mb-2" placeholder="Start Date"
                    onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                <label for="to" class="mb-2">End Date</label><br>
                <input type="text" name="to" class="form-control mb-3" placeholder="End Date"
                    onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                <button type="submit" class="btn btn-primary mb-0" style="align-items: right">Cari Data</button>
            </form>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Report PPH 23</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ url('/export_excel/reportpph') }}" class="btn btn-success me-2" target="_blank">
                        <span class="ti ti-arrow-bar-to-down"></span>&nbsp;
                        Excel</a>
                    <a href="{{ route('reportpph.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Client</th>
                            <th>No Invoice</th>
                            <th>Bruto (Rp.)</th>
                            <th>Payment In (Rp.)</th>
                            <th>Paid Date</th>
                            <th>PPH 23 (Rp.)</th>
                            <th>Npwp</th>
                            <th>Masa Pajak</th>
                            <th>No Bukpot</th>
                            <th>Tanggal Pemotongan</th>
                            <th width='150px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($reportpph as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$user->client}}</td>
                            <td>{{$user->no_invoice}}</td>
                            <td style="text-align: right">

                                {{ number_format($user->bruto, 0, ',', '.') }}
                            </td>
                            <td style="text-align: right">

                                {{ number_format($user->payment_in, 0, ',', '.') }}
                            </td>
                            <td>{{$user->paid_date}}</td>
                            <td style="text-align: right">

                                {{ number_format($user->pph23, 0, ',', '.') }}
                            </td>
                            <td>{{$user->npwp}}</td>
                            <td>{{$user->masa_pajak}}</td>
                            <td>{{$user->no_bukpot}}</td>
                            <td>{{$user->tgl_pemotongan}}</td>
                            <td class="text-center">
                                <a href="{{ route('reportpph.edit', $user->id) }}"
                                    class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                <form action="{{ route('reportpph.destroy', $user->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr style="background-color: skyblue">
                        <th colspan="3" style="text-align: right">TOTAL</th>
                        <td colspan="" style="text-align: right">

                            {{ number_format($jumlah_a, 0, ',', '.') }}
                            {{-- 90 --}}
                        </td>
                        <td colspan="1" style="text-align: right">
                            {{ number_format($jumlah_b, 0, ',', '.') }}
                            {{-- 90 --}}
                        </td>
                        <td></td>
                        <td colspan="" style="text-align: right">

                            {{ number_format($jumlah_c, 0, ',', '.') }}
                            {{-- 90 --}}
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection