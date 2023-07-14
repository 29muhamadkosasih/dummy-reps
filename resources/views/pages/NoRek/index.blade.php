@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="head-label">
                    @if (isset($edit))
                    <h4 class="card-title">Edit Data </h4>
                    @else
                    <h4 class="card-title">Tambah Data </h4>
                    @endif
                </div>
            </div>
            <div class="card-body pt-2">
                @if (isset($edit))
                @include('pages.NoRek.edit')
                @else
                @include('pages.NoRek.create')
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="card">
            {{-- header --}}
            <div class="card-header border-bottom">
                <div class="head-label">
                    <h4 class="card-title">List Data </h4>
                </div>
            </div>

            {{-- body --}}
            <div class="card-body table-responsive">
                <table class="table table-bordered dataTable zero-configuration">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bank</th>
                            <th>Rekening</th>
                            <th>Nama Penerima</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($norek as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->bank->nama_bank }}</td>
                            <td>{{ $data->no_rekening }}</td>
                            <td>{{ $data->nama_penerima }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('norek.destroy', $data->id) }}" method="POST">
                                    <a href="{{ route('norek.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                        <i data-feather='edit'></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i data-feather='trash'></i>
                                    </button>
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
@endsection
