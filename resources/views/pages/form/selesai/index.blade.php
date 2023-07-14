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
                                <th>Tanggal Kebutuhan</th>
                                <th>Departement</th>
                                <th>Kategori
                                    Pengajuan</th>
                                <th>Status</th>
                                <th>Jumlah </th>
                                <th width='180px' style="text-align: center">Action</th>
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
                                    {{ $data->tanggal_kebutuhan }}
                                </td>
                                <td>
                                    {{ $data->departement->nama_departement }}
                                </td>
                                <td>
                                    {{ $data->ketegori_pengajuan }}
                                </td>
                                <td>
                                    {{-- {{ $data->status }} --}}
                                    @switch($data)
                                    @case($data->status == null)
                                    <span class="badge bg-secondary">Pending</span>
                                    @break
                                    @case($data->status == 1)
                                    <span class="badge bg-success"> RF Telah DiChecked</span> @break
                                    @default
                                    <span class="badge bg-success">Selesai</span>
                                    @endswitch
                                </td>
                                <td>
                                    {{ $data->jumlah_total }}
                                </td>
                                <td style="text-align: center">
                                    <a href="{{ route('form-list.show', $data->id) }}"
                                        class="btn btn-secondary btn-sm"><i data-feather='eye'></i></a>
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