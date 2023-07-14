@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="head-label">
                    @if (isset($edit))
                    <h4 class="card-title">Edit Data User</h4>
                    @else
                    <h4 class="card-title">Tambah Data User</h4>
                    @endif
                </div>
            </div>
            <div class="card-body pt-2">
                @if (isset($edit))
                @include('pages.user.edit')
                @else
                @include('pages.user.create')
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="card">
            {{-- header --}}
            <div class="card-header border-bottom">
                <div class="head-label">
                    <h4 class="card-title">List Data User</h4>
                </div>
            </div>

            {{-- body --}}
            <div class="card-body table-responsive">
                <table class="table table-bordered dataTable zero-configuration">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            {{-- <th>Email</th> --}}
                            {{-- <th>No HP</th> --}}
                            <th>Departement</th>
                            <th>Jabatan</th>
                            <th width='150px'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->username }}</td>
                            {{-- <td>{{ $data->email }}</td> --}}
                            {{-- <td>{{ $data->no_hp }}</td> --}}
                            <td>{{ $data->departement->nama_departement }}</td>
                            <td>{{ $data->jabatan->jabatan }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('user.destroy', $data->id) }}" method="POST">
                                    <a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning btn-sm">
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