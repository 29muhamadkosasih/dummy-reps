@extends('layout.master')
@section('content')
<section id="complex-header-datatable">

    <div class="row">
        {{-- <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Profile </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th width='10px' style="text-align: center">No</th>
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
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
        <div class="offset-2 col-8">
            @foreach ($user as $data)
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-50"></h4>
                    <a href="{{ route('me.edit', $data->id) }}" class="btn btn-primary btn-sm">
                        <i data-feather='edit'></i>
                        Edit Profile
                    </a>
                </div>
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded mt-3 mb-2"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}?background=0D8ABC&color=fff"
                                height="110" width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h4>
                                    {{ $data->name }}
                                </h4>
                                <span class="badge bg-light-success">
                                    {{ $data->jabatan->jabatan }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-7 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-5 fw-bolder mb-1">Name</dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->name }}</dd>

                                        <dt class="col-sm-5 fw-bolder mb-1">Username</dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->username }}</dd>

                                        <dt class="col-sm-5 fw-bolder mb-1">Email</dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->email }}</dd>

                                    </dl>
                                </div>
                                <div class="col-xl-5 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-5 fw-bolder mb-1">No. Handphone </dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->no_hp }}</dd>

                                        <dt class="col-sm-5 fw-bolder mb-1">Jabatan</dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->jabatan->jabatan }} </dd>

                                        <dt class="col-sm-5 fw-bolder mb-1">Departement</dt>
                                        <dd class="col-sm-7 mb-1">: {{ $data->departement->nama_departement }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>

@endsection