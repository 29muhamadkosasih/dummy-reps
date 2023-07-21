@extends('layout.master')
@section('content')
<section id="complex-header-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Data Pengajuan </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th width='10px' style="text-align: center">No</th>
                                <th>Dari</th>
                                <th>Departement</th>
                                <th>Payment Method</th>
                                <th>Kategori
                                    Pengajuan</th>
                                <th>Jumlah/RP.</th>
                                <th>Nama Bank </th>
                                <th>No Rekening </th>
                                <th>A/n </th>
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
                                    {{ $data->jumlah_total }}
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
</section>
@endsection