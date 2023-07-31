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
                            <th>Tanggal Kebutuhan</th>
                            <th>Departement</th>
                            <th>Keperluan</th>
                            <th>Untuk</th>
                            <th>Kategori
                                Pengajuan</th>
                            <th>Status</th>
                            <th width='230px' style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($form as $data) <tr>
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
                                {{ $data->keperluan->name }}
                            </td>
                            <td>
                                {{ $data->rujukan->name }}
                            </td>
                            <td>
                                {{ $data->kpengajuan->name }} </td>
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
                            <td style="text-align: center">

                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('form.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- @can('form-checked.detail') --}}
                                    <a href="{{ route('form-checked.detail', $data->id) }}"
                                        class="btn btn-icon btn-secondary btn-sm">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    {{-- @endcan --}}

                                    {{-- @can('form-checked.edit') --}}
                                    <a href="{{ route('form-checked.edit', $data->id) }}"
                                        class="btn btn-icon btn-warning btn-sm">
                                        <span class="ti ti-edit"></span>
                                    </a>
                                    {{-- @endcan --}}

                                    {{-- @can('form-checked.reject') --}}
                                    <a href="{{ url('reject/maker', $data->id) }}"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-x"></span>
                                    </a>
                                    {{-- @endcan --}}

                                    {{-- @can('form-checked.approve') --}}
                                <a href="{{ url('approve/maker', $data->id) }}"
                                        class="btn btn-icon btn-success btn-sm">
                                        <span class="ti ti-check"></span>
                                    </a>
                                    {{-- @endcan --}}
                                    {{-- @can('form-checked.delete') --}}
                                    <button type="submit" class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>

                                    </button>
                                    {{-- @endcan --}}
                                </form>

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
