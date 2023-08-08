@extends('layouts/master')
@section('content')
@section('title', 'jabatan')
<!-- Invoice table -->
<div class="col-xs-4 col-sm-4 col-md-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    @if (isset($edit))
                    <h5 class="mb-0">Edit Data jabatan</h5>
                    @else
                    <h5 class="mb-0">Tambah Data jabatan</h5>
                    @endif
                </div>
                <div class="card-body">
                    @if (isset($edit))
                    @include('pages.jabatan.edit')
                    @else
                    @include('pages.jabatan.create')
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
                    <h5 class="mb-0">List Data jabatan</h5>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px'>No</th>
                            <th>jabatan</th>
                            <th width='100px' class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->jabatan }}</td>
                            <td style="text-align: center">
                                {{-- @can('jabatan.edit') --}}
                                <a href="{{ route('jabatan.edit', $data->id) }}"
                                    class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                {{-- @endcan --}}

                                {{-- @can('jabatan.delete') --}}
                                <form action="{{ route('jabatan.destroy', $data->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                                {{-- @endcan --}}
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
