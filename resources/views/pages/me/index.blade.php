@extends('layout.master')
@section('content')
<section id="complex-header-datatable">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Profile </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th width='10px'style="text-align: center" >No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th width='150px' style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $data->name }}
                                </td>
                                <td>
                                    {{ $data->email }}
                                </td>
                                <td>
                                    {{ $data->jabatan->jabatan }}
                                </td>
                                <td style="text-align: center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('me.destroy', $data->id) }}" method="POST">

                                        <a href="{{ route('me.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                            <i data-feather='edit'></i>
                                        </a>
                                        {{-- <a href="" class="btn btn-success btn-sm">
                                            <i data-feather='check'></i>
                                        </a> --}}
                                        @csrf
                                        @method('DELETE')

                                        {{-- <button type="submit" class="btn btn-danger btn-sm">
                                            <i data-feather='trash'></i>
                                        </button> --}}
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

</section>

@endsection
