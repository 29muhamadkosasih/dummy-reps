@extends('layouts/master')
@section('content')


<!-- Invoice table -->
<div class="col-xs-4 col-sm-4 col-md-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    @if (isset($edit))
                    <h5 class="mb-0">Edit Data norek</h5>
                    @else
                    <h5 class="mb-0">Tambah Data norek</h5>
                    @endif
                </div>
                <div class="card-body">
                    @if (isset($edit))
                    @include('pages.norek.edit')
                    @else
                    @include('pages.norek.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data norek</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px'>No</th>
                            <th>Bank</th>
                            <th>Rekening</th>
                            <th>Nama Penerima</th>
                            <th width='100px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($norek as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->bank->nama_bank }}</td>
                            <td>{{ $data->no_rekening }}</td>
                            <td>{{ $data->nama_penerima }}</td>
                            <td style="text-align: center">
                                @can('norek.edit')
                                <a href="{{ route('norek.edit', $data->id) }}" class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                @endcan

                                @can('norek.delete')
                                <form action="{{ route('norek.destroy', $data->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                                @endcan
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
